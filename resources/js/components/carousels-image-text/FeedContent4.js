import React from 'react';
import CarouselsImageText from './CarouselsImageText';

// Note: some RSS feeds can't be loaded in the browser due to CORS security.
// To get around this, you can use a proxy.

let i;
const input_image_md_cnn = [];
const input_title_cnn = [];
const input_description_cnn = [];

const feednami = window.feednami;

class FeedContent4 extends React.Component {

constructor(props) {
    super(props);
    this.state = {
        title: [],
        image: [],
        description: [],
        errorMessage: ''
    }
    };

async componentDidMount() {

    await feednami.load('http://rss.cnn.com/rss/cnn_world.rss')
        .then(response => {

              // after portada
              for (i = 0; i < 2; i++) {
              if(response.entries[i]["media:group"]){
                input_image_md_cnn[i] = response.entries[i]["media:group"]["media:content"][3]["@"].url;
              }
              input_title_cnn[i] = response.entries[i].title;
              let remove_after= response.entries[i].description.indexOf('<');
              let result =  response.entries[i].description.substring(0, remove_after);
              //console.log(result);
              input_description_cnn[i] = result;
              }
              this.setState({ image: input_image_md_cnn, title: input_title_cnn, description: input_description_cnn})})

    .catch(error => {
        this.setState({ errorMessage: error.message });
        console.error('There was an error!', error);
    });

}

render() {
    return (
    <CarouselsImageText title={this.state.title} description={this.state.description} image={this.state.image} error={this.state.errorMessage} />
    );
}


}

export default FeedContent4;
