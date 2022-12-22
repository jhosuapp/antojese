import { getChildsNav } from './components/Nav';
import { getChildsSwiper } from './components/Swiper';
import { getChildsAcordeon } from './components/Acordeon';
import { getChildsAos } from './components/Aos';
import { getChildsSelect } from './components/Selects';
import { getChildsModal } from './components/Modal';
import { getChildsFilterPassengers } from './components/FilterPassengers';
import { getChildsTab } from './components/Tab';
 
window.addEventListener('load', ()=>{
  getChildsNav();
  getChildsSwiper();
  getChildsAos();
  getChildsSelect();
  getChildsModal();
  getChildsFilterPassengers();
  getChildsTab();
});

window.addEventListener("DOMContentLoaded", () => {
  getChildsAcordeon();
});
