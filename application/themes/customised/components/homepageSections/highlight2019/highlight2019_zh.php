<div class="section-content-wrapper">
    <div class="wrap">
        <div class="highlights">
            <div class="highlights-words">
                <h1>2019集锦</h1>
                <p>总决赛在澳门电竞馆向全球观众进行了现场直播。来自世界各地的30名选手在当晚争夺2019交易杯冠军。总决赛之夜现场气氛紧张热烈，您可以点击此处观看精彩片段。</p>
                <div>
                    <button class="highlights-words-btn">
                        <span>点击观看</span>
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
    <div class="close hide">×</div>
    <div class="video-wrap hide">
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

