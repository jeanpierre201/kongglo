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
        <PortadaDefault media={props.media} link={props.link} pubdate={props.pubdate} title={props.title} description={props.description} image_md={props.image_md} image={props.image_lg}/>
        </Default>

        <Mobile>
        <PortadaMobile media={props.media} link={props.link} pubdate={props.pubdate} title={props.title} description={props.description} image={props.image_md}/>
        </Mobile>
    </div>
);

export default Portada;
