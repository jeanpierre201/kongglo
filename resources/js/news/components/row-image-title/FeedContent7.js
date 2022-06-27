import React from 'react';
import SingleImageRow from './SingleImageRow';

// Note: some RSS feeds can't be loaded in the browser due to CORS security.
// To get around this, you can use a proxy.

let i;
const input_title_cnn = [];
const input_description_cnn = [];
const input_image_md_cnn = [];

const feednami = window.feednami;

let url_rss = document.getElementById("getUrl").innerHTML;

class FeedContent7 extends React.Component {

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

    await feednami.load(url_rss)
        .then(response => {

              // after portada
              for (i = 0; i < 3; i++) {
              input_image_md_cnn[i] = response.entries[i]["media:group"]["media:content"][4]["@"].url;
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
    <SingleImageRow title={this.state.title} description={this.state.description} image={this.state.image} error={this.state.errorMessage} />
    );
}


}

export default FeedContent7;
