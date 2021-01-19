import React from 'react';

const PortadaMobile = (props) => {
    return (

              <div id="portada" className="container text-light">
            <div className="row my-3">

                {/*  Portada1 y Portada2 */}

                    <div className="col-sm ">
                        <div className = "card border-0 rounded-0 mb-3" >
                        <img className="card-img rounded-0" alt={props.title[0]} src={props.image[0]} />
                        <div className="card-img-overlay text-overlay-1">
                        <div className="heading">
                         <h5 className="font-weight-bold">{props.title[0]}</h5>
                            <h6 className="source">CNN by Angel Muñoz, 1 minute ago</h6>
                         </div>
                        </div>
                        </div>
                    </div>

                    <div className="col-sm  ">
                        <div className = "card border-0 rounded-0" >
                        <img className="card-img rounded-0" alt={props.title[1]} src={props.image[1]} />
                        <div className="card-img-overlay text-overlay-2">
                        <div className="heading">
                          <h5 className="font-weight-bold">{props.title[1]}</h5>
                          <h6 className="source">CNN by Angel Muñoz, 1 minute ago</h6>
                         </div>
                        </div>
                        </div>
                    </div>

            </div>

             {/*  Portada3 y Portada4 */}

            <div className="row">

                <div className="col-sm ">
                        <div className = "card border-0 rounded-0 mb-3" >
                        <img className="card-img rounded-0" alt={props.title[2]} src={props.image[2]} />
                        <div className="card-img-overlay text-overlay-3">
                        <div className="heading">
                           <h5 className="font-weight-bold">{props.title[2]}</h5>
                            <h6 className="source">CNN by Angel Muñoz, 1 minute ago</h6>
                        </div>
                        </div>
                        </div>
                </div>

                <div className="col-sm ">
                        <div className = "card border-0 rounded-0" >
                        <img className="card-img rounded-0" alt={props.title[3]} src={props.image[3]} />
                        <div className="card-img-overlay text-overlay-4">
                        <div className="heading">
                          <h5 className="font-weight-bold">{props.title[3]}</h5>
                          <h6 className="source">CNN by Angel Muñoz, 1 minute ago</h6>
                          </div>
                        </div>
                        </div>
                </div>

          </div>

    </div>


    );
};

export default PortadaMobile;
