var i = 0;
function fun() {
    if (!i) {
        document.getElementById("mo").style.
            display = "inline";
        document.getElementById("dot").style.
            display = "none";
        document.getElementById("READ").innerHTML = "Read less";
        i = 1;
    }
    else {
        document.getElementById("mo").style.
            display = "none";
        document.getElementById("dot").style.
            display = "inline";
        document.getElementById("READ").innerHTML = "Read more";
        i = 0;
    }
}
var SLIDEIndex = 0;
Show_Slides();

function Show_Slides() {
    var i;
    var slides = document.getElementsByClassName("my_Slides");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    SLIDEIndex++;
    if (SLIDEIndex > slides.length) { SLIDEIndex = 1 }

    slides[SLIDEIndex - 1].style.display = "block";
    setTimeout(Show_Slides, 2000); // Change image every 2 seconds
}