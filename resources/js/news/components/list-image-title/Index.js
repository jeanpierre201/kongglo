import React from 'react';
import ReactDOM from 'react-dom';
import FeedContent2 from './FeedContent2';

let div_component = document.getElementById("getDiv-list-image-title").innerHTML;
console.log(div_component);

const App = () => (
  <div>
    <FeedContent2 />
  </div>
)


// Take the react component and show it on the screen
ReactDOM.render( < App / > , document.querySelector('#'+div_component));
