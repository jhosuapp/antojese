import Swiper, { Grid, Navigation, Pagination, Thumbs } from "swiper";
import "swiper/swiper-bundle.min.css";
import "swiper/swiper.min.css";

// Configuramos los módulos a usar
Swiper.use([Navigation, Pagination, Thumbs, Grid]);

const SwiperExport = (function () {
  const SwiperPlanes = () => {
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
      },
    });
  };

  const _SwiperCar = () => {
    var SwiperCar = new Swiper(".swiperCar", {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: ".btn-next-car",
        prevEl: ".btn-prev-car",
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1030: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
      },
    });
  };


  function activeOrDesactiveHandScrollTop() {
    const btnNext = document.querySelector('.galleryIsland-thumbs .swiper-button-next')
    const handNext = document.querySelector('.galleryIsland-thumbs .handscroll-bottom')
    if(btnNext.classList.contains('swiper-button-disabled')) {
        handNext.classList.add('hide')
    } else {
        handNext.classList.remove('hide')
    }
  }
  function activeOrDesactiveHandScrollBottom() {
    const btnPrev = document.querySelector('.galleryIsland-thumbs .swiper-button-prev')
    const handPrev = document.querySelector('.galleryIsland-thumbs .handscroll-left')
    if(btnPrev.classList.contains('swiper-button-disabled')) {
        handPrev.classList.add('hide')
    } else {
        handPrev.classList.remove('hide')
    }
  }
  const _SwiperTurisemana = () => {
    const swiperTurisemana = new Swiper(".swiperTurisemana", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
    const galleryThumbs = new Swiper('.galleryIsland-thumbs', {
        modules: [Navigation, Pagination, Thumbs, Grid],
        spaceBetween: 5,
        slidesPerView: 1,
        loop: false,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
        // watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          991: {
            loop: false,
            slidesPerView: 2,
            grid: {
              rows: 3,
            },
            spaceBetween: 15,
          }
        },
        on: {
            slideChange: (e) => {
              setTimeout(() => {
                  activeOrDesactiveHandScrollTop()
                  activeOrDesactiveHandScrollBottom()
              }, 300);
                // if(e) {
                // }
            }
        }
    });
    const galleryTop = new Swiper('.galleryIsland-top', {
        modules: [Navigation, Pagination, Thumbs],
        spaceBetween: 10,
        // loop: true,
        // loopedSlides: 5, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs,
        },
    });
  };



  return {
    getChildFunctions: function () {
      try {
        SwiperPlanes();
      } catch (error) {
        console.log(error);
      }
      try {
        _SwiperCar();
      } catch (error) {console.log(error)}
      try {
        _SwiperTurisemana();
      } catch (error) {
        console.log(error)
      }
    },
  };
})();

const getChildsSwiper = () => {
  SwiperExport.getChildFunctions();
};

export { getChildsSwiper };
