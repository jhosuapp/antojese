const Modal = function(){

    const ModalHomeDesktop = ()=>{
        const getContainerModalHome = document.querySelector('#modalPassengers');
        getContainerModalHome.addEventListener('click', ()=>{
            getContainerModalHome.classList.add('enable-modal');
        })
    }

    const ModalHomeMobile = () =>{
        // const getAllModals = document.querySelectorAll('.open-modal');
        // const getContainerModal = document.querySelector('#modal');

        // getAllModals.forEach((data)=>{
        //     data.addEventListener('click', ()=>{
        //         getContainerModal.classList.add('active');
        //         getContainerModal.append(data);
        //     });
        // });

    }

    return {
        getChildFunctions:  function(){
            ModalHomeMobile();
            ModalHomeDesktop();
        }
    }

}();

const getChildsModal = ()=>{
    Modal.getChildFunctions();
}

export {
    getChildsModal
}