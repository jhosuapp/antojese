import { Swiper } from "swiper";
import "swiper/swiper-bundle.min.css";
import "swiper/swiper.min.css";

const swiperExport = (function () {
  const _SwiperCar = () => {
    var SwiperCar = new Swiper(".swiper", {
      spaceBetween: 60,
      navigation: {
        nextEl: ".next",
        prevEl: ".prev",
      },
    });
  };

  return {
    getChildFunctions: function () {
      try {
        _SwiperCar();
      } catch (error) {}
    },
  };
})();

const getChildsSwiper = () => {
  swiperExport.getChildFunctions();
};

export { getChildsSwiper };
