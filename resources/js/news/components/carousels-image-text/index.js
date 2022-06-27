import React from 'react';
import ReactDOM from 'react-dom';
import FeedContent4 from './FeedContent4.js';

let div_component = document.getElementById("getDiv-carousels-image-text").innerHTML;
console.log(div_component);

const App = () => (
  <div>
    <FeedContent4 />
  </div>
)


// Take the react component and show it on the screen
ReactDOM.render( < App / > , document.querySelector('#'+div_component));
