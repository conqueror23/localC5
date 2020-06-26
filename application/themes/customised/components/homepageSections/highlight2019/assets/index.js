var hlPlayer = document.getElementById("player");
var playButton = document.getElementsByClassName("highlights-words-btn")[0];

function setVideoSource(country) {
  var iframeWidth = window.innerWidth;
  var iframeHeight = window.innerHeight;
  var closePlayer= document.getElementsByClassName('close')[0]
  if (country === "CN") {
    hlPlayer.src =
      "//1253488992.vod2.myqcloud.com/vod-player/1253488992/5285890803989768181/tcplayer/console/vod-player.html?autoplay=1&width=" +
      iframeWidth +
      "&height=" +
      iframeHeight;
     closePlayer.setAttribute('style','right:0;top:0;');
  }else{
    hlPlayer.src="https://www.youtube.com/embed/ily_06wrUb0?autoplay=1";
    // hlPlayer.setAttribute('allow','autoplay; encrypted-media');
  }
}

function showVideo() {
  var videoWrap = document.getElementsByClassName("video-wrap")[0];
  var videoClose = videoWrap.getElementsByClassName("close")[0];

  var country = localStorage.getItem("tradingcup-countries");
  if (!country) {
    $.get(
      "https://ipinfo.io",
      function (response) {
        localStorage.setItem("tradingcup-countries", response.country);
      },
      "jsonp"
    );
  }
  setVideoSource(country);
  function escPress(e) {
    console.log("press", e);
    if (e.keycode === 27 || e.code === "Escape") {
      closeVideo();
    }
  }
  function closeVideo() {
    videoWrap.classList.remove("show");
    videoWrap.classList.add("hide");
    videoClose.classList.remove("show");
    videoClose.classList.add("hide");
    hlPlayer.src = "https://www.youtube.com/embed/ily_06wrUb0";
    document.body.setAttribute("style", "overflow:auto");
    hlPlayer.removeEventListener("keydown", escPress);
    document.body.removeEventListener("keydown", escPress);
    videoClose.removeEventListener("click", closeVideo);
  }
  videoWrap.classList.remove("hide");
  videoWrap.classList.add("show");
  videoClose.classList.remove("hide");
  videoClose.classList.add("show");
  document.body.setAttribute("style", "overflow:hidden");

  hlPlayer.addEventListener("keydown", escPress);
  document.body.addEventListener("keydown", escPress);
  videoClose.addEventListener("click", closeVideo);
}
playButton.addEventListener("click", showVideo);
