import React from 'react';
import { Grid, Image, Label, Segment } from 'semantic-ui-react';

const SingleImageRow = (props) => {

return (

<div className="row">
{props.title.map((title, index) => (<div key={index} className="pb-3 col-lg-4 col-md-6">
        <div className="ui column grid">
            <div className="column">
                <div className="ui raised segment image">
                <a className="ui red ribbon label">CNN</a>

                    <img className="segment-image" src={props.image[index]}/>
                    <div className="py-3">
                        <div className="ui items">
                            <div className="pt-1 item item-image-title">
                                <div className="content">
                                    <a className="header">{title}</a>
                                    {/* <div className="py-1 description">
                                        <p>{props.description[0]}</p>
                                    </div> */}
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

export default SingleImageRow;
