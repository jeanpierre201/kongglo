import React from 'react';

const CarouselsImageText = (props) => {

return (
<div>

<div className="pt-3">
        <div className="ui items column">
            <div className="column">
                <div className="ui raised segment">
                    <a className="ui red ribbon label">CNN</a>
                    <span>Latest News</span>
                    <div id="carouselExampleIndicators" className="carousel slide" data-ride="carousel">
                        <ol className="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" className="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div className="carousel-inner">
                            <div className="carousel-item active">
                            <div className="item">
                                <div className="ui medium image"><img src=""/></div>
                                <div className="content">
                                    <a className="header">Cute Dog</a>
                                    <div className="description">
                                        <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for
                                            their adorable faces, others for their tiny stature, and even others for their
                                            massive size.</p>
                                        <p>Many people also have their own barometers for what makes a cute dog.</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div className="carousel-item">
                            <div className="item">
                                <div className="ui medium image"><img src=""/></div>
                                <div className="content">
                                    <a className="header">Cute Dog</a>
                                    <div className="description">
                                        <p>Cute dogs come in a variety of shapes and sizes. Some cute dogs are cute for
                                            their adorable faces, others for their tiny stature, and even others for their
                                            massive size.</p>
                                        <p>Many people also have their own barometers for what makes a cute dog.</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a className="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span className="sr-only">Previous</span>
                        </a>
                        <a className="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span className="carousel-control-next-icon" aria-hidden="true"></span>
                            <span className="sr-only">Next</span>
                        </a>
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>
);

}

export default CarouselsImageText;
