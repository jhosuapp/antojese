import { getChildsNav } from './components/Nav';
import { Footer } from './components/Footer';
import { getChildsSwiper } from './components/Swiper';
import { getChildsAcordeon } from './components/Acordeon';
import { getChildsAos } from './components/Aos';
 
window.addEventListener('load', ()=>{
  getChildsNav();
  getChildsSwiper();
  getChildsAos();
});

window.addEventListener("DOMContentLoaded", () => {
  getChildsAcordeon();
  Footer();
});
