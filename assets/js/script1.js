window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("mainNav").style.padding = "1px";
    document.getElementById("mainNav").style.marginTop = "-350px";
    
  } else {
    document.getElementById("mainNav").style.padding = "25px";
    document.getElementById("mainNav").style.marginTop = "0px";
  }
}