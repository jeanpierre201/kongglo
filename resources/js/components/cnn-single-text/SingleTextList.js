import React from 'react';
import { Grid, Image, Label, Segment } from 'semantic-ui-react';

const SingleTextList = (props) => {

return (
<div>
    <div className="ui column grid">
        <div className="column">
            <div className="ui raised segment">
                <a className="ui red ribbon label">CNN</a>
                <span>Latest News</span>
                <div className="vertical segment py-3" >
                    <div className="ui items">
                        <div className="item" style={{height: "192px", overflow: "auto", paddingTop: "2px"}}>
                            <div className="content">
                            <a className="header">{props.title[0]}</a>
                                <div className="description" style={{}}>
                                <p>{props.description[0]}</p>
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
</div>

);

}

export default SingleTextList;
