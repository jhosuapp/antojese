import { getChildsNav } from './components/Nav';
import { getChildsSwiper } from './components/Swiper';
import { getChildsAcordeon } from './components/Acordeon';
import { getChildsAos } from './components/Aos';
import { getChildsSelect } from './components/Selects';
import { getChildsModal } from './components/Modal';
import { getChildsInputNumber } from './components/InputNumber';
 
window.addEventListener('load', ()=>{
  getChildsNav();
  getChildsSwiper();
  getChildsAos();
  getChildsSelect();
  getChildsModal();
  getChildsInputNumber();
});

window.addEventListener("DOMContentLoaded", () => {
  getChildsAcordeon();
});
