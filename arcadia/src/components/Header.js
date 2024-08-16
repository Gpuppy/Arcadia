import React from "react";
import ArcadiaLogo from '../components/Arcadia2.png';
import './styles/header.css';
import '../components/Arcadia2.png';
import {Link} from 'react-router-dom';
import '../components/Accommodation';

function Header()
{
    return(
        <React.Fragment>
            <footer className="py-2 bg-body-tertiary border-bottom">

                <div className="container d-flex flex-wrap">
                    <img className ="logo" src={ArcadiaLogo} width={150} height={50}  alt='logo Arcadia'/>
                    <ul className="nav me-auto">
                        <Link to="/" className="nav-link link-body-emphasis px-2 active" aria-current="page">Accueil</Link>
                        <Link to="/Service"  className="nav-link link-body-emphasis px-2">Services</Link>
                        <Link to="/Accommodation" className="nav-link link-body-emphasis px-2">Habitats</Link>
                        <Link to="/Review"  className="nav-link link-body-emphasis px-2">Avis</Link>
                        <Link to="/Contact" className="nav-link link-body-emphasis px-2">Contact</Link>
                    </ul>
                    <ul className="nav">
                        <a className="btn btn-success" href="../login.php" role="button">Admin</a>


                    </ul>
                </div>
            </footer>
    </React.Fragment>
    );
}
export default Header;
