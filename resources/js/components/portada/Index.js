import React from 'react';
import ReactDOM from 'react-dom';
import FeedContent from './FeedContent';

const App = () => (
  <div>
    <FeedContent />
  </div>
)


// Take the react component and show it on the screen
ReactDOM.render( < App / > , document.querySelector('#root'));
