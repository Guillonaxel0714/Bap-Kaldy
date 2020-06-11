window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("mainNav").style.padding = "2px";
    document.getElementById("mainNav").style.backgroundColor = "#3587A0";
    document.getElementById("logoRK").src = "assets/img/LogoRKb.png";
    
  } else {
    document.getElementById("mainNav").style.padding = "25px";
    document.getElementById("mainNav").style.backgroundColor = "rgba(191, 191, 191, 0.09)";
    document.getElementById("logoRK").src = "assets/img/LogoRK.png";
  }
}