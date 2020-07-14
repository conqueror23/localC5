<div class="section-content-wrapper" id="top-trader-anchor">
    <div class="top-traders-wrapper ">
        <h1>
            <?php echo t('Our Top Traders'); ?>
        </h1>
        <p>
            <?php echo t('Each stage runs for a month and has a total prize pool of $US10,000.
            The prize pool is split up with $US7,000, $US2,000 and $US1,000 going to 1st, 2nd and 3rd.'); ?>
            <?php echo t('<a href="<?= $this->getThemePath() ?>/components/homepageSections/footer/2020-trading-cup-terms-and-conditions-english.pdf" target="_blank">T&Cs Apply</a>'); ?>
        </p>
        <div class="tab-section">
            <div id="Tradingroot" lang="<?php if (Localization::activeLanguage() === 'vi') {
                                            echo 'viet';
                                        } else {
                                            echo Localization::activeLanguage();
                                        } ?>" >
            </div>
        </div>
    </div>
</div>
<script>
    var containerWidth = (function() {
        if (window.innerWidth > 1366) {
            containerWidth = window.innerWidth * 0.7-20;
        } else {
            containerWidth = 1366;
        }
        return containerWidth;
    })();
    var rankingContainer = document.getElementById('Tradingroot');
    if (rankingContainer) {
        rankingContainer.setAttribute('width', `${containerWidth}px`);
    }
</script>

<script src="<?= $this->getThemePath() ?>/components/homepageSections/topTraders/ranking-by-catherine.js"></script>