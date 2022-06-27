import React from 'react';
import ReactDOM from 'react-dom';
import FeedCnnPortada from './FeedCnnPortada';
import FeedAbcPortada from './FeedAbcPortada';

// ##################  read Json Object ############################

let media;
let portada = false;

const getJsonString = document.getElementById("inputObj").innerHTML;
const getJson = JSON.parse(getJsonString);

for (const [key, value] of Object.entries(getJson)) {
    //console.log(key + ' : ' +  value);
    let newJson = JSON.stringify(value);
    let newJsonParse = JSON.parse(newJson);
    console.log(newJsonParse._components);
    Object.entries(newJsonParse._components).forEach(([key2, value2]) => {
        let newJsonComp = JSON.stringify(value2);
        let newJsonCompParse = JSON.parse(newJsonComp);
        if (newJsonCompParse.type == 'portada' && !portada) {
            media = newJsonParse._name;
            console.log('portada from '+media);
            portada = true;
    }
    });
}
// #################################################################

const Cnn = () => (
  <div>
    <FeedCnnPortada media={media} />
  </div>
)

const Abc = () => (
    <div>
      <FeedAbcPortada media={media} />
    </div>
)


if (media == 'cnn') {
    ReactDOM.render( < Cnn /> , document.getElementById(media+'-portada'));
}

if (media == 'abc-news') {
    ReactDOM.render( < Abc /> , document.querySelector('#'+media+'-portada'));
}

