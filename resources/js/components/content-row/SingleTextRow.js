import React from 'react';
import { Grid, Image, Label, Segment } from 'semantic-ui-react';

const SingleTextRow = (props) => {

return (

<div className="row">
{props.title.map((title, index) => (<div key={index} className="pb-3 col-lg-4 col-md-6">
    <div className="ui column grid">
        <div className="column">
            <div className="ui raised segment">
            <a className="ui red ribbon label">CNN</a>
            <span>Latest News</span>
                <div className="py-3">
                    <div className="ui items">
                        <div className="item" style={{height: "192px", overflow: "auto", paddingTop: "2px"}}>
                            <div className="content">
                                <a className="header">{title}</a>
                                <div className="description" style={{}}>
                                <p>{props.description[index]}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div className="vertical segment">
                <div><a><i aria-hidden="true" className="user icon"></i>22 Friends</a></div>
            </div>
            </div>
        </div>
    </div>
</div>))}
</div>

);

}

export default SingleTextRow;
