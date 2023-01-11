const Toggle = function(){

    const ToggleConfig = () =>{
        const getAllToggleShow = document.querySelectorAll('.toggle__show');
        const getSelectToggle = document.querySelector('#selectToggle');

        getAllToggleShow.forEach((data)=>{
            data.addEventListener('click', ()=>{
                
                const getNextElementSibling = data.nextElementSibling;
                const getParentElement = data.parentElement;

                // getParentElement.classList.contains('active') 
                // ? getParentElement.classList.remove('active') 
                // : setTimeout(()=>{ getParentElement.classList.add('active') },1000);

                if(data.classList.contains('active')){
                    getNextElementSibling.style.height = '0';
                    data.parentNode.style.height = 'auto';
                    data.classList.remove('active');
                }else{
                    getAllToggleShow.forEach((data)=>{
                        data.classList.remove('active');
                        data.nextElementSibling && (data.nextElementSibling.style.height = '0');
                    });
                    getNextElementSibling.style.height = getNextElementSibling.scrollHeight + 20 + "px" ;
                    data.classList.add('active');
                }

            });
        });

        getSelectToggle.addEventListener('click', ()=>{
            const getParentNode = getSelectToggle.parentElement;
            setTimeout(()=>{
                getParentNode.style.height = getParentNode.scrollHeight + "px";
            }, 101);
        });

    }
    //TOGGLE SENCILLO DE FILTROS
    const ToggleFilters = ()=>{
        const getBtnFilter = document.querySelectorAll('#btn-filter');

        getBtnFilter.forEach((data)=>{
            data.addEventListener('click', ()=>{
                data.parentElement.classList.toggle('disable');
            });
        });
    }
    //TOGGLE MOBILE
    const ToggleMobile = ()=>{
        const getAllToggleShowMobile = document.querySelectorAll('.toggle-mobile__show');
        getAllToggleShowMobile.forEach((data)=>{
            data.addEventListener('click', ()=>{      
                const getNextElementSiblingMobile = data.nextElementSibling;
                data.classList.toggle('active');
                if(data.classList.contains('active')){
                    getNextElementSiblingMobile.style.height = getNextElementSiblingMobile.scrollHeight + 20 + "px";
                }else{
                    getNextElementSiblingMobile.style.height = '0';
                }
            });
        });
    }

    return {
        getChildFunctions:  function(){
            try{
                ToggleConfig();
            }catch(error){ }
            try{
                ToggleFilters();
            }catch(error){ }
            try{
                ToggleMobile();
            }catch(error){ }
        }
    }

}();

const getChildsToggle = ()=>{
    Toggle.getChildFunctions();
}

export {
    getChildsToggle
}