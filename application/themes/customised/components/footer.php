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
            <a href="<?php echo t('https://www.tradingcup.com/en');?>" class="footer-logo">
                <img src="<?= $this->getThemePath() ?>/components/homepageSections/footer/logo.png" alt="">
            </a>
            <div class="footer-nav">
                <?php
                $c = new Area('footer nav');
                $c->display();
                ?>
                <ul>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>"> <?php echo t("Home");?></a> |
                    </li>

                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/champions/2019-champions"><?php echo t("2019 Champion");?></a> |
                    </li>

                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/champions/2018-champions"><?php echo t("2018 Champion");?></a> |
                    </li>
                <?php if(Localization::activeLanguage() !=='ar') {
                    ?>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/news"><?php echo t("News");?></a> |
                    </li>
                    <?php
                }
                ?>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/faq"><?php echo t("FAQ");?></a> |
                    </li>
                    <li>
                        <a href="<?echo t('https://www.tradingcup.com/en/application/themes/customised/components/homepageSections/footer/2020-trading-cup-terms-and-conditions-english.pdf'); ?>" target="_blank"><?php echo t("T&Cs");?></a> |
                    </li>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/privacy"><?php echo t("Privacy");?></a>
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
        <?php
        $this->inc('components/homepageSections/footer/disclaimerSection.php');
        ?>
    </div>
</footer>
<?php $this->inc('components/footer_bottom.php'); ?>
