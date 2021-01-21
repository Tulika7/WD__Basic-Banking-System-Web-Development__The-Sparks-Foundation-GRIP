var myIndex = 0;
sld();

function sld() {
  var i;
  var x = document.getElementsByClassName("MySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(sld, 4000);
}
