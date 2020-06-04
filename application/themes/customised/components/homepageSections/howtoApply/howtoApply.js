"use strict";

var video = document.querySelector("video");
window.addEventListener("scroll", function () {
    var howTo = document.getElementById("how-to");
    var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    var howToHeight = howTo.offsetTop;
    if (scrollTop > howToHeight) {
        video.play();
    }
});

video.addEventListener("timeupdate", function () {
    var timeDisplay = Math.floor(video.currentTime);
    if (timeDisplay === 63) {
        setTimeout(function () {
            video.play();
        }, 5000);
    }
}, false);