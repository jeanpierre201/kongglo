import React from 'react';
import ItemImageList from './ItemImageList';

// Note: some RSS feeds can't be loaded in the browser due to CORS security.
// To get around this, you can use a proxy.

let i;
let input_image_md_cnn = [];
let input_title_cnn = [];

const feednami = window.feednami;

class FeedContent2 extends React.Component {

constructor(props) {
    super(props);
    this.state = {
        title: [],
        image_md: [],
        errorMessage: ''
    }
    };

async componentDidMount() {

    await feednami.load('http://rss.cnn.com/rss/cnn_world.rss')
        .then(response => {

              // after portada
              for (i = 4; i < response.entries.length; i++) {
              if(response.entries[i]["media:group"]){
                input_image_md_cnn[i] = response.entries[i]["media:group"]["media:content"][3]["@"].url;
              }
              input_title_cnn[i] = response.entries[i].title;
              }
              this.setState({ image_md: input_image_md_cnn, title: input_title_cnn})})

    .catch(error => {
        this.setState({ errorMessage: error.message });
        console.error('There was an error!', error);
    });

}

render() {
    return (
    <ItemImageList title={this.state.title} image_md={this.state.image_md} error={this.state.errorMessage} />
    );
}


}

export default FeedContent2;
