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
            <div id="tradingCupWidget" style="width:100%; height: 1200px; background-color:transparent;"
                 data-theme="dark"
                 data-language="<?php echo Localization::activeLanguage();?>"></div>
        </div>
    </div>
</div>

<script src="<?= $this->getThemePath() ?>/components/homepageSections/topTraders/New.js"></script>