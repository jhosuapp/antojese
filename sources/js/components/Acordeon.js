const Acordeon = (function () {
  const acordeonFunc = () => {
    const acordeons = document.querySelectorAll(".acordeon");

    acordeons.forEach((acordeon) => {
      let btn = acordeon.querySelector(".panel button");
      let icon = acordeon.querySelector(".panel button i");
      var data = acordeon.lastElementChild;
      var datas = document.querySelectorAll(".acordeon .data");
      btn.addEventListener("click", () => {
        datas.forEach((ans) => {
          let ansIcon = ans.parentElement.querySelector("button i");
          if (data !== ans) {
            ans.classList.add("hideData");
            ansIcon.className = "fas fa-plus-circle";
          }
        });
        data.classList.toggle("hideData");
        
      });
    });
  };

  return {
    getChildFunctions: function () {
      try {
        acordeonFunc();
      } catch (error) {}
    },
  };
})();

const getChildsAcordeon = () => {
  Acordeon.getChildFunctions();
};

export { getChildsAcordeon };
