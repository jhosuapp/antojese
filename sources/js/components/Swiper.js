import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/swiper-bundle.min.css";
import "swiper/swiper.min.css";

// Configuramos los módulos a usar
Swiper.use([Navigation, Pagination]);

const SwiperExport = (function () {

  const SwiperPlanes = ()=>{
    const SwiperPlanesConfig = new Swiper(".swiper-baggage", {
      slidesPerView: 1.2,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        576: {
            slidesPerView: 1.2,
            spaceBetween: 20,
            allowTouchMove: true,
        },
        992: {
            slidesPerView: 2.2,
            spaceBetween: 20,
            allowTouchMove: true,
        },
        1281: {
            slidesPerView: 3,
            spaceBetween: 20,
            allowTouchMove: true,
        },
      }
    });
  }

  return {
    getChildFunctions: function () {
      try {
        SwiperPlanes();
      } catch (error) {console.log(error)}
    }
  }
})();

const getChildsSwiper = () => {
  SwiperExport.getChildFunctions();
};

export { 
  getChildsSwiper 
};
