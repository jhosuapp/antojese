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

    const ValidationHome = ()=>{
        const getContainerValHome = document.querySelector('.enable-home');
        const getBody = document.querySelector('body');
        getContainerValHome ? getBody.classList.add('enable') : false;
    }

    return {
        getChildFunctions : function(){
            try {
                Hamburger();
            } catch (error) {
                console.log(error);
            }
            try{
                ValidationHome();
            }catch(error){ }
        }
    }
}();


const getChildsNav = ()=>{
    Nav.getChildFunctions();
}

export {
    getChildsNav
}