import {Swiper, Navigation, Pagination} from 'swiper';
import 'swiper/swiper-bundle.min.css'
import 'swiper/swiper.min.css'

const swiperExport = function(){

    const _SwiperTest = ()=>{
        var SwiperTest = new Swiper(".mySwiper", {});
    }

    const _SwiperPay = ()=>{
        var SwiperPay = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        });
    }

    return {
        getChildFunctions : function(){
            try {
                _SwiperTest();
            } catch (error) {}
        }
    }
}();


const getChildsSwiper = ()=>{
    swiperExport.getChildFunctions();
}

export {
    getChildsSwiper
}