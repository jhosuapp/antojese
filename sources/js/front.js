import { getChildsNav } from './components/Nav';
import { getChildsSwiper } from './components/Swiper';
import { getChildsAos } from './components/Aos';
import { getChildsSelect } from './components/Selects';
import { getChildsModal } from './components/Modal';
import { getChildsFilterPassengers } from './components/FilterPassengers';
import { getChildsTab } from './components/Tab';
// import { getChildsTabTurisemana } from './components/TabTurisemana';
import { getChildsRadioBtn } from './components/FilterRadioBtn';
import { getChildsToggle } from './components/Toggle';
import { getChildsToggleTurisemana } from './components/ToggleTurisemana';
import { getChildsCheckbox } from './components/FilterCheckbox';
import { getChildsFlight } from './components/FlightSelected';
import { getChildsFilterSend } from './components/FiltersSend';
import { getChildsFlightDinamicData } from './components/FlightDataDinamic';
import { getChildsFilterRange } from './components/FilterRange';
 
window.addEventListener('load', ()=>{
  getChildsNav();
  getChildsSwiper();
  getChildsAos();
  getChildsSelect();
  getChildsModal();
  getChildsFilterPassengers();
  getChildsTab();
  // getChildsTabTurisemana();
  getChildsRadioBtn();
  getChildsToggle();
  getChildsToggleTurisemana();
  getChildsCheckbox();
  getChildsFlight();
  getChildsFilterSend();
  getChildsFlightDinamicData();
  getChildsFilterRange();
});

window.addEventListener("DOMContentLoaded", () => {

});
