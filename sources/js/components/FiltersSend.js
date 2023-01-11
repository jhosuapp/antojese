const FilterSend = function(){

    const FilterSendConfig = () =>{
        const getAllForms = document.querySelectorAll('.filters-block');

        getAllForms.forEach((data)=>{

            data.addEventListener('submit', (e)=>{
                e.preventDefault();
                const data = Object.fromEntries(
                    new FormData(e.target)
                );
                localStorage.setItem('data-filter', JSON.stringify(data));
                window.location.href = e.submitter.dataset.link;
            });

        });
        
    }

    return {
        getChildFunctions:  function(){
            try{
                FilterSendConfig();
            }catch(error){ }
        }
    }

}();

const getChildsFilterSend = ()=>{
    FilterSend.getChildFunctions();
}

export {
    getChildsFilterSend
}