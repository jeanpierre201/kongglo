import React from 'react';
import ReactDOM from 'react-dom';
import FeedContent5 from './FeedContent5';

let div_component = document.getElementById("getDiv-single-text").innerHTML;
console.log(div_component);

const App = () => (
  <div>
    <FeedContent5 />
  </div>
)


// Take the react component and show it on the screen
ReactDOM.render( < App / > , document.querySelector('#'+div_component));
