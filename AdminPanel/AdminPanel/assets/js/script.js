
function openNav() {
  document.getElementById("mySidebar").style.width = "255px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("main-content").style.marginLeft = "260px";
  document.getElementById("navbar-main").style.marginLeft = "255px";
  document.getElementById("main").style.display="none";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("main-content").style.marginLeft = "117px";
  document.getElementById("navbar-main").style.marginLeft = "0";
  document.getElementById("main").style.display="block";  
}