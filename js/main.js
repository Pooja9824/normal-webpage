function myFunction() {
    var x = document.getElementById("topnav");
    if (x.className === "menu") {
      x.className += " responsive";
    } else {
      x.className = "menu";
    }
}

console.log("Script Runing..");