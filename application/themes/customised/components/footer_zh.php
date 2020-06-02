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
            <a href="https://www.tradingcup.com/zh_au" class="footer-logo">
                <img src="<?= $this->getThemePath() ?>/components/homepageSections/footer/logo.png" alt="">
            </a>
            <div class="footer-nav">
                <ul>
                    <li>
                        <a href="https://www.tradingcup.com/zh_au">首页</a> |
                    </li>

                    <li>
                        <a href="https://www.tradingcup.com/zh/champions/2019-champions">2019交易杯</a> |
                    </li>
                    <li>
                        <a href="https://www.tradingcup.com/zh/champions/2018-champions">2018交易杯</a>|
                    </li>


                    <li>
                        <a href="https://www.tradingcup.com/zh_au/faq">FAQ</a> |
                    </li>

                    <li>
                        <a href="<?= $this->getThemePath() ?>/components/homepageSections/footer/2020-trading-cup-terms-and-conditions-chinese.pdf" target="_blank">网站使用条款</a> |
                    </li>

                    <li>
                        <a href="https://www.tradingcup.com/zh_au/privacy">隐私条款</a> 
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
        <div class="footer-description section-content-wrapper">
            <p>
                风险提示：外汇及其他金融衍生品交易风险较高。在您决定进行外汇交易投资之前，我们建议您考虑您的投资目标、风险承受能力以及交易经验。您的交易亏损有可能超过您的原始投入。ACY Securities Pty
                Ltd（ABN：80 150 565 781
                AFSL：403863）并未将您的投资目标、财务状况和需求考虑在内。本网站的内容不构成投资建议，如有任何疑问，请您咨询独立专业的财务或税务的意见。请您务必在进行交易投资前，仔细阅读金融服务指南（FSG）和产品披露申明（PDS）。如果本网站上有任何建议，则仅为一般建议。
            </p>
            <p>
                ACY Securities Pty Ltd（“ACY AU”）由澳大利亚证券和投资委员会（ASIC AFSL：403863）授权和监管。注册地址：Level 18, 799 Pacific Hwy,
                Chatswood NSW 2067。AFSL授权我们为澳大利亚居民或企业提供服务。
            </p>
            <p class="term-line"> © 2018 - 2020 本网站由ACY Securities Pty Ltd拥有和运营。<a href="<?= $this->getThemePath()?>/components/homepageSections/footer/2020-trading-cup-terms-and-conditions-chinese.pdf"> 网站使用条款</a></p>


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
