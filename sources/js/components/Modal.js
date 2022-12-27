const Modal = function(){

    const ModalHomeDesktop = ()=>{
        const getContainerModalHome = document.querySelectorAll('.open-modal');
        getContainerModalHome.forEach((data)=>{
            data.addEventListener('click', ()=>{
                getContainerModalHome.forEach((data)=>{
                    data.parentNode.classList.remove('enable-modal');
                });
                data.parentNode.classList.toggle('enable-modal');
            });
        });
    }

    const ModalHomeMobile = () =>{
        const getAllModals = document.querySelectorAll('.open-modal');
        const getContainerModal = document.querySelector('#modal');
        const getAllBtnCloseModal = document.querySelectorAll('.input-modal__close');
        const getContainerDinamic = document.querySelector('#contentDinamic');

        if(window.innerWidth < 992){        
            //OPEN MODAL
            getAllModals.forEach((data)=>{
                data.addEventListener('click', ()=>{
                    getContainerModal.classList.add('active');
                    const getParentNode = data.parentNode;
                    data.classList.contains('open-modal') && getContainerDinamic.append(getParentNode);
                    data.classList.remove('open-modal');
                });
            });
            //CLOSE MODAL
            getAllBtnCloseModal.forEach((data)=>{
                data.addEventListener('click', ()=>{
                    getContainerModal.classList.remove('active');

                    const getFirtsChild = getContainerDinamic.firstElementChild;
                    getFirtsChild.firstElementChild.classList.add('open-modal');
                    const reUseClasses = (className)=>{
                        document.querySelector(`#input-modalMobile-${className}`).append(getFirtsChild);
                        document.querySelector(`#input-modalMobile-${className}`).classList.add('active');
                    }
                    switch (getFirtsChild.getAttribute('data-input')){
                        case 'pasajeros':
                            reUseClasses('pasajeros');
                        break;
                        case 'origen':             
                            reUseClasses('origen');
                        break;
                        case 'destino':             
                            reUseClasses('destino');
                        break;
                    }

                });
            });
        }

    }

    // window.addEventListener('resize', ModalHomeMobile);

    return {
        getChildFunctions:  function(){
            try{
                ModalHomeMobile();
            }catch(error){  }
            try{
                ModalHomeDesktop();
            }catch(error){  }
        }
    }

}();

const getChildsModal = ()=>{
    Modal.getChildFunctions();
}

export {
    getChildsModal
}