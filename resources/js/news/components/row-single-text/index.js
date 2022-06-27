import React from 'react';
import ReactDOM from 'react-dom';
import FeedContent_cnn from './FeedContent_cnn';
import FeedContent_bbc from './FeedContent_bbc';
import FeedTheGuardian from './FeedTheGuardian';
import FeedContent_abc from './FeedContent_abc';

let media = [];

// ##################  read Json Object ############################
const getJsonString = document.getElementById("inputObj").innerHTML;
const getJson = JSON.parse(getJsonString);
//console.log(getJson);

for (const [key, value] of Object.entries(getJson)) {
    //console.log(key + ' : ' +  value);
    let newJson = JSON.stringify(value);
    let newJsonParse = JSON.parse(newJson);
    media[key] = newJsonParse._name;
    console.log(media[key]);
}
// #################################################################


const CNN = () => (
    <FeedContent_cnn media={media[0]}  />
)

const BBC = () => (
    <FeedContent_bbc media={media[1]} />
)

const TheGuardian = () => (
    <FeedTheGuardian media={media[2]} />
)

const ABC = () => (
    <FeedContent_abc media={media[3]} />
)

//ReactDOM.render(<CNN />, document.getElementById(media[0]+'-row-single-text'));
ReactDOM.render(<BBC />, document.getElementById(media[1]+'-row-single-text'));
ReactDOM.render(<TheGuardian />, document.getElementById(media[2]+'-row-single-text'));
//ReactDOM.render(<ABC />, document.getElementById(media[3]+'-row-single-text'));






