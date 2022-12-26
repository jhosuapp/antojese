const RadioBtn = function(){

    const RadioBtnConfig = () =>{
        const getAllRadioBtns = document.querySelectorAll('#ctnRadio input');
        const getOptionExit = document.querySelector('#opcionesSalida');
        const getOptionsComeBack = document.querySelector('#opcionesRegreso');

        getAllRadioBtns.forEach((data)=>{
            data.addEventListener('change', ()=>{
                
                switch (data.value){
                    case 'idaVuelta':
                        getOptionExit.classList.remove('enableExit');
                        getOptionsComeBack.classList.remove('disableComeBack');
                    break;  
                    case 'soloIda':
                        getOptionExit.classList.add('enableExit');
                        getOptionsComeBack.classList.add('disableComeBack');                        
                    break;  
                    case 'multiDestino':
                        getOptionExit.classList.add('enableExit');
                        getOptionsComeBack.classList.add('disableComeBack');
                    break;  
                }

            });
        });
    }

    return {
        getChildFunctions:  function(){
            try{
                RadioBtnConfig();
            }catch(error){ }
        }
    }

}();

const getChildsRadioBtn = ()=>{
    RadioBtn.getChildFunctions();
}

export {
    getChildsRadioBtn
}