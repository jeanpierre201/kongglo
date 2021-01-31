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
                <div className="ui relaxed py-3" style={{height: "214px", overflow: "auto"}} >

                <div className="ui items">
                    <div className="item">
                        <div className="content">
                            <a className="header">{props.title[0]}</a>
                        <div className="py-1 description">
                            <p>{props.description[0]}</p>
                        </div>
                       <div className="extra content"><a><i aria-hidden="true" className="user icon"></i>22 Friends</a></div>
                       </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>

);

}

export default SingleTextList;
