import { getChildsNav } from './components/Nav';
import { getChildsHeader } from './components/Header';
import { Footer } from './components/Footer';

window.addEventListener('load', ()=>{
    getChildsNav();
    getChildsHeader();
});

window.addEventListener('DOMContentLoaded', ()=>{
    Footer();
});