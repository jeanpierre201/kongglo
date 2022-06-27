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

let url_rss;
let media;
let color;

class FeedContent_cnn extends React.Component {

constructor(props) {

    // ##################  read Json Object ############################

    media = props.media;

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
        media: media.toUpperCase(),
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

            // ############ Get news input ##############################
            let currentDiv = document.getElementById("cnn-inputs");
            let currentDivInner = document.getElementById("cnn-inputs").innerHTML;
            let inputsNewsSet = Math.floor(currentDivInner);
            let inputsNews = inputsNewsSet+1;
            //console.log('inputsNews '+inputsNews);
            const inputsContent = inputsNews + 6;

            // #################################################################

            console.log(response.entries);

            // after portada
            for (i = inputsNews; i < inputsContent; i++) {

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
                    //   let remove_after= response.entries[i].description.indexOf('<');
                    //   result_description = response.entries[i].description.substring(0, remove_after);
                } else {
                    result_description = '';
                }
                //console.log(result);
                input_description[i] = result_description;

                let result_pubdate;
                //console.log(response.entries[i]["rss:pubdate"]["#"]);
                if( response.entries[i]["rss:pubdate"]) {

                    if( response.entries[i]["rss:pubdate"]["#"] !== null && typeof response.entries[i]["rss:pubdate"]["#"] !== 'undefined' ){
                        result_pubdate = response.entries[i]["rss:pubdate"]["#"];
                        result_pubdate = result_pubdate.substring(0, result_pubdate.length-7);
                    } else {
                        result_pubdate = 'empty';
                    }

                } else {
                    result_pubdate = '';
                }

                //console.log(result_pubdate);
                input_pubdate[i] = result_pubdate;

                let result_link;
                if( response.entries[i].link !== null ){
                result_link = response.entries[i].link;
                } else {
                result_link = 'empty';
                }
                //console.log(result);
                input_link[i] = result_link;

                currentDiv.innerHTML = '';
                currentDiv.appendChild(document.createTextNode(i.toString()));
            }

            this.setState({ media: media.toUpperCase(), color: color, title: input_title, description: input_description, pubdate: input_pubdate, link: input_link})})

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

export default FeedContent_cnn;
