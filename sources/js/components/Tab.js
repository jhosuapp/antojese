const Tab = function(){

    const TabHome = () =>{
        const getAllButtonsTab = document.querySelectorAll('.lateralMenu__container a');
        const getAllButtonsTabMobile = document.querySelectorAll('.header-options .header-options__item');
        const getAllContainers = document.querySelectorAll('.filters-block');
        const getLateralMenu = document.querySelector('.lateralMenu');
        getAllContainers[0].classList.add('active');
        //SETEO DE ATRIBUTO A LOS CONTENEDORES
        getAllContainers.forEach((data, indice)=>{
            data.setAttribute('data-tabCtn', indice + 1);
        });
        //SETEO DE ATRIBUTOS A LOS BOTONES Y EJECUCIÓN DE EVENTOS
        const reUseFunctionTab = (className)=>{
            className[1].classList.add('active');
            className.forEach((data, indice)=>{
                if(indice > 0 && indice < className.length - 1){
                    data.setAttribute('data-tabBtn', indice);
                    data.addEventListener('click', ()=>{
                        const getDataAttribute = data.getAttribute('data-tabBtn');
                        //SE AÑADEN CLASES DE MANERA DINAMICA
                        className.forEach((data)=>{
                            data.classList.remove('active');
                        });
                        data.classList.add('active');
                        //SE COMPARAN LOS ATRIBUTOS PARA ACTIVAR EL TAB
                        getAllContainers.forEach((data)=>{
                            const getDataAttributeCtn = data.getAttribute('data-tabCtn');
                            getDataAttribute == getDataAttributeCtn ? data.classList.add('active') : data.classList.remove('active');
                        });
                        //SE DESAHIBILITA MOMENTANEAMENTE EL MENU LATERAL
                        getLateralMenu.classList.add('disable-menu');
                        setTimeout(()=>{
                            getLateralMenu.classList.remove('disable-menu');
                        },500);
                    });
                }
            });
        }

        reUseFunctionTab(getAllButtonsTab);
        reUseFunctionTab(getAllButtonsTabMobile);
    }

    return {
        getChildFunctions:  function(){
            try{
                TabHome();
            }catch(error){ }
        }
    }

}();

const getChildsTab = ()=>{
    Tab.getChildFunctions();
}

export {
    getChildsTab
}