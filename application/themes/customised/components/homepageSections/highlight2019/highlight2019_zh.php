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
    const closeVideo = document.querySelector(".close");
    const iframeVideo = document.querySelector(".video-wrap");

    console.log(iframeVideo);
    watchVideo.onclick = function () {
        iframeVideo.className = "video show";
        closeVideo.className = "close show"
    }
    closeVideo.onclick = function () {
        iframeVideo.className = "video hide";
        closeVideo.className = "close hide";
        stopVideo();
    }
</script>
<!--<script src="--><? //= $this->getThemePath() ?><!--/components/homepageSections/highlight2019/assets/index.js"></script>-->

