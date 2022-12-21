import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/swiper-bundle.min.css";
import "swiper/swiper.min.css";

// Configuramos los módulos a usar
Swiper.use([Navigation, Pagination]);

const swiperExport = (function () {
  const _SwiperCar = () => {
    var SwiperCar = new Swiper(".swiper", {
      slidesPerView: 1,
      spaceBetween: 60,
      navigation: {
        nextEl: ".btn-next-car",
        prevEl: ".btn-prev-car",
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
          spaceBetween: 10,
        },
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
