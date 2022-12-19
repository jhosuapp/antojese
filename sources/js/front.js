import { getChildsNav } from "./components/Nav";
import { getChildsHeader } from "./components/Header";
import { Footer } from "./components/Footer";
import { getChildsSwiper } from "./components/Swiper";
import { getChildsAcordeon } from "./components/Acordeon";

window.addEventListener("load", () => {
  getChildsNav();
  getChildsHeader();
  getChildsSwiper();
});

window.addEventListener("DOMContentLoaded", () => {
  getChildsAcordeon();
  Footer();
});
