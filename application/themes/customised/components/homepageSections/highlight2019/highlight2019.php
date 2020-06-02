<div class="section-content-wrapper">
    <div class="wrap">
        <div class="highlights">
            <div class="highlights-words">
                <h1>2019 Highlights</h1>
                <p>The grand final was live telecast around the world and hosted at the e-stadium in Macau to a live
                    audience.
                    30 contestants were flown in from around the world for the chance to be crowned the 2019 Trading
                    Champion. The
                    atmosphere of the final was electrifying as you’ll see by clicking play on the highlights video
                    here.</p>
                <div>
                    <button class="highlights-words-btn">
                        <span>Watch full highlights</span>
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

