var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage(){
    document.getElementById("loader").style.display = "none";
    document.getElementById("body").style.display = "flex";
}
var btnContainer = document.getElementById("menu-item");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("menu-btn");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click",function() {
    var current = document.getElementsByClassName("active-menu");
    current[0].className = current[0].className.replace(" active-menu", "");
    this.className += " active-menu";
  });
}