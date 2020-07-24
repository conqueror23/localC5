<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('components/header_top.php');
?>

<header>
    <script>var headerResource ='<?php echo $view->getThemePath()."/components/homepageSections/header"; ?>';</script>
    <div class="header-wrapper section-content-wrapper">
            <a href="<?php echo t('https://www.tradingcup.com/en');?>"><img src="<?= $this->getThemePath() ?>/components/homepageSections/header/logo.png" alt=""></a>
        <div class="header-right">
            <div class="header-nav">
                <ul>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>"><?php echo t("Home");?></a>
                    </li>
                    <?php if(Localization::activeLanguage() !=='ar') {
                    ?>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/news"><?php echo t("News");?></a>
                    </li>
                    <?php 
                    }
                    ?>

                    <li id="dropdown-list-anchor"><?php echo t("Past Champions");?>
                    <img src="<?= $this->getThemePath() ?>/components/homepageSections/header/down-arrow.png" alt="arrow lost">
                        <div id="campaign-dropdown-list">
                            <a href="<?php echo t('https://www.tradingcup.com/en');?>/champions/2019-champions">
                                <?php echo t("2019 Champion");?>
                            </a>
                            <a href="<?php echo t('https://www.tradingcup.com/en');?>/champions/2018-champions">
                                <?php echo t("2018 Champion");?>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <button class="enter-button open-form"><?php echo t("Enter 2020 Cup");?></button>
            <div id='normal-language-switch'>
                <?php
                $c= new Area('langauge-switch');
                $c->display();
                ?>
            </div>
           
            <img src="<?= $this->getThemePath() ?>/components/homepageSections/header/hamburger.png" alt=""
                 class="mobile-nav-btn" id='mobile-nav-btn'>
            <div class="mobile-nav" id="mobile-nav-menu">
                <div id="mobile-campaign-dropdown-list">
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/champions/2019-champions/"><?php echo t("2019 Champion");?> ></a>

                        <a href="<?php echo t('https://www.tradingcup.com/en');?>/champions/2018-champions/"><?php echo t("2018 Champion");?> ></a>
                            <button id='mobile-enter-button' class="enter-button open-form"><?php echo t("Enter 2020 Cup");?></button>
                            <div id='mobile-language-switch'>
                            <?php
                                $c= new Area('langauge-switch');
                                $c->display();
                                ?>
                            </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    $this->inc('components/common/acyForm.php');
    ?>
    <script src="<?php echo $view->getThemePath() ?>/components/homepageSections/header/header20200615.js"?></script>
</header>
