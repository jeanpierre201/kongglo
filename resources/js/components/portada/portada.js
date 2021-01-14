import React from 'react';
import { useMediaQuery } from 'react-responsive';
import PortadaDefault from "./PortadaDefault";
import PortadaMobile from "./PortadaMobile";

const Mobile = ({ children }) => {
  const isMobile = useMediaQuery({ maxWidth: 991 })
  return isMobile ? children : null
}

const Default = ({ children }) => {
  const isNotMobile = useMediaQuery({ minWidth: 992 })
  return isNotMobile ? children : null
}

const Portada = (props) => (
    <div>
        <Default>
        <PortadaDefault title={props.title} image={props.image_lg}/>
        </Default>

        <Mobile>
        <PortadaMobile title={props.title} image={props.image_md}/>
        </Mobile>
    </div>
);

export default Portada;
