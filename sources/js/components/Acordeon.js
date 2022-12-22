const Acordeon = (function () {
  const acordeonFunc = () => {
    const acordeons = document.querySelectorAll(".acordeon");

    acordeons.forEach((acordeon) => {
      let btn = acordeon.querySelector(".panel button");
      let icon = acordeon.querySelector(".panel button");
      var data = acordeon.lastElementChild;
      var datas = document.querySelectorAll(".acordeon .data");
      btn.addEventListener("click", () => {
        datas.forEach((ans) => {
          if (data !== ans) {
            ans.classList.add("hideData");
            ans.classList.add("rotate");
          }
        });
        data.classList.toggle("hideData");
        icon.className === "button rotate"
          ? (icon.className = "button")
          : (icon.className = "button rotate");
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
