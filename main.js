window.onload = function () {
  var bouton = document.getElementById("btnMenu");
  var nav = document.getElementById("nav_menu");
  bouton.onclick = function (e) {
    if (nav.style.display == "block") {
      nav.style.display = "none";
    } else {
      nav.style.display = "block";
    }
  };
};
