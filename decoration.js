// Decoration JS
    var i=0;
    function read(){
          if(!i){
                document.getElementById("mor").style.display = "inline";
                document.getElementById("dote").style.display="none";
                document.getElementById("read").innerHTML="Read less";
    i=1;
          }
    else{
        document.getElementById("mor").style.
            display = "none";
    document.getElementById("dote").style.
    display="inline";
    document.getElementById("read").innerHTML="Read more";
    i=0;
          }
        }
var SlideIndex = 0;
ShowSlides();

function ShowSlides() {
    var i;
    var Slides = document.getElementsByClassName("MySlides");
    for (i = 0; i < Slides.length; i++) {
        Slides[i].style.display = "none";
    }
    SlideIndex++;
    if (SlideIndex > Slides.length) { SlideIndex = 1 }

    Slides[SlideIndex - 1].style.display = "block";
    setTimeout(ShowSlides, 2000); // Change image every 2 seconds
}