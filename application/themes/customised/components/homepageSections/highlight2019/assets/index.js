var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '100%',
    width: '100%',
    videoId: 'ily_06wrUb0',
    events: {
      'onStateChange': onPlayerStateChange
    }
  });
}
function onPlayerReady(event) {
  event.target.playVideo();
}

var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    setTimeout(stopVideo, 6000);
    done = true;
  }
}
function stopVideo() {
  player.stopVideo();
}
function playVideo() {
  player.playVideo();
}

const watchVideo = document.querySelector(".highlights-words-btn");
const video = document.querySelector(".video");
const closeVideo = document.querySelector(".close");
const iframeVideo = document.querySelector(".video-wrap");

console.log(iframeVideo);
watchVideo.onclick = function () {
  iframeVideo.className = "video show";
  closeVideo.className= "close show"
}
closeVideo.onclick = function () {
  iframeVideo.className = "video hide";
  closeVideo.className = "close hide";
  stopVideo();
}