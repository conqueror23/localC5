<div class="section-content-wrapper">
    <div class="wrap">
        <div class="highlights">
            <div class="highlights-words">
                <h1><?php echo t("2019 Highlights");?></h1>
                <p><?php echo t("The grand final was live telecast around the world and hosted at the e-stadium in Macau to a live
                    audience.
                    30 contestants were flown in from around the world for the chance to be crowned the 2019 Trading
                    Champion. The
                    atmosphere of the final was electrifying as you’ll see by clicking play on the highlights video
                    here.");?></p>
                <div>
                    <button class="highlights-words-btn">
                        <span><?php echo t("Watch full highlights");?></span>
                        <img src="<?php echo $view->getThemePath() ?>/components/homepageSections/highlight2019/images/Youtube.png"
                             alt="">
                    </button>
                </div>
            </div>
            <div class="highlights-pic">
                <img src="<?php echo $view->getThemePath() ?>/components/homepageSections/highlight2019/images/interview2.jpg"
                     alt="">
            </div>
        </div>
    </div>
    <div class="video-wrap hide">
      <div class="close hide">×</div>
        <div id="player" class="video">
        </div>
    </div>

</div>
<script>
   let hlTag = document.createElement("script");
hlTag.src = "https://www.youtube.com/iframe_api";
let firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(hlTag, firstScriptTag);
let player;

function onYouTubeIframeAPIReady() {
  player = new YT.Player("player", {
    height: '800',
    width: '800',
    videoId: "ily_06wrUb0",
    events: {
      "onStateChange": onPlayerStateChange,
    },
  });
}
function escapeAction(e){
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
  window.removeEventListener("keydown",escapeAction)
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

const watchVideo = document.querySelector(".highlights-words-btn");
const closeVideo = document.querySelector(".close");
const iframeVideo = document.querySelector(".video-wrap");

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
  escapeAction(e)
});
document.body.addEventListener("keydown", function (e) {
  escapeAction(e)
})

</script>
<!--<script src="--><? //= $this->getThemePath() ?><!--/components/homepageSections/highlight2019/assets/index.js"></script>-->

