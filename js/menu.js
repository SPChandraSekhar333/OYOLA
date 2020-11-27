let prevScrollpos = window.pageYOffset;
let menu = document.getElementById("menu");
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    menu.style.top = "0";
  } else {
    menu.style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}