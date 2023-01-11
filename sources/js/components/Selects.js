const Select = function(){

    const SelectConfig = () =>{
        const getAllSelectsContainer = document.querySelectorAll('.input-custom__select');
        const getAllOptions = document.querySelectorAll('.input-custom__select option');
        //ANIMACION DEL SELECT
        getAllSelectsContainer.forEach((data)=>{
            data.addEventListener('click', ()=>{

                const reUseRemoveClasses = ()=>{
                    getAllSelectsContainer.forEach((data)=>{
                        data.classList.remove('active');
                    });
                }
                getAllSelectsContainer.forEach((data)=>{
                    data.classList.add('index');
                });
                if(data.classList.contains('active')){
                    // Ajuste Jose
                    // data.closest('.toggle') && (data.closest('.toggle').style.height = 'auto');
                    // data.closest('.toggle__hidden') && (data.closest('.toggle__hidden').style.height = 'auto');
                    // End Ajuste Jose
                    reUseRemoveClasses();
                }else{
                    reUseRemoveClasses();
                    data.classList.add('active');
                    // Ajuste Jose
                    // data.closest('.toggle').classList.add('removeOverFlow');
                    // data.closest('.toggle') && (data.closest('.toggle').style.height = '260px');
                    // End Ajuste Jose
                }
                data.classList.remove('index');
                
            });
        });
        //VALUES DEL SELECT DE MANERA DINAMICA
        getAllOptions.forEach((data)=>{
            data.addEventListener('click', ()=>{
                const getParentElement = data.parentElement;
                const getPreviousElement = getParentElement.previousElementSibling;
                getPreviousElement.value = data.textContent;
                getPreviousElement.setAttribute('data-value', data.getAttribute('data-value'));
                getPreviousElement.setAttribute('value', data.getAttribute('data-value'));
            });
        });
    }

    return {
        getChildFunctions:  function(){
            try{
                SelectConfig();
            }catch(error){ }
        }
    }

}();

const getChildsSelect = ()=>{
    Select.getChildFunctions();
}

export {
    getChildsSelect
}