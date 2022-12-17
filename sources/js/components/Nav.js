const Nav = function(){

    const Hamburger = ()=>{
        const getIconHamburguer = document.querySelectorAll('.header-hamburger');
        const getLateralMenu = document.querySelector('.lateralMenu');

        getIconHamburguer.forEach((data)=>{
            data.addEventListener('click', ()=>{
                getLateralMenu.classList.toggle('active');
                getIconHamburguer.forEach((data)=>{
                    data.classList.toggle('enable');
                });
            });
        });
    }

    return {
        getChildFunctions : function(){
            try {
                Hamburger();
            } catch (error) {
                console.log(error);
            }

        }
    }
}();


const getChildsNav = ()=>{
    Nav.getChildFunctions();
}

export {
    getChildsNav
}