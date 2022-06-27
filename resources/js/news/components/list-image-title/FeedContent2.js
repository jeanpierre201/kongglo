import React from 'react';
import ItemImageList from './ItemImageList';

// Note: some RSS feeds can't be loaded in the browser due to CORS security.
// To get around this, you can use a proxy.

let i;
let input_image_md_cnn = [];
let input_title_cnn = [];
let input_description_cnn = [];

const feednami = window.feednami;

let url_rss = document.getElementById("getUrl").innerHTML;

class FeedContent2 extends React.Component {

constructor(props) {
    super(props);
    this.state = {
        title: [],
        image_md: [],
        description: [],
        errorMessage: ''
    }
    };

async componentDidMount() {

    await feednami.load(url_rss)
        .then(response => {

              // after portada
              for (i = 4; i < response.entries.length; i++) {
              if(response.entries[i]["media:group"]){
                input_image_md_cnn[i] = response.entries[i]["media:group"]["media:content"][3]["@"].url;
              }
              input_title_cnn[i] = response.entries[i].title;
              let result;
              //console.log(response.entries[i].description);
              if( response.entries[i].description !== null ){
                  let remove_after= response.entries[i].description.indexOf('<');
                  result = response.entries[i].description.substring(0, remove_after);
              } else {
                  result = 'empty';
              }
              //console.log(result);
              input_description_cnn[i] = result;
              }
              this.setState({ image_md: input_image_md_cnn, title: input_title_cnn, description: input_description_cnn})})

    .catch(error => {
        this.setState({ errorMessage: error.message });
        console.error('There was an error!', error);
    });

}

render() {
    return (
    <ItemImageList title={this.state.title} description={this.state.description} image_md={this.state.image_md} error={this.state.errorMessage} />
    );
}


}

export default FeedContent2;
