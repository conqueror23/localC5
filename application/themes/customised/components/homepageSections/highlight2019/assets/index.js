"use strict";

var hlTag = document.createElement("script");
hlTag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(hlTag, firstScriptTag);
var player = void 0;
function onYouTubeIframeAPIReady() {
  player = new YT.Player("player", {
    height: '800',
    width: '800',
    videoId: "ily_06wrUb0",
    events: {
      "onStateChange": onPlayerStateChange
    }
  });
}
function escapeAction(e) {
  if (e.key === "Escape") {
    iframeVideo.className = "video hide";
    closeVideo.className = "close hide";
    stopVideo();
  }
}

function onPlayerReady(event) {
  event.target.playVideo();
}
function stopVideo() {
  window.removeEventListener("keydown", escapeAction);
  player.stopVideo();
}
function playVideo() {
  player.playVideo();
}

function onPlayerStateChange(event) {
  // console.log('event here',event);
  // console.log('yt',YT);

  // if (event.data == YT.PlayerState.ENDED) {
  // setTimeout(stopVideo, 1000);
  // setTimeout(event.target.clearVideo, 1000);
  // }
}

var watchVideo = document.querySelector(".highlights-words-btn");
var closeVideo = document.querySelector(".close");
var iframeVideo = document.querySelector(".video-wrap");

watchVideo.onclick = function () {
  iframeVideo.className = "video show";
  closeVideo.className = "close show";
};
closeVideo.onclick = function () {
  iframeVideo.className = "video hide";
  closeVideo.className = "close hide";
  stopVideo();
};

window.addEventListener("keydown", function (e) {
  escapeAction(e);
});
document.body.addEventListener("keydown", function (e) {
  escapeAction(e);
});