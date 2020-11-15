/* TODO EL CÓDIGO REFERENTE A SCRIPT  */
function myFunction() {
    var x = document.getElementById("miNav");
    if (x.className === "navegador") {
      x.className += " responsive";
    } else {
      x.className = "navegador";
    }
  }