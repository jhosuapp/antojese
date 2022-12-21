const Select = function(){

    const SelectConfig = () =>{
        const getAllSelectsContainer = document.querySelectorAll('.input-custom__select');
        const getAllOptions = document.querySelectorAll('.input-custom__select option');

        getAllSelectsContainer.forEach((data)=>{
            data.addEventListener('click', ()=>{
                data.classList.toggle('active');
            });
        });

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
            SelectConfig();
        }
    }

}();

const getChildsSelect = ()=>{
    Select.getChildFunctions();
}

export {
    getChildsSelect
}