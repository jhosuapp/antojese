const Nav = function(){

    const Hamburger = ()=>{
        let hola = document.querySelector('.div');

        hola.classList.add('active');
        console.log('hamburger');
    }

    const Loader = ()=>{
        console.log('hola');
    }
    

    return {
        getChildFunctions : function(){
            try {
                Hamburger();
            } catch (error) { }
            try{
                Loader();
            }catch (error){ }
        }
    }
}();


const getChildsNav = ()=>{
    Nav.getChildFunctions();
}

export {
    getChildsNav
}