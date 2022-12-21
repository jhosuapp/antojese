import { getChildsSelect } from './Selects';

const InputNumber = function(){
    //FUNCIONALIDAD DE RESTAR Y SUMAR SEGÚN LA CANTIDAD DE ADULTOS, NIÑOS Y BEBÉS
    const InputNumberConfig = () =>{
        const getAllMinus = document.querySelectorAll('.minus');
        const getAllPlus = document.querySelectorAll('.plus');
        const getInputAdults = document.querySelector('#adultos');

        getAllMinus.forEach((data)=>{
            data.addEventListener('click', ()=>{
                const nextElemement = data.nextElementSibling;
                const valueElement = parseInt(nextElemement.value);
                nextElemement.value = valueElement - 1;
                nextElemement.value < 0 ? nextElemement.value = 0 : false;
                getInputAdults.value < 1 ? getInputAdults.value = 1: false;
            });
        });

        getAllPlus.forEach((data)=>{
            data.addEventListener('click', ()=>{
                const prevElement = data.previousElementSibling;
                const valueElement = parseInt(prevElement.value);
                prevElement.value = valueElement + 1;
            });
        });

    }
    //CREAR OPCIONES DINAMICAS SEGÚN LA CANTIDAD DE NIÑOS
    const CustomsDinamics = ()=>{

        const getMinus = document.querySelector('#niñosMinus');
        const getPlus = document.querySelector('#niñosPlus');
        const createCustomsDinamics = ()=>{
            const getAllChilds = document.querySelectorAll('.childs-select');
            const getInputChilds = document.querySelector('#niños');
            const getValue = parseInt(getInputChilds.value);
            const getDinamicChilds = document.querySelector('#dinamiChilds');

            getAllChilds.forEach((data)=>{
                data.remove();
            }); 

            for(let i = 1; i <= getValue; i ++){
                const createDivForTemplate = document.createElement('div');
                createDivForTemplate.classList.add('childs-select');
                const template =    `<div class="input-custom__select input-custom__no-write">
                                        <input type="text" name="niño-${i}" id="niño-${i}" value="2 años">
                                        <div class="options">
                                            <option data-value="2">2 años</option>
                                            <option data-value="3">3 años</option>
                                            <option data-value="4">4 años</option>
                                            <option data-value="5">5 años</option>
                                            <option data-value="6">6 años</option>
                                            <option data-value="7">7 años</option>
                                            <option data-value="8">8 años</option>
                                            <option data-value="9">9 años</option>
                                            <option data-value="10">10 años</option>
                                            <option data-value="11">11 años</option>
                                            <option data-value="12">12 años</option>
                                            <option data-value="13">13 años</option>
                                            <option data-value="14">14 años</option>
                                            <option data-value="15">15 años</option>
                                            <option data-value="16">16 años</option>
                                            <option data-value="17">17 años</option>
                                        </div>
                                    </div>`;
                createDivForTemplate.innerHTML = template;
                getDinamicChilds.append(createDivForTemplate);
            }
            getChildsSelect();
        }

        getMinus.addEventListener('click', createCustomsDinamics);
        getPlus.addEventListener('click', createCustomsDinamics);
        
    }
    //FUNCION QUE CORRIJE BUG CON EL SELECT DE CLASE
    const SelectClase = ()=>{
        const getSelectClase = document.querySelector('#dinamicClase');
        getSelectClase.classList.add('hidden');
        getSelectClase.addEventListener('click', ()=>{
            getSelectClase.classList.add('show-options');
            if(getSelectClase.classList.contains('hidden')){
                getSelectClase.classList.remove('hidden')
            }else{
                getSelectClase.classList.add('hidden');
            }
        });
    }

    return {
        getChildFunctions:  function(){
            try{
                InputNumberConfig();
            }catch(error){ }
            try{
                CustomsDinamics();
            }catch(error){ }
            try{
                SelectClase(); 
            }catch(error){ }
        }
    }

}();

const getChildsInputNumber = ()=>{
    InputNumber.getChildFunctions();
}

export {
    getChildsInputNumber
}