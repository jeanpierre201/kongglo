import React from 'react';

const PortadaMobile = (props) => {
    return (

        <div id="portada" className="container text-light">
            <div className="row my-3">

                {/*  Portada1 y Portada2 */}

                    <div className="col-md ">
                        <div className = "card border-0 rounded-0 mb-3" >
                            <img className="card-img rounded-0" alt={props.title[0]} src={props.image[0]} />
                            <a href={"/news/detail/kongglonews?title=" + props.title[0] + "&image=" + props.image[0] + "&description=" + props.description[0] + "&link=" + props.link[0] + "&media=" + props.media + "&pubdate=" + props.pubdate[0]}>
                                <div className="card-img-overlay text-overlay-1">
                                    <div className="heading">
                                        <h5 className="font-weight-bold">{props.title[0]}</h5>
                                        <h6 className="source">{props.media} - {props.pubdate[0]}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div className="col-md  ">
                        <div className = "card border-0 rounded-0" >
                            <img className="card-img rounded-0" alt={props.title[1]} src={props.image[1]} />
                            <a href={"/news/detail/kongglonews?title=" + props.title[1] + "&image=" + props.image[1] + "&description=" + props.description[1] + "&link=" + props.link[1] + "&media=" + props.media + "&pubdate=" + props.pubdate[1]}>
                            <div className="card-img-overlay text-overlay-2">
                                <div className="heading">
                                    <h5 className="font-weight-bold">{props.title[1]}</h5>
                                    <h6 className="source">{props.media} - {props.pubdate[1]}</h6>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

            </div>

             {/*  Portada3 y Portada4 */}

            <div className="row">

                <div className="col-md ">
                    <div className = "card border-0 rounded-0 mb-3" >
                        <img className="card-img rounded-0" alt={props.title[2]} src={props.image[2]} />
                        <a href={"/news/detail/kongglonews?title=" + props.title[2] + "&image=" + props.image[2] + "&description=" + props.description[2] + "&link=" + props.link[2] + "&media=" + props.media + "&pubdate=" + props.pubdate[2]}>
                        <div className="card-img-overlay text-overlay-3">
                            <div className="heading">
                                <h5 className="font-weight-bold">{props.title[2]}</h5>
                                <h6 className="source">{props.media} - {props.pubdate[2]}</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div className="col-md ">
                    <div className = "card border-0 rounded-0" >
                        <img className="card-img rounded-0" alt={props.title[3]} src={props.image[3]} />
                        <a href={"/news/detail/kongglonews?title=" + props.title[3] + "&image=" + props.image[3] + "&description=" + props.description[3] + "&link=" + props.link[3] + "&media=" + props.media + "&pubdate=" + props.pubdate[3]}>
                        <div className="card-img-overlay text-overlay-4">
                            <div className="heading">
                                <h5 className="font-weight-bold">{props.title[3]}</h5>
                                <h6 className="source">{props.media} - {props.pubdate[3]}</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

          </div>

    </div>


    );
};

export default PortadaMobile;
