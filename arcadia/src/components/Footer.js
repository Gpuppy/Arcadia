import ReactLogo from '../components/Arcadia2.png'
import '../components/Arcadia2.png';
export default function Footer(){

    return (
        <footer className='FooterContainer'>
            <img src={ReactLogo} width={300} height={100}  alt='logo React'/>
        </footer>
    )
}