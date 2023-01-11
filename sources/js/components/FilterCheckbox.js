const Checkbox = function(){
    
    const CheckboxConfig = ()=>{
        const getAllCheckbox = document.querySelectorAll('.checkbox-filters');
        const getContainerWithChips = document.querySelector('#dinamic-chips');
        //CREAMOS CHIP DINAMICOS CON NOMBRES DINAMICOS
        const createChipWithFilters = ()=>{
            const getAllChipsSelected = document.querySelectorAll('.filters-selected');
            const getAllChips = document.querySelectorAll('.chip-data');
            getAllChips.forEach((data)=>{
                data.remove();
            });
            getAllChipsSelected.forEach((data)=>{
                const getDataName = data.firstElementChild.name;
                const getDataText = data.firstElementChild.getAttribute('data-text');
                const createSpan = document.createElement('span');
                createSpan.className = `chip chip-data ${getDataName}`;
                const templateChip =    `
                                        <p>${getDataText}</p>
                                        <button class="remove-filters">
                                            <img src="./assets/icons/close-filter.svg" alt="">
                                        </button>
                                        `;
                createSpan.innerHTML = templateChip;
                getContainerWithChips.append(createSpan);
            });
        }
        //RECORREMOS TODOS LOS CHECKBOX Y VALIDAMOS SI ESTAN SELECCIONADOS
        getAllCheckbox.forEach((data)=>{
            data.addEventListener('change', ()=>{
                const getFirtsChild = data.firstElementChild;
                const getDataNameInput = getFirtsChild.name;
                if(getFirtsChild.checked){
                    data.classList.add('filters-selected'); 
                    createChipWithFilters();
                }else{
                    const getClassesDinamic = document.querySelector(`.${getDataNameInput}`);
                    getClassesDinamic.remove();
                    data.classList.remove('filters-selected'); 
                }
            });
        });
    }

    return {
        getChildFunctions : function(){
            CheckboxConfig();
        }
    }

}();

const getChildsCheckbox = ()=>{
    Checkbox.getChildFunctions();
}

export {
    getChildsCheckbox
}
