const Nav = function(){

    //LOADER
    const Loader = () => {
        const preloader = document.getElementById("loadScreen");
        setTimeout(()=>{
            preloader.classList.add('hidden');
        },1000);
    };
    //HAMBURGUESA
    const Hamburger = ()=>{
        const getIconHamburguer = document.querySelectorAll('.header-hamburger');
        const getLateralMenu = document.querySelector('.lateralMenu');
        getIconHamburguer.forEach((data)=>{
            data.addEventListener('click', ()=>{
                getLateralMenu.classList.toggle('active');
                getIconHamburguer.forEach((data)=>{
                    data.classList.toggle('enable');
                });
            })
            ;
        });
    }
    //VALIDAR SI LA PAGINA ACTUAL ES EL HOME
    const ValidationHome = ()=>{
        const getContainerValHome = document.querySelector('.enable-home');
        const getBody = document.querySelector('body');
        getContainerValHome ? getBody.classList.add('enable') : false;
    }
    //ANIMACION SCROLL MOBILE
    const ScrollMobileAndBgImg = ()=>{
        const getHeader = document.querySelector('.header');
        const reUseValidationScroll = () =>{
            window.scrollY > 10 ?  getHeader.classList.add('scroll') : getHeader.classList.remove('scroll');
        }
        reUseValidationScroll();
        window.addEventListener('scroll', ()=>{
            reUseValidationScroll();
        });
        //VALIDACIÓN DE IMAGEN
        const getImgLocalStorage = localStorage.getItem('data-img');
        getImgLocalStorage ? getHeader.style.backgroundImage = `url(${getImgLocalStorage})` : false;
    }
    //SE CLONAN LAS OPCIONES DEL MENÚ LATERAL PARA REUSAR EN MOBILE
    const OptionsMenuLateral = ()=>{
        const getAlloptionsOfMenu = document.querySelectorAll('.lateralMenu__container .lateralMenu__item');
        const dinamicOptions = document.querySelector('.header-options');
        getAlloptionsOfMenu.forEach((data)=>{

            const getTextContent = data.lastElementChild.textContent;
            const getSrcImage = data.firstElementChild.firstElementChild.src;
            const createDiv = document.createElement('div');
            createDiv.classList.add('header-options__item');
            createDiv.setAttribute('data-img', data.getAttribute('data-img'));
            const template = `
                <div>
                    <img src="${getSrcImage}">
                </div>
                <p>${ getTextContent }</p>
            `;
            createDiv.innerHTML = template;
            dinamicOptions.append(createDiv);

        });
    }
    //CHAT
    const Chat = ()=>{
        const getBtnChat = document.querySelector('.chat__btn');
        const getAllItemsChat = document.querySelectorAll('.chat__item');

        getBtnChat.addEventListener('click', ()=>{
            getBtnChat.parentNode.classList.toggle('active');
        });

        getAllItemsChat.forEach((data)=>{
            data.addEventListener('click', ()=>{
                data.closest('.chat').classList.remove('active');
            }); 
        });

    }

    return {
        getChildFunctions : function(){
            try {
                Hamburger();
            } catch (error) { }
            try{
                ValidationHome();
            }catch(error){ }
            try{
                ScrollMobileAndBgImg();
            }catch(error){  }
            try{
                OptionsMenuLateral();
            }catch(error){ }
            try{
                Loader();
            }catch(error){ }
            try{
                Chat();
            }catch(error){ }
        }
    }
    
}();

const getChildsNav = ()=>{
    Nav.getChildFunctions();
}

export {
    getChildsNav
}