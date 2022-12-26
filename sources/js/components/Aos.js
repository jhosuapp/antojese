import * as AOS from 'aos';
import 'aos/dist/aos.css';

const aos = function(){
    
    function InitAos(){
        setTimeout(() => {
            AOS.init({
                duration: 1000,
                easing: 'ease',
                once: true,
            });
        }, 1000);
    }

    return {
        returnFunctions : function(){
            try{
                InitAos();
            }catch(error){ }
        }
    }
    
}();

const getChildsAos = ()=>{
    aos.returnFunctions();
}

export{
    getChildsAos
}