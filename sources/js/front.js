import { getChildsNav } from './components/Nav';
import { getChildsSwiper } from './components/Swiper';
import { getChildsAcordeon } from './components/Acordeon';
import { getChildsAos } from './components/Aos';
import { getChildsSelect } from './components/Selects';
import { getChildsModal } from './components/Modal';
import { getChildsFilterPassengers } from './components/FilterPassengers';
import { getChildsTab } from './components/Tab';
import { getChildsRadioBtn } from './components/FilterRadioBtn';
import { getChildsToggle } from './components/Toggle';
 
window.addEventListener('load', ()=>{
  getChildsNav();
  getChildsSwiper();
  getChildsAos();
  getChildsSelect();
  getChildsModal();
  getChildsFilterPassengers();
  getChildsTab();
  getChildsRadioBtn();
  getChildsToggle();
});

window.addEventListener("DOMContentLoaded", () => {
  getChildsAcordeon();
});
