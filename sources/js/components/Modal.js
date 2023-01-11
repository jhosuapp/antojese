const Modal = function(){

    const ModalHomeDesktop = ()=>{
        const getContainerModalHome = document.querySelectorAll('.open-modal');
        const getBtnCloseAllModals = document.querySelector('#close-filterPassenger');
        getContainerModalHome.forEach((data)=>{
            data.addEventListener('click', ()=>{
                getContainerModalHome.forEach((data)=>{
                    data.parentNode.classList.remove('enable-modal');
                });
                data.parentNode.classList.toggle('enable-modal');
            });
        });

        getBtnCloseAllModals.addEventListener('click', ()=>{
            getContainerModalHome.forEach((data)=>{
                data.parentNode.classList.remove('enable-modal');
            });
        });
    }

    const ModalHomeMobile = () =>{
        const getAllModals = document.querySelectorAll('.open-modal');
        const getAllBtnCloseModal = document.querySelectorAll('.input-modal__close');
        const getDefectCloseModal = document.querySelectorAll('.defect-close');
        const getContainerModal = document.querySelector('#modal');
        const getContainerDinamic = document.querySelector('#contentDinamic');

        if(window.innerWidth < 992){        
            //ABRIR MODAL
            getAllModals.forEach((data)=>{
                data.addEventListener('click', ()=>{
                    getContainerModal.classList.add('active');
                    const getParentNode = data.parentNode;
                    data.classList.contains('open-modal') && getContainerDinamic.append(getParentNode);
                    data.classList.remove('open-modal');
                });
            });
            //CERRAR MODAL
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
                        case 'destinoHotel':
                            reUseClasses('destinoHotel');
                        break;
                    }

                });
            });
        }
        //CERRADO POR DEFECTO DEL MODAL 
        getDefectCloseModal.forEach((data)=>{
            data.addEventListener('click', ()=>{
                getContainerModal.classList.remove('active');
            });
        });
        //MODAL PARA FILTROS
        const getOpenModalFilters = document.querySelector('#open-filter');
        getOpenModalFilters.addEventListener('click', ()=>{
            getContainerModal.classList.add('active');
            getContainerDinamic.append(document.querySelector('#content-modal'));
        });

    }

    const ModalInfo = ()=>{
        const reUseModal = (btn, btnClose, ctn)=>{
            btn.forEach((data)=>{
                data.addEventListener('click', ()=>{
                    ctn.classList.add('active');
                });
            });
            btnClose.addEventListener('click',()=>{
                ctn.classList.remove('active');
            });
        }
        //MODAL INFORMACIÓN VUELO
        const getAllBtnInfo = document.querySelectorAll('.open-modal-detail');
        const getCloseModalInfo = document.querySelector('#close-modal-detail');
        const getCtnInfo = document.querySelector('#modal-detail');
        //VUELO PERSONALIZADO
        reUseModal(getAllBtnInfo, getCloseModalInfo, getCtnInfo);
        const getAllBtnModalPersonality = document.querySelectorAll('.open-modal-personality');
        const getClosModalPersonality = document.querySelector('#close-modal-personality');
        const getCtnPersonality = document.querySelector('#modal-personality');
        reUseModal(getAllBtnModalPersonality, getClosModalPersonality, getCtnPersonality);
    }

    return {
        getChildFunctions:  function(){
            try{
                ModalHomeMobile();
            }catch(error){  }
            try{
                ModalHomeDesktop();
            }catch(error){  }
            try{
                ModalInfo();
            }catch(error){ }
            try{
                ModalPersonality();
            }catch(error){ }
        }
    }

}();

const getChildsModal = ()=>{
    Modal.getChildFunctions();
}

export {
    getChildsModal
}