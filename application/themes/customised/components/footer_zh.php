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
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/news"><?php echo t("News");?></a> |
                    </li>

                    <li>
                    <a href="<?php echo t('https://www.tradingcup.com/en');?>/faq"><?php echo t("FAQ");?></a> |
                    </li>
                    <li>
                        <a href="<?echo t('https://www.tradingcup.com/en/components/homepageSections/footer/2020-trading-cup-terms-and-conditions-chinese.pdf');?>" target="_blank"><?php echo t("T&Cs");?></a> |
                    </li>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/privacy"><?php echo t("Privacy");?></a>
                    </li> 
                </ul>
            </div>
            
            <div class="social-media ">
                <?php
                $this->inc('components/homepageSections/socialMedia/socialMedia_zh.php');
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
