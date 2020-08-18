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
        <a href="<?php echo t('https://www.tradingcup.com/en');?>"  alt='tradingcup mainpage lost' rel="noopener" class="footer-logo">
                <img src="<?= $this->getthemepath() ?>/components/homepagesections/footer/logo.png" alt="footer logo">
            </a>
            <div class="footer-nav">
                <ul>
                    <li>
                    <a href="<?php echo t('https://www.tradingcup.com/en');?>" alt='tradingcup home not found' rel="noopener" > <?php echo t("home");?></a> |
                    </li>

                    <li>
                    <a href="<?php echo t('https://www.tradingcup.com/en');?>/champions/2019-champions" alt='2019 champion' rel="noopener"><?php echo t("2019 Champion");?></a> |
                    </li>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/champions/2018-champions"alt ='2018 champion 'rel="noopener"><?php echo t("2018 Champion");?></a> |
                    </li>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/news" alt='news' rel="noopener"><?php echo t("News");?></a> |
                    </li>

                    <li>
                    <a href="<?php echo t('https://www.tradingcup.com/en');?>/faq" alt='faq' rel="noopener"><?php echo t("FAQ");?></a> |
                    </li>
                    <li>
                        <a href="<?echo t('https://www.tradingcup.com/en/components/homepageSections/footer/2020-trading-cup-terms-and-conditions-chinese.pdf');?>" alt='terms and conditions' rel="noopener" target="_blank"><?php echo t("T&Cs");?></a> |
                    </li>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/privacy" alt='privacy' rel='noopener'><?php echo t("Privacy");?></a>
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
