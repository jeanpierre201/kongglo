import React from 'react';
import ReactDOM from 'react-dom';
import FeedContent2 from './FeedContent2';

const App = () => (
  <div>
    <FeedContent2 />
  </div>
)


// Take the react component and show it on the screen
ReactDOM.render( < App / > , document.querySelector('#cnn-image-list'));
