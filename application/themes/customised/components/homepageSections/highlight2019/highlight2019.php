<div class="section-content-wrapper">
    <div class="wrap">
        <div class="highlights">
            <div class="highlights-words">
                <h1><?php echo t("2019 Highlights"); ?></h1>
                <p><?php echo t("The grand final was live telecast around the world and hosted at the e-stadium in Macau to a live
                    audience.
                    30 contestants were flown in from around the world for the chance to be crowned the 2019 Trading
                    Champion. The
                    atmosphere of the final was electrifying as you’ll see by clicking play on the highlights video
                    here."); ?></p>
                <div>
                    <button class="highlights-words-btn">
                        <span><?php echo t("Watch full highlights"); ?></span>
                        <img src="<?php echo $view->getThemePath() ?>/components/homepageSections/highlight2019/images/youtube.png"
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
    <div class="close hide">
          <div>X</div>
        </div>
        <iframe
          id="player"
          allow="autoplay; encrypted-media"
          autoplay
          allowfullscreen
        ></iframe>
    </div>

</div>
<!--<script src="--><?php //echo $view->getThemePath();?><!--/components/homepageSections/highlight2019/assets/index.js"></script>-->
