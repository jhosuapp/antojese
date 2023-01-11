const Flight = function(){

    const FlightConfig = () =>{
        
        const reUseConfigFlight = (clsBtn, clsCtn, dnmCtn, atrBtn, atrCtn, atrNum)=>{
            clsCtn.forEach((data, indice)=>{
                data.setAttribute(`data-${atrCtn}`, indice);
            });
            clsBtn.forEach((data, indice)=>{
                // data.setAttribute(`data-${atrBtn}`, indice);
                data.setAttribute(`data-tabGeneralBtn`, atrNum);
                data.addEventListener('click', ()=>{
                    const getDataAtr = data.getAttribute(`data-${atrBtn}`);
                    clsCtn.forEach((data)=>{
                        const getDataAtrCtn = data.getAttribute(`data-${atrCtn}`);
                        if(getDataAtrCtn == getDataAtr){
                            //ELIMINAMOS EL ELEMENTO PADRE
                            data.parentNode.remove();
                            dnmCtn.append(data);  
                        } 
                    });
                    //VALIDACION DEL BOTON AL QUE LE ASIGNAMOS LOS ATRIBUTOS DINAMICOS
                    const getDataAtrCountry = data.getAttribute(`data-country`);
                    const getDataAtrImg = data.getAttribute(`data-img`);
                    const getDinamicImg = document.querySelector('.flightImg');
                    const getDinamicImgCome = document.querySelector('.flightImgCome');
                    if(data.classList.contains('data-flightBtn')){
                        getDinamicImg.src = getDataAtrImg;
                        getDinamicImg.classList.add('enable');
                        getDinamicImg.nextElementSibling.textContent = getDataAtrCountry;
                    }else{
                        getDinamicImgCome.src = getDataAtrImg;
                        getDinamicImgCome.classList.add('enable');
                        getDinamicImgCome.nextElementSibling.textContent = getDataAtrCountry;
                    }
                });
            });
        }
        //VUELOS DE IDA
        const getAllBtnFlight = document.querySelectorAll('.data-flightBtn');
        const getAllCtnFlight = document.querySelectorAll('.data-flight');
        const getContainerDinamic = document.querySelector('#flight-from');
        reUseConfigFlight(getAllBtnFlight, getAllCtnFlight, getContainerDinamic, 'flightBtn', 'flight', 1);
        //VUELOS DE VUELTA
        const getAllBtnFlightCome = document.querySelectorAll('.data-flightBtnCome');
        const getAllCtnFlightCome = document.querySelectorAll('.data-flightCome');
        const getContainerDinamicCome = document.querySelector('#flight-come');
        reUseConfigFlight(getAllBtnFlightCome, getAllCtnFlightCome, getContainerDinamicCome, 'flightBtnCome', 'flightCome', 2);

    }


    const FlightChangeOption = ()=>{
        
        const reUseSetAtr = (cls)=>{
            cls.forEach((data, indice)=>{
                data.setAttribute('data-tabgeneralbtn', indice);
            });
        }
        //CAMBIAR OPCIONES EN VUELOS DE REGRESO
        const getAllBtnChangeOpt = document.querySelectorAll('.tab-change-option');
        reUseSetAtr(getAllBtnChangeOpt);
        //CAMBIAR OPCIONES EN DETALLES
        const getAllBtnChangeOptDetail = document.querySelectorAll('.tab-change-option-detail');
        reUseSetAtr(getAllBtnChangeOptDetail);

    }

    return {
        getChildFunctions:  function(){
            try{
                FlightConfig();
            }catch(error){ }
            try{
                FlightChangeOption();
            }catch(error){ }
        }
    }

}();

const getChildsFlight = ()=>{
    Flight.getChildFunctions();
}

export {
    getChildsFlight
}