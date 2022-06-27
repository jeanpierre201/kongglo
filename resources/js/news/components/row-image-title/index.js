import React from 'react';
import ReactDOM from 'react-dom';
import FeedContent7 from './FeedContent7';

let div_component = document.getElementById("getDiv-row-image-title").innerHTML;
console.log(div_component);

const App = () => (
    <FeedContent7 />
)


// Take the react component and show it on the screen
ReactDOM.render( < App / > , document.querySelector('#'+div_component));
