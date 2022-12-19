import { getChildsNav } from './components/Nav';
import { getChildsHeader } from './components/Header';
import { Footer } from './components/Footer';
import { getChildsSwiper } from './components/Swiper';
import { getChildsAos } from './components/Aos';
 
window.addEventListener('load', ()=>{
    getChildsNav();
    getChildsHeader();
    getChildsSwiper();
    getChildsAos();
});

window.addEventListener('DOMContentLoaded', ()=>{
    Footer();
});