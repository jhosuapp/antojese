import { getChildsNav } from './components/Nav';
import { getChildsHeader } from './components/Header';
import { Footer } from './components/Footer';
import { getChildsSwiper } from './components/Swiper';

window.addEventListener('load', ()=>{
    getChildsNav();
    getChildsHeader();
    getChildsSwiper();
});

window.addEventListener('DOMContentLoaded', ()=>{
    Footer();
});