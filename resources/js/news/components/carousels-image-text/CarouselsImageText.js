import React from 'react';

const CarouselsImageText = (props) => {

    return (

    <div>

        <div className="py-3 ui column grid">
            <div className="column">
                <div className="ui raised segment">
                    <a className="ui red ribbon label">CNN</a>
                    <span>Latest News</span>

                    <div id="carouselExampleControls" className="carousel slide carousel-image-text" data-ride="carousel">
                        <div className="carousel-inner">
                        {props.title.map((title, index) => (<div key={index} className={"carousel-item " + (index === 0 ? 'active' : '')}>
                            <div className="pt-1 ui items">
                                <div className="item">
                                    <div className="ui medium image"><img src={props.image[index]}/></div>
                                    <div className="content">
                                        <a className="header">{title}</a>
                                        <div className="description">
                                            <p>{props.description[index]}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>))}
                            </div>
                            <a className="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span className="sr-only">Previous</span>
                            </a>
                            <a className="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span className="carousel-control-next-icon" aria-hidden="true"></span>
                                <span className="sr-only">Next</span>
                            </a>
                            </div>
                </div>
            </div>
        </div>

    </div>
    );

}

export default CarouselsImageText;
