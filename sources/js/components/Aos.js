import * as AOS from 'aos';
import 'aos/dist/aos.css';

const aos = function(){
    
    function _initAos(){
        setTimeout(() => {
            AOS.init({
                duration: 1000,
                easing: 'ease',
                once: true,
            });
        }, 500);
    }


    return {
        rturnFunctions : function(){
            _initAos();
        }
    }
}();

const getChildsAos = ()=>{
    aos.rturnFunctions();
}

export{
    getChildsAos
}