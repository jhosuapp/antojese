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
                    reUseRemoveClasses();
                }else{
                    reUseRemoveClasses();
                    data.classList.add('active');
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