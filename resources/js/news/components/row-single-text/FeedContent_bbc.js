import React from 'react';
import SingleTextRow from './SingleTextRow';

// Note: some RSS feeds can't be loaded in the browser due to CORS security.
// To get around this, you can use a proxy.

let i;
const input_title = [];
const input_description = [];
const input_pubdate = [];
const input_link = [];

const feednami = window.feednami;

let color;
let url_rss;
let media;

class FeedContent_bbc extends React.Component {

constructor(props) {

    // ##################  read Json Object ############################

    media = props.media.toUpperCase();

    const getJsonString = document.getElementById("inputObj").innerHTML;
    const getJson = JSON.parse(getJsonString);


    for (const [key, value] of Object.entries(getJson)) {
        //console.log(key + ' : ' +  value);
        let newJson = JSON.stringify(value);
        let newJsonParse = JSON.parse(newJson);
        if (newJsonParse._name == props.media) {
            color = newJsonParse._color;
            url_rss = newJsonParse._url;
        }
    }
    // #################################################################

    super(props);
    this.state = {
        media: media,
        color: color,
        title: [],
        description: [],
        pubdate:[],
        link: [],
        errorMessage: ''
    }
    };

async componentDidMount() {

    await feednami.load(url_rss)
        .then(response => {

            console.log(response.entries);
              // after portada
              for (i = 0; i < 6; i++) {

                let result_title;
                //console.log(response.entries[i].title);
                if( response.entries[i].title != 'undefined'  || response.entries[i].title !== null ){
                    result_title = response.entries[i].title;
                } else {
                    result_title = 'empty';
                }
              input_title[i] = result_title;

              let result_description;
              //console.log(response.entries[i].description);
              if( response.entries[i].description !== null ){
                result_description = response.entries[i].description;
              } else {
                result_description = 'empty';
              }
              //console.log(result);
              input_description[i] = result_description;

            let result_pubdate;
            if( response.entries[i].pubdate_ms !== null && typeof response.entries[i].pubdate_ms !== 'undefined') {

                let result_pubdate_ms = response.entries[i].pubdate_ms;
                let today = new Date().getTime();
                const diffMs = today - result_pubdate_ms;
                const daysDiff = Math.round(diffMs/(1000*60*60*24));
                //console.log(daysDiff);
                if (daysDiff > 1 ) {
                    result_pubdate = daysDiff + " days ago";
                } else if (daysDiff == 1) {
                    result_pubdate = daysDiff + " day ago";
                } else {
                    //let result_pubdate_gmt = new Date(result_pubdate_ms);
                    //result_pubdate = result_pubdate.substring(0, result_pubdate.length-36);
                    //result_pubdate = result_pubdate_gmt.toLocaleDateString();
                    result_pubdate = "Today";
                }
            } else {
                result_pubdate = 'empty date';
            }

            console.log(result_pubdate);
            input_pubdate[i] = result_pubdate;

              let result_link;
              if( response.entries[i].link !== null ){
                result_link = response.entries[i].link;
              } else {
                result_link = 'empty';
              }
              //console.log(result);
              input_link[i] = result_link;
              }

              this.setState({ media: media, color: color, title: input_title, description: input_description, pubdate: input_pubdate, link: input_link})})

    .catch(error => {
        this.setState({ errorMessage: error.message });
        console.error('There was an error!', error);
    });

}

render() {
    return (
    <SingleTextRow media={this.state.media} color={this.state.color} title={this.state.title} description={this.state.description} pubdate={this.state.pubdate} link={this.state.link} error={this.state.errorMessage} />
    );
}


}

export default FeedContent_bbc;
