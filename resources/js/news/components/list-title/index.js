import React from 'react';
import ReactDOM from 'react-dom';
import FeedContent3 from './FeedContent3';

let div_component = document.getElementById("getDiv-list-title").innerHTML;
console.log(div_component);

const App = () => (
  <div>
    <FeedContent3 />
  </div>
)


// Take the react component and show it on the screen
ReactDOM.render( < App / > , document.querySelector('#'+div_component));
