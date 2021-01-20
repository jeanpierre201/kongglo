import React from 'react';
import { Grid, Image, Label, Segment } from 'semantic-ui-react';

const ItemImageList = (props) => {

return (
    <div>

<div className="ui column grid">
<div className="column">
<div className="ui raised segment">
<a className="ui red ribbon label">CNN</a>
<span>Latest News</span>
   <div className="ui items">
   {props.image_md.map((image, index) => (<div className="item" key={index}>
   <div className="ui small image">
   <img alt={props.title[index]} src={image} />
   </div>
   <div className="middle aligned content">
   <a href={'/news/kongglonews?title=' + props.title[index] + '&image=' + image +  '&description=' + props.description[index]} className="header">{props.title[index]}</a>
  </div>
  </div>))}
  </div>
  </div>
  </div>
  </div>
  </div>

);

}

export default ItemImageList;
