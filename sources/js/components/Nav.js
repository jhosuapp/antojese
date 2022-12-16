const Nav = function(){

    const Hamburger = ()=>{
        const menuIcon = document.getElementById('menuIcon');
        const navMobile = document.getElementById('navMobile');
        const navIconClose = document.getElementById('navMobileClose');

        menuIcon.addEventListener('click', handleMenu )
        navIconClose.addEventListener('click', handleMenu )

        function handleMenu () {
            if(navMobile.classList.contains('menuActive')){
                navMobile.classList.remove('menuActive')
            }else{
                navMobile.classList.add('menuActive')
            }
        }
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