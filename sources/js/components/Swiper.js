import Swiper, { Navigation, Pagination } from 'swiper';
import "swiper/swiper-bundle.min.css";
import "swiper/swiper.min.css";


// Configuramos los módulos a usar
Swiper.use([Navigation, Pagination]);

const swiperExport = (function () {

  const _SwiperCar = () => {
    var SwiperCar = new Swiper(".swiper", {
      spaceBetween: 60,
      navigation: {
        nextEl: ".btn-next-car",
        prevEl: ".btn-prev-car",
      },
    });
  };

  const _SwiperHotelImg = () => {
    var SwiperHotelImg = new Swiper(".vipSwiper", {
      navigation: {
        nextEl: ".vipSwiper-next",
        prevEl: ".vipSwiper-prev",
      },
    });
  }

  return {
    getChildFunctions: function () {
      try {
        _SwiperCar();
      } catch (error) {}
      try {
        _SwiperHotelImg()
      } catch (error) {
        
      }
    },
  };
})();

const getChildsSwiper = () => {
  swiperExport.getChildFunctions();
};

export { getChildsSwiper };
