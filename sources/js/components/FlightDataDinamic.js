const FlightDinamicData = function(){

    const FlightDinamicDataConfig = () =>{
        const getDataLocalStorage = localStorage.getItem('data-filter');
        const getDataToJson = JSON.parse(getDataLocalStorage);
        const getAllTextOrigin = document.querySelectorAll('.flight-origin');
        const getAllTextDestiny = document.querySelectorAll('.flight-destiny');
        const getAllTextDeparture = document.querySelectorAll('.flight-departure');
        const getAllTextComeback = document.querySelectorAll('.flight-comeback');
        const getAllTextDinamicPeople = document.querySelectorAll('.flight-people');
        const {destino, origen, salida, regreso, adultos, bebes, niños} = getDataToJson;

        const operation = parseInt(adultos) + parseInt(bebes) + parseInt(niños);

        const reUseTextDinamic = (cls, value)=>{
            cls.forEach((data)=>{
                data.textContent = value;
            });
        }

        reUseTextDinamic(getAllTextOrigin, origen);
        reUseTextDinamic(getAllTextDestiny, destino);
        reUseTextDinamic(getAllTextDeparture, salida);
        reUseTextDinamic(getAllTextComeback, regreso);
        reUseTextDinamic(getAllTextDinamicPeople, `${operation} personas`);


        if(regreso == ''){
            console.log('no hay regreso');
        }

    }

    return {
        getChildFunctions:  function(){
            try{
                FlightDinamicDataConfig();
            }catch(error){ console.log(error) }
        }
    }

}();

const getChildsFlightDinamicData = ()=>{
    FlightDinamicData.getChildFunctions();
}

export {
    getChildsFlightDinamicData
}