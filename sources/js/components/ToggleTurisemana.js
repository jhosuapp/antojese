const ToggleTurisemana = function(){

    function limpiarClass(arrToggles) {
        arrToggles.forEach(e => {
            e.nextElementSibling.style.height = 0
            e.classList.remove('active')
            e.classList.add('disabled')
            // console.log(e.nextElementSibling.children[0].classList.contains('active'));
            e.nextElementSibling.children[0].classList.contains('input-custom__select') && e.nextElementSibling.children[0].classList.contains('active') ? e.nextElementSibling.children[0].classList.remove('active') : '';
            e.parentElement.hasAttribute('style') && (e.parentElement.style.height = 'auto');
            e.parentElement.classList.contains('active') && e.parentElement.classList.remove('active')
        })
    }

    const ToggleGeneral = () => {
        const getAllToggleShow = document.querySelectorAll('.toggleTurisemana__show');
        const getSelectToggle = document.querySelectorAll('.selectToggle');

        getAllToggleShow.forEach((data, index)=>{
            /* ========== PASO 1 ========== */
            /* ========== Activar el toggle que tenga la clase active al cargar la pagina ========== */
            if(index === 0 && data.classList.contains('active')) {
                const getNextElementSibling = data.nextElementSibling;
                data.closest('.turiInternalFilters') ? (data.closest('.turiInternalFilters').style.marginBottom = data.nextElementSibling.clientHeight + 20 + "px" ) : '';
                getNextElementSibling.style.height = getNextElementSibling.scrollHeight + 20 + "px" ;
            } 
            /* ========== Fin Activar el toggle que tenga la clase active al cargar la pagina ========== */

            /* ========== PASO 2 ========== */
            /* ========== Activar el toggle cuando uno da click ========== */
            data.addEventListener('click', ()=>{
                /* ========== PASO 3 ========== */
                /* ========== Cerrar los demas toggles ========== */
                if(!data.nextElementSibling.hasAttribute('style') || data.nextElementSibling.getAttribute('style') === 'height: 0px;') {
                    limpiarClass(getAllToggleShow)
                }
                /* ========== Fin Cerrar los demas toggles ========== */

                /* ========== PASO 4 ========== */
                /* ========== Agregando loss active y el tamaño al active ========== */
                const getNextElementSibling = data.nextElementSibling;
                const getParentElement = data.parentElement;
                getParentElement.classList.add('active')
                data.classList.add('active')
                if(getNextElementSibling.getAttribute('style') === 'height: 0px;') {
                    getNextElementSibling.style.height = getNextElementSibling.scrollHeight + 20 + "px" ;
                }


                let childBreadCrumb = data.nextElementSibling.children[1] ? data.nextElementSibling.children[1].classList.contains('breadcrumbContent') : false;
                let childHeight = data.nextElementSibling.children[1];
                [...getAllToggleShow].forEach(e => {
                    e.classList.contains('disabled') && e.classList.remove('disabled')
                })

                /* ========== PASO 5 ========== */
                /* ========== Verificando si es un tab y agregano active ========== */
                if(getNextElementSibling.children[0].children[0].children[0] && getNextElementSibling.children[1].children[0]) {
                    if(getNextElementSibling.children[0].children[0].children[0].classList.contains('tab-general-btn') && getNextElementSibling.children[1].children[0].classList.contains('tab-general-ctn')) {
                        [...getNextElementSibling.children[0].children[0].children].forEach( e => e.classList.contains('active') ? e.classList.remove('active') : '');
                        [...getNextElementSibling.children[1].children].forEach( e => e.classList.contains('active') ? e.classList.remove('active') : '')
                        getNextElementSibling.children[0].children[0].children[0] ? getNextElementSibling.children[0].children[0].children[0].classList.add('active') : '';
                        getNextElementSibling.children[1].children[0].classList.contains('tab-general-ctn') && getNextElementSibling.children[1].children[0].classList.add('active')
                        getNextElementSibling.style.height = 'auto'
                    }
                }

                /* ========== Verificando si es un select y agregano active ========== */
                if(getNextElementSibling.children[0]) {
                    if(getNextElementSibling.children[0].classList.contains('input-custom__select')) {
                        let selectInput = getNextElementSibling.children[0]
                        selectInput.addEventListener('click', () => {
                            setTimeout(() => {
                                console.log(selectInput.scrollHeight);
                                getNextElementSibling.style.height = `${selectInput.scrollHeight + 20}px`;
                            }, 200);
                            // let heightFather = getNextElementSibling
                        })
                    }
                }


                let maxWidth = window.innerWidth;
                if (maxWidth > 991) {
                    if(childBreadCrumb) {
                        const arrChildren = [];
                        [...childHeight.children].forEach((e,index) => {
                            arrChildren[index] = Number(e.clientHeight)
                        })
                        data.closest('.turiInternalFilters') ? (data.closest('.turiInternalFilters').style.marginBottom = Math.max(...arrChildren) + 30 + "px" ) : '';
                        return;
                    }
                    data.closest('.turiInternalFilters') ? (data.closest('.turiInternalFilters').style.marginBottom = data.nextElementSibling.clientHeight + 30 + "px" ) : '';
                } 
            });
        });
    }

    // const FilterCheckboxTurisemana = () => {
    //     const arrTypeOption = document.querySelectorAll('.typeOption input')
    //     arrTypeOption.forEach(optionCkeck => {
    //         optionCkeck.addEventListener('click', e => {
    //             if(!optionCkeck.closest('.typeUnit').classList.contains('active')) {
    //                 const arrCheckbox = optionCkeck.closest('.availability__typeContent').children;
    //                 optionCkeck.closest('.typeUnit').classList.add('active');
    //                 [...arrCheckbox].forEach( e => {
    //                     if(!e.classList.contains('active')) {
    //                         e.children[0].children[0].checked=false;
    //                     }
    //                 })
    //             }
    //         })
    //     })
    // }

    return {
        getChildFunctions:  function(){
            try{
                ToggleGeneral();
            }catch(error){ }
            // try{
            //     FilterCheckboxTurisemana();
            // }catch(error){ }
        }
    }

}();

const getChildsToggleTurisemana = ()=>{
    ToggleTurisemana.getChildFunctions();
}

export {
    getChildsToggleTurisemana
}