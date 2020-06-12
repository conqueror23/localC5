<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();

$footerSocial = new GlobalArea('Footer Social');
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();

$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>

<footer id="footer-theme">
    <div class="footer-wrapper ">
        <div class="footer-tab section-content-wrapper">
            <a href="https://www.tradingcup.com" class="footer-logo">
                <img src="<?= $this->getThemePath() ?>/components/homepageSections/footer/logo.png" alt="">
            </a>
            <div class="footer-nav">
                <?php
                $c = new Area('footer nav');
                $c->display();
                ?>
                <ul>
                    <li>
                        <a href="https://www.tradingcup.com">Home</a> |
                    </li>

                    <li>
                        <a href="https://www.tradingcup.com/en/champions/2019-champions">2019 Champion</a> |
                    </li>

                    <li>
                        <a href="https://www.tradingcup.com/en/champions/2018-champions">2018 Champion</a> |
                    </li>

                    <li>
                        <a href="https://www.tradingcup.com/en/news">News</a> |
                    </li>
                    <li>
                        <a href="https://www.tradingcup.com/en/faq">FAQ</a> |
                    </li>

                    <li>
                        <a href="<?= $this->getThemePath() ?>/components/homepageSections/footer/2020-trading-cup-terms-and-conditions-english.pdf" target="_blank">T&Cs</a> |
                    </li>

                    <li>
                        <a href="https://www.tradingcup.com/en/privacy">Privacy</a>
                    </li> 


                </ul>
            </div>
            <div class="social-media ">
                <?php
                $this->inc('components/homepageSections/socialMedia/socialMedia.php');
                ?>
                <?php
                $c = new Area('social-media');
                $c->display();
                ?>

            </div>
        </div>
        <div class="footer-description section-content-wrapper">
            <p>
                <?php echo t("disclaimer-line1");?>
            </p>

            <p>
            <?php echo t("disclaimer-line2");?>
            </p>
            <p>
                <?php echo t("disclaimer-line3");?>

            </p>

        </div>
    </div>
</footer>

<!--<footer id="concrete5-brand">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-12">-->
<!--                <span>--><?php //echo t('Built with <a href="http://www.concrete5.org" class="concrete5" rel="nofollow">concrete5</a> CMS.') ?><!--</span>-->
<!--                <span class="pull-right">-->
<!--                    --><?php //echo Core::make('helper/navigation')->getLogInOutLink() ?>
<!--                </span>-->
<!--                <span id="ccm-account-menu-container"></span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->inc('components/footer_bottom.php'); ?>
