import React from 'react';
import Portada from './Portada';

// Note: some RSS feeds can't be loaded in the browser due to CORS security.
// To get around this, you can use a proxy.

let i = 0;
let input_image_lg = [];
let input_image_md = [];
const input_title = [];

const feednami = window.feednami;

class FeedContent extends React.Component {

constructor(props) {
    super(props);
    this.state = {
        title: [],
        image_lg: [],
        image_md: [],
        errorMessage: ''
    }
    };

async componentDidMount() {

    await feednami.load('http://rss.cnn.com/rss/cnn_world.rss')
        .then(response => {
              console.log(response.entries);
              for (let entry of response.entries) {

              if(entry["media:group"]){
                  if(i===0) {
                    input_image_lg[i] = entry["media:group"]["media:content"][2]["@"].url;
                    input_image_md[i] = entry["media:group"]["media:content"][3]["@"].url;
                  } else if(i===1) {
                    input_image_lg[i] = entry["media:group"]["media:content"][0]["@"].url;
                    input_image_md[i] = entry["media:group"]["media:content"][3]["@"].url;
                  } else {
                    input_image_lg[i] = entry["media:group"]["media:content"][3]["@"].url;
                    input_image_md[i] = entry["media:group"]["media:content"][3]["@"].url;
                  }
              }
              input_title[i] = entry.title;
              i++;
          }
              this.setState({ image_lg: input_image_lg, image_md: input_image_md, title: input_title})})

    .catch(error => {
        this.setState({ errorMessage: error.message });
        console.error('There was an error!', error);
    });

}

render() {
    return (
    <Portada title={this.state.title} image_lg={this.state.image_lg} image_md={this.state.image_md} error={this.state.errorMessage} />
    );
}



}

export default FeedContent;
