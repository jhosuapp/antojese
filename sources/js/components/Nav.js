// import { create } from "core-js/core/object";
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
  //
  const ValidationHome = ()=>{
      const getContainerValHome = document.querySelector('.enable-home');
      const getBody = document.querySelector('body');
      getContainerValHome ? getBody.classList.add('enable') : false;
  }
  //ANIMACION SCROLL
  const ScrollHeaderMobile = ()=>{
      const getHeader = document.querySelector('.header');
      const reUseValidationScroll = () =>{
          window.scrollY > 10 ?  getHeader.classList.add('scroll') : getHeader.classList.remove('scroll');
      }
      reUseValidationScroll();
      window.addEventListener('scroll', ()=>{
          reUseValidationScroll();
      });
  }
  const OptionsMenuLateral = ()=>{
      const getAlloptionsOfMenu = document.querySelectorAll('.lateralMenu__container .lateralMenu__item');
      const dinamicOptions = document.querySelector('.header-options');
      getAlloptionsOfMenu.forEach((data)=>{
          const getTextContent = data.lastElementChild.textContent;
          const getSrcImage = data.firstElementChild.firstElementChild.src;
          const createDiv = document.createElement('div');
          createDiv.classList.add('header-options__item');
          const template = `
              <div>
                  <img src="${getSrcImage}">
              </div>
              <p>${ getTextContent }</p>
          `;
          createDiv.innerHTML = template;
          dinamicOptions.append(createDiv);
          data.addEventListener('click', ()=>{
              getAlloptionsOfMenu.forEach((data)=>{
                  data.classList.remove('active');
              });
              data.classList.add('active');
          });
      });
  }
  return {
      getChildFunctions : function(){
          try {
              Hamburger();
          } catch (error) { }
          try{
              ValidationHome();
          }catch(error){ }
          try{
              ScrollHeaderMobile();
          }catch(error){  }
          try{
              OptionsMenuLateral();
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