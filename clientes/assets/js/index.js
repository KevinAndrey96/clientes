var carousel = document.getElementById('carousel');
var first = carousel.children[0];
var ml = 0;

setInterval(function(){
  ml -= 0.3;
  if (-ml > first.offsetWidth){
    first.style.marginLeft = null;
    carousel.appendChild(first);
    first = carousel.children[0];
    ml = -0.2;
  }
  first.style.marginLeft = ml + 'px';
}, 10);