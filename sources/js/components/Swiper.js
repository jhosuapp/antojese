import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/swiper-bundle.min.css";
import "swiper/swiper.min.css";

// Configuramos los módulos a usar
Swiper.use([Navigation, Pagination]);

const swiperExport = (function () {
  const _SwiperCar = () => {
    var SwiperCar = new Swiper(".swiper", {
      slidesPerView: 1,
      spaceBetween: 0,
      navigation: {
        nextEl: ".btn-next-car",
        prevEl: ".btn-prev-car",
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 0,
        },
      },
    });
  };

  const _SwiperHotelImg = () => {
    var SwiperHotelImg = new Swiper(".vipSwiper", {
      slidesPerView:1,
      spaceBetween:150,
      navigation: {
        nextEl: ".vipSwiper-next",
        prevEl: ".vipSwiper-prev",
      },
    });
  };

  return {
    getChildFunctions: function () {
      try {
        _SwiperCar();
      } catch (error) {}
      try {
        _SwiperHotelImg();
      } catch (error) {}
    },
  };
})();

const getChildsSwiper = () => {
  swiperExport.getChildFunctions();
};

export { getChildsSwiper };
