const FilterRange = function(){

    const FilterRangePrice = () =>{
        const txtMinValue = document.getElementById("min-price-txt");
        const txtMaxValue = document.getElementById("max-price-txt");
        const rangeInput = document.querySelectorAll(".range-input input");
        const progress = document.querySelector(".slider .progress");
        let priceGap = 100000;

        rangeInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);

            if (maxVal - minVal < priceGap) {
            if (e.target.className === "range-min") {
                rangeInput[0].value = maxVal - priceGap;
            } else {
                rangeInput[1].value = minVal + priceGap;
            }
            } else {
            //imprimimos el valor de cada range en su span
            txtMinValue.innerHTML = `$${formatNumber(minVal)}`;
            txtMaxValue.innerHTML = `$${formatNumber(maxVal)}`;
            progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        });
        });


        function formatNumber(floatValue = 0, decimals = 0, multiplier = 1) {
            let floatMultiplied = floatValue * multiplier;
            let stringFloat = floatMultiplied + "";
            let arraySplitFloat = stringFloat.split(".");
            let decimalsValue = "0";
            if (arraySplitFloat.length > 1) {
                decimalsValue = arraySplitFloat[1].slice(0, decimals);
            }
            let integerValue = arraySplitFloat[0];
            let arrayFullStringValue = [integerValue, decimalsValue];
            let FullStringValue = arrayFullStringValue.join(".")
            let floatFullValue = parseFloat(FullStringValue) + "";
            let formatFloatFullValue = new Intl.NumberFormat('es-ES', { minimumFractionDigits: decimals }).format(floatFullValue);
            return formatFloatFullValue;
        }
    }

    const FilterRangeHour = ()=>{
        let timeGap = 130;

        const reUseInputRange = (clsInput, prg, idMin, idMax)=>{
            clsInput.forEach((input) => {
                input.addEventListener("input", (e) => {
                    let minVal = parseInt(clsInput[0].value),
                        maxVal = parseInt(clsInput[1].value);
                        
                    //salida
                    let hours1 = Math.floor(minVal / 60);
                    let minutes1 = minVal - hours1 * 60;
                
                    if (hours1.length == 1) hours1 = "0" + hours1;
                    if (minutes1.length == 1) minutes1 = "0" + minutes1;
                    if (minutes1 == 0) minutes1 = "00";
                    if (hours1 < 10) {
                        hours1 = "0" + hours1;
                        minutes1 = minutes1;
                    } else {
                        hours1 = hours1;
                        minutes1 = minutes1;
                    }
                    if (hours1 == 0) {
                        hours1 = "0" + 0;
                        minutes1 = minutes1;
                    }
                
                    //regreso
                    let hours2 = Math.floor(maxVal / 60);
                    let minutes2 = maxVal - hours2 * 60;
                
                    if (hours2.length == 1) hours2 = "0" + hours2;
                    if (minutes2.length == 1) minutes2 = "0" + minutes2;
                    if (minutes2 == 0) minutes2 = "00";
                    if (hours2 < 10) {
                        hours2 = "0" + hours2;
                        minutes2 = minutes2;
                    }
                    if (hours2 >= 12) {
                        if (hours2 == 12) {
                        hours2 = hours2;
                        minutes2 = minutes2;
                        } else if (hours2 == 24) {
                        hours2 = 23;
                        minutes2 = "59";
                        } else {
                        hours2 = hours2;
                        minutes2 = minutes2;
                        }
                    } else {
                        hours2 = hours2;
                        minutes2 = minutes2;
                    }
                
                    if (maxVal - minVal < timeGap) {
                        if (e.target.className === "range-min") {
                        clsInput[0].value = maxVal - timeGap;
                        } else {
                        clsInput[1].value = minVal + timeGap;
                        }
                    } else {
                        //imprimimos el valor de cada range en su span
                        idMin.innerHTML = `${hours1 + ":" + minutes1}`;
                        idMax.innerHTML = `${hours2 + ":" + minutes2}`;
                        prg.style.left = (minVal / clsInput[0].max) * 100 + "%";
                        prg.style.right = 100 - (maxVal / clsInput[1].max) * 100 + "%";
                    }
                });
            });
        }
        //SALIDA
        const txtMinValue = document.getElementById("min-time-txt");
        const txtMaxValue = document.getElementById("max-time-txt");
        const rangeInput = document.querySelectorAll(".range-input-from input");
        const progress = document.querySelector(".slider-from .progress");
        reUseInputRange(rangeInput, progress, txtMinValue, txtMaxValue);
        //LLEGADA
        const txtMinValueCome = document.getElementById("min-time-txt-come");
        const txtMaxValueCome = document.getElementById("max-time-txt-come");
        const rangeInputCome = document.querySelectorAll(".range-input-come input");
        const progressCome = document.querySelector(".slider-come .progress");
        reUseInputRange(rangeInputCome, progressCome, txtMinValueCome, txtMaxValueCome);
    }

    return {
        getChildFunctions:  function(){
            try{
                FilterRangePrice();
            }catch(error){ }
            try{
                FilterRangeHour();
            }catch(error){ }
        }
    }

}();

const getChildsFilterRange = ()=>{
    FilterRange.getChildFunctions();
}

export {
    getChildsFilterRange
}