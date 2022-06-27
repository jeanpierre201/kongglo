import React from 'react';
import PortadaAbc from './PortadaAbc';

// Note: some RSS feeds can't be loaded in the browser due to CORS security.
// To get around this, you can use a proxy.

let i = 0;
const input_image_lg = [];
const input_image_md = [];
const input_title = [];
const input_description = [];
const input_pubdate = [];
const input_link = [];

const feednami = window.feednami;

let url_rss;
let media;

class FeedAbcPortada extends React.Component {

    constructor(props) {

        // ##################  read Json Object ############################

        media = props.media;

        const getJsonString = document.getElementById("inputObj").innerHTML;
        const getJson = JSON.parse(getJsonString);

        for (const [key, value] of Object.entries(getJson)) {
            //console.log(key + ' : ' +  value);
            let newJson = JSON.stringify(value);
            let newJsonParse = JSON.parse(newJson);
            if (newJsonParse._name == media) {
                url_rss = newJsonParse._url;
            }
        }
        // #################################################################

        super(props);
        this.state = {
            media: media,
            title: [],
            image_lg: [],
            image: [],
            description: [],
            pubdate:[],
            link: [],
            errorMessage: ''
        }
    };

    async componentDidMount() {

        const currentDiv = document.getElementById(media+"-inputs");
        media = media.replace(/-/g, " ");


        await feednami.load(url_rss)
            .then(response => {

                console.log(response.entries);
                let total = response.entries.length;
                currentDiv.setAttribute("title", total.toString());

                for (let entry of response.entries) {

                    // News in Portada
                    if (entry["media:thumbnail"] && i < 4) {

                        if (i === 0) {
                            input_image_lg[i] = entry["media:thumbnail"][0]["@"].url;
                            input_image_md[i] = entry["media:thumbnail"][4]["@"].url;
                            console.log('estamos en 0 '+input_image_md[i]);
                            currentDiv.innerHTML = '';
                            currentDiv.appendChild(document.createTextNode(i.toString()));
                        } else if (i === 1) {
                            input_image_lg[i] = entry["media:thumbnail"][5]["@"].url;
                            input_image_md[i] = entry["media:thumbnail"][4]["@"].url;
                            console.log('estamos en 1 '+input_image_md[i]);
                            currentDiv.innerHTML = '';
                            currentDiv.appendChild(document.createTextNode(i.toString()));
                        } else {
                            input_image_lg[i] = entry["media:thumbnail"][4]["@"].url;
                            input_image_md[i] = entry["media:thumbnail"][4]["@"].url;
                            console.log('estamos en 2-3 '+input_image_md[i]);
                            currentDiv.innerHTML = '';
                            currentDiv.appendChild(document.createTextNode(i.toString()));
                        }
                    } else {
                        if(i < 4) {
                            input_image_md[i] = '/img/abc-logo.jpeg';
                            console.log('estamos en else '+input_image_md[i]);
                            currentDiv.innerHTML = '';
                            currentDiv.appendChild(document.createTextNode(i.toString()));
                        }
                    }

                    let result_title;

                    if( entry.title != 'undefined'  || entry.title !== null ){
                        result_title = entry.title;
                    } else {
                        result_title = 'empty';
                    }
                    input_title[i] = result_title;
                    //console.log(input_title[i]);

                    let result_description;
                    //console.log(entry.description);
                    if( entry.description != 'undefined'  || entry.description !== null ){
                        result_description = entry.description;
                        // let remove_after = entry.description.indexOf('<');
                        // result_description = entry.description.substring(0, remove_after);
                    } else {
                        result_description = '';
                    }
                    input_description[i] = result_description;

  /*                   let result_pubdate;
                    //console.log();
                    if( entry["rss:pubdate"]) {

                        if( entry["rss:pubdate"]["#"] !== null && typeof entry["rss:pubdate"]["#"] !== 'undefined' ){
                            result_pubdate = entry["rss:pubdate"]["#"];
                            result_pubdate = result_pubdate.substring(0, result_pubdate.length-9);
                        } else {
                            result_pubdate = 'empty';
                        }

                    } else {
                        result_pubdate = '';
                    }

                    //console.log(result_pubdate);
                    input_pubdate[i] = result_pubdate; */

                    let result_pubdate;
                    if( entry["pubdate_ms"] !== null && typeof entry["pubdate_ms"] !== 'undefined') {

                            let result_pubdate_ms = entry["pubdate_ms"];
                            let today = new Date().getTime();
                            const diffMs = today - result_pubdate_ms;
                            const daysDiff = Math.round(diffMs/(1000*60*60*24));
                            //console.log(daysDiff);
                            if (daysDiff > 1 ) {
                                result_pubdate = daysDiff + " days ago";
                            } else if (daysDiff == 1) {
                                result_pubdate = daysDiff + " day ago";
                            } else {
                                let result_pubdate_gmt = new Date(result_pubdate_ms);
                                //result_pubdate = result_pubdate.substring(0, result_pubdate.length-36);
                                result_pubdate = "Today";
                            }
                    } else {
                        result_pubdate = 'empty date';
                    }

                    console.log(result_pubdate);
                    input_pubdate[i] = result_pubdate;

                    let result_link;
                    if( entry.link !== null ){
                        result_link = entry.link;
                    } else {
                        result_link = 'empty';
                    }
                    //console.log(result);
                    input_link[i] = result_link;

                    i++;
                }

                this.setState({ media: media, pubdate: input_pubdate, link: input_link, image_lg: input_image_lg, image: input_image_md, description: input_description, title: input_title })
            })

            .catch(error => {
                this.setState({ errorMessage: error.message });
                console.error('There was an error!', error);
            });

    }


    render() {
        return (
            <div>
            <   PortadaAbc media={this.state.media} title={this.state.title} description={this.state.description} image_lg={this.state.image_lg} image={this.state.image} pubdate={this.state.pubdate} link={this.state.link} error={this.state.errorMessage} />
            </div>
        );
    }

}


export default FeedAbcPortada;
