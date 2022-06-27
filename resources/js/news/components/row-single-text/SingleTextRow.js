import React from 'react';
import { Grid, Image, Label, Segment } from 'semantic-ui-react';

const SingleTextRow = (props) => {

return (

<div className="row">
{props.title.map((title, index) => (<div key={index} className="pb-3 col-lg-4 col-md-6">
    <div className="ui column grid">
        <div className="column">
            <div className="ui raised segment">
            <a className={"ui " + (props.color) + " ribbon label"}>{props.media}</a>
            <span>{props.pubdate[index]}</span>
                <div className="py-3">
                    <a href={props.link[index]} target="_blank" >
                    <div className="ui items">
                        <div className="item" style={{height: "192px", overflow: "auto", paddingTop: "2px"}}>
                            <div className="content">
                                <p className="header">{title}</p>
                                <div className="description" style={{display: "-webkit-box", overflow: "hidden", ["-webkit-line-clamp"]: "5", ["-webkit-box-orient"]: "vertical"}}>
                                <p>{props.description[index]}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            <div className="vertical segment">
                <div><a><i aria-hidden="true" className="share icon"></i>Share</a></div>
            </div>
            </div>
        </div>
    </div>
</div>))}
</div>

);

}

export default SingleTextRow;
