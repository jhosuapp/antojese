const Tab = function(){

    const TabHome = () =>{
        const getAllButtonsTab = document.querySelectorAll('.lateralMenu__container a');
        const getAllButtonsTabMobile = document.querySelectorAll('.header-options .header-options__item');
        const getAllContainers = document.querySelectorAll('.filters-block');
        const getLateralMenu = document.querySelector('.lateralMenu');
        const getHeader = document.querySelector('.header');
        //SETEO DE ATRIBUTO A LOS CONTENEDORES
        getAllContainers.forEach((data, indice)=>{
            data.setAttribute('data-tabctn', indice + 1);
        });
        //SETEO DE ATRIBUTOS A LOS BOTONES Y EJECUCIÓN DE EVENTOS
        const reUseFunctionTab = (className)=>{

            className.forEach((data, indice)=>{
                if(indice > 0 && indice < className.length - 1){
                    data.setAttribute('data-tabbtn', indice);
                    data.addEventListener('click', ()=>{
                        const getDataAttribute = data.getAttribute('data-tabbtn');
                        const getDataAttributeImg = data.getAttribute('data-img');
                        //GUARDADO EN LOCALSTORAGE DE POSICIÓN E IMAGEN
                        localStorage.setItem('tab-home', data.getAttribute('data-tabbtn'));
                        localStorage.setItem('data-img', getDataAttributeImg);
                        getHeader.style.background = `url(${getDataAttributeImg})`;
                        //SE AÑADEN CLASES DE MANERA DINAMICA
                        className.forEach((data)=>{
                            data.classList.remove('active');
                        });
                        data.classList.add('active');
                        //SE COMPARAN LOS ATRIBUTOS PARA ACTIVAR EL TAB
                        getAllContainers.forEach((data)=>{
                            const getDataAttributeCtn = data.getAttribute('data-tabctn');
                            getDataAttribute == getDataAttributeCtn ? data.classList.add('active') : data.classList.remove('active');
                        });
                        //SE DESAHIBILITA MOMENTANEAMENTE EL MENU LATERAL
                        getLateralMenu.classList.add('disable-menu');
                        setTimeout(()=>{
                            getLateralMenu.classList.remove('disable-menu');
                        },500);
                    });
                }else{
                    data.href = data.getAttribute('data-link');
                }
            });

            //VALIDACION DE BOTON ELEGIDO EN OTRAS VISTAS
            const getPostionOfLocalStorage = localStorage.getItem('tab-home');
            if(getPostionOfLocalStorage){
                className[getPostionOfLocalStorage].classList.add('active');
                getAllContainers.length > 0 && getAllContainers[getPostionOfLocalStorage - 1].classList.add('active');
            }else{
                className[1].classList.add('active');
                getAllContainers.length > 0 && getAllContainers[0].classList.add('active');   
            }

        }

        reUseFunctionTab(getAllButtonsTab);
        reUseFunctionTab(getAllButtonsTabMobile);

        //REDIRECCIÓN AL HOME SI ESTA EN OTRA VISTA
        const useDataLinks = ()=>{
            getAllButtonsTab.forEach((data)=>{
                data.addEventListener('click', ()=>{
                    data.href = data.getAttribute('data-link');
                });
            });
        }
        getAllContainers.length <= 0 && useDataLinks();

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