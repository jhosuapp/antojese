const Toggle = function(){

    const ToggleConfig = () =>{
        const getAllToggleShow = document.querySelectorAll('.toggle__show');
        const getSelectToggle = document.querySelector('#selectToggle');

        getAllToggleShow.forEach((data)=>{
            data.addEventListener('click', ()=>{
                
                const getNextElementSibling = data.nextElementSibling;
                data.classList.toggle('active');
                setTimeout(()=>{

                    console.log(getNextElementSibling.scrollHeight);
                },1000);
                if(data.classList.contains('active')){
                    getNextElementSibling.style.height = getNextElementSibling.scrollHeight + 20 + "px";
                }else{
                    getNextElementSibling.style.height = '0';
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

    return {
        getChildFunctions:  function(){
            try{
                ToggleConfig();
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