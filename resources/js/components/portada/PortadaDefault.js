import React from 'react';

const PortadaDefault = (props) => {
    return (

        <div id="portada" className="container text-light">
        <div className="row gx-0 my-3 no-gutters">

        {/*  Portada1 */}
        <div className="col-lg-5 col-md-6 bg-primary" >
            <div className = "card border-0 rounded-0" >
              <img className="card-img rounded-0 image-1" alt={props.title[0]} src={props.image[0]} />
                <div className="card-img-overlay text-overlay-1">
                  <h5 className="text-white font-weight-bold p-2 heading">{props.title[0]}</h5>
                </div>
           </div>
        </div>
        {/*  End Portada1 */}

            <div className="col-lg-7 col-md-6 bg-success no-gutters">
               <div className="">
                {/*  Portada2 */}

                        <div className = "card border-0 rounded-0" >
                              <img className="card-img rounded-0 image-2" alt={props.title[1]} src = {props.image[1]} />
                                <div className="card-img-overlay text-overlay-2">
                                  <h5 className="text-white font-weight-bold p-2 heading">{props.title[1]}</h5>
                                </div>
                        </div>

                {/*  End Portada2 */}
            </div>


            <div className="">


                <div className="row gx-0 no-gutters">

                  <div className="col-md-6 bg-danger">
                        {/*  Portada3 */}
                        <div className = "card border-0 rounded-0" >
                            <img className="card-img rounded-0 image-3" alt={props.title[2]} src={props.image[2]} />
                            <div className="card-img-overlay text-overlay-3">
                              <h5 className="text-white font-weight-bold p-2 heading">{props.title[2]}</h5>
                            </div>
                        </div>
                        {/* End Portada3 */}
                  </div>

                <div className="col-md-6 bg-warning">

                {/*  Portada4 */}
                <div className = "card border-0 rounded-0" >
                    <img className="card-img rounded-0 image-4"
                    alt={props.title[3]} src = {props.image[3]} />
                    <div className="card-img-overlay text-overlay-4">
                      <h5 className="text-white font-weight-bold p-2 heading">{props.title[3]}</h5>
                    </div>
                </div>
               {/*  End Portada4 */}
                </div>

          </div>

        </div>
    </div>

</div>
</div>

           );
};

export default PortadaDefault;