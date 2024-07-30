import ReactLogo from '../components/Arcadia2.png'
//import '..components/styles/header.css'
import '../components/Arcadia2.png';
export default function Header(){

    return(
        <header className='HeaderContainer'>
           <img src={ReactLogo} width={300} height={100}  alt='logo React'/>
                        <h1> Bienvenue chez Arcadia </h1>
            <div className="container d-flex flex-wrap">
                <ul className="nav me-auto">
                    <li className="nav-item"><a href="../index.php" className="nav-link link-body-emphasis px-2 active"
                                                aria-current="page">Accueil</a></li>
                    <li className="nav-item"><a href="../Entity/Service.php"
                                                className="nav-link link-body-emphasis px-2">Services</a></li>
                    <li className="nav-item"><a href="../Entity/Accomodation.php"
                                                className="nav-link link-body-emphasis px-2">Habitats</a></li>
                    <li className="nav-item"><a href="../avis.php" className="nav-link link-body-emphasis px-2">Avis</a>
                    </li>
                    <li className="nav-item"><a href="/Entity/Contact.php"
                                                className="nav-link link-body-emphasis px-2">Contact</a></li>
                </ul>
                <ul className="nav">
                    <li className="nav-item"><a href="../login.php"
                                                className="nav-link link-body-emphasis px-2">Login</a></li>
                    <li className="nav-item"><a href="../signup.php"
                                                className="nav-link link-body-emphasis px-2">S'inscrire</a></li>
                </ul>
            </div>
        </header>
    )
}

