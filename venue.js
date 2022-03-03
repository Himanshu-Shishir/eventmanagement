// Readmore - Readless
var i = 0;
function f() {
    if (!i) {
        document.getElementById("m").style.
            display = "inline";
        document.getElementById("doot").style.
            display = "none";
        document.getElementById("REad").innerHTML = "Read less";
        i = 1;
    }
    else {
        document.getElementById("m").style.
            display = "none";
        document.getElementById("doot").style.
            display = "inline";
        document.getElementById("REad").innerHTML = "Read more";
        i = 0;
    }
}

// Slideshow
var slide_Index = 0;
SHOWSlides();

function SHOWSlides() {
    var i;
    var slides = document.getElementsByClassName("MYSlides");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slide_Index++;
    if (slide_Index > slides.length) { slide_Index = 1 }

    slides[slide_Index - 1].style.display = "block";
    setTimeout(SHOWSlides, 2000); // Change image every 2 seconds
}