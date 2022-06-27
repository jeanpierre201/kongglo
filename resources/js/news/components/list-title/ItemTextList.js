import React from 'react';
import { Grid, Image, Label, Segment } from 'semantic-ui-react';

const ItemTextList = (props) => {

return (
<div>
<div className="ui column grid">
        <div className="column">
            <div className="ui raised segment">
                <a className="ui red ribbon label">CNN</a>
                <span>Latest News</span>
                <div className="ui relaxed divided list item-title-list">
                {props.title.map((title, index) => (<div className="item" key={index}>
                        <div className="content">
                            <a className="header">{title}</a>
                            <div className="description">Updated 10 mins ago</div>
                        </div>
                    </div>))}
                </div>
            </div>
        </div>
    </div>
</div>

);

}

export default ItemTextList;
