<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('components/header_top.php');
?>

<header>
    <div class="header-wrapper section-content-wrapper">
            <a href="<?php echo t('https://www.tradingcup.com/en');?>"><img src="<?= $this->getThemePath() ?>/components/homepageSections/header/logo.png" alt=""></a>

        <div class="header-right">
            <div class="header-nav">
                <ul>
                    <li>
                        <a href="<?php echo t('https://www.tradingcup.com/en');?>"><?php echo t("Home");?></a>
                    </li>
                                   <li><a href="<?php echo t('https://www.tradingcup.com/en');?>/news"><?php echo t("News");?></a></li>
                                   <li id="dropdown-list-anchor"><?php echo t("Past Champions");?> <img
                                   src="<?= $this->getThemePath() ?>/components/homepageSections/header/Path.png"
                                   alt="arrow lost">
                                   <div id="campaign-dropdown-list">
                            <a href="<?php echo t('https://www.tradingcup.com/en');?>/champions/2019-champions"><?php echo t("2019 Champion");?></a>
                            <a href="<?php echo t('https://www.tradingcup.com/en');?>/champions/2018-champions"><?php echo t("2018 Champion");?></a>
                        </div>
                    </li>
                </ul>

            </div>
            <button class="enter-button open-form"><?php echo t("Enter 2020 Cup");?></button>
            <?php
            $c= new Area('langauge-switch');
            $c->display();
            ?>
            <select name="language" id="language-switch">
                <option value="/en">
                    English
                </option>
                <option value="/zh">
                    Chinese
                </option>
            </select>
            <img src="<?= $this->getThemePath() ?>/components/homepageSections/header/Shape.png" alt=""
                 class="mobile-nav-btn">
            <div class="mobile-nav">
                <ul>
                    <li><a href="<?php echo t('https://www.tradingcup.com/en');?>"><?php echo t("Home");?></a></li>
                                       <li><a href="<?php echo t('https://www.tradingcup.com/en');?>/news"><?php echo t("News");?></a></li>
                    <li id="dropdown-list-anchor"><?php echo t("Past Champions");?> <img
                    src="<?= $this->getThemePath() ?>/components/homepageSections/header/Path.png"
                    alt="arrow lost">
                        <div id="campaign-dropdown-list">
                            <a href="<?php echo t('https://www.tradingcup.com/en');?>/2019-champions/"><?php echo t("2019 Champion");?></a>
                            <a href="<?php echo t('https://www.tradingcup.com/en');?>/2018-champions/"><?php echo t("2018 Champion");?></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <script>
    var sideMenu = new PromoLiveAccountSideMenu('<?php echo t('side-menu-title');?>', "<?php echo t('side-menu-subtitle');?>", "<?php echo t('side-menu-lang');?>");
    </script>
    <script src="<?php echo $view->getThemePath() ?>/components/homepageSections/header/header20200615.js"?></script>
</header>
