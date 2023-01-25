/*class EFBRightButton {
  
    constructor(element) {
      this.element = element;
      this.settings = null;
  
      this.events();
    }
  
    events() {
  
      this.element.addEventListener("click", (e) => {
        //e.preventDefault();
        this.element.innerHTML =
          "You clicked me. That means JavaScript is working! Background is now green, right? :)";
        this.element.style.backgroundColor = "green";
      });
    }
  }
  
  function EFBRightButtonStartup() {
    const mainElements = document.querySelectorAll(".efb-right-button");
  
    mainElements.forEach((mainElement) => {
      new EFBRightButton(mainElement);
    });
  }
  
  document.addEventListener("DOMContentLoaded", function (e) {
    bricksIsFrontend && EFBRightButtonStartup();
  });
  */