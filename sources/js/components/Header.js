const Header = function () {

  const Load = () => {
    const preloader = document.getElementById("loadScreen");
    preloader.style.display = "none";
  };

  return {
    getChildFunctions : function(){
        try {
            Load();
        } catch (error) {
            console.log(error);
        }
    }
  }

}();

const getChildsHeader = () => {
    Header.getChildFunctions();
}

export {
    getChildsHeader
}