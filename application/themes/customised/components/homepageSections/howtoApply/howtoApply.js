"use strict";
var howToSection = document.getElementsByClassName('how-to-right')[0];
var howToVideo = howToSection.querySelector("video");
window.addEventListener("scroll", function () {
    var howTo = document.getElementById("how-to");
    var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    var howToHeight = howTo.offsetTop;
    if (scrollTop > howToHeight) {
        howToVideo.play();
    }
});

howToVideo.addEventListener("timeupdate", function () {
    var timeDisplay = Math.floor(howToVideo.currentTime);
    if (timeDisplay === 63) {
        setTimeout(function () {
            howToVideo.play();
        }, 5000);
    }
}, false);