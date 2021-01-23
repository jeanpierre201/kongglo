import React from 'react';
import ReactDOM from 'react-dom';
import FeedContent3 from './FeedContent3';

const App = () => (
  <div>
    <FeedContent3 />
  </div>
)


// Take the react component and show it on the screen
ReactDOM.render( < App / > , document.querySelector('#cnn-text-list'));
