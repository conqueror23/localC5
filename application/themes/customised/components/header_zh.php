<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('components/header_top.php');
?>

<header>
    <div class="header-wrapper section-content-wrapper">
        <a href="https://www.tradingcup.com/zh_au"><img src="<?= $this->getThemePath() ?>/components/homepageSections/header/logo.png" alt=""></a>
        <div class="header-nav">
            <ul>
                <li><a href="https://www.tradingcup.com/zh_au">首页</a></li>
                <!--                <li><a href="/news">News</a></li>-->
                <li id="dropdown-list-anchor">往届回顾<img
                            src="<?= $this->getThemePath() ?>/components/homepageSections/header/Path.png"
                            alt="arrow lost">
                    <div id="campaign-dropdown-list">
                        <a href="https://www.tradingcup.com/zh_au/champions/2019-champions">2019交易杯</a>
                        <a href="https://www.tradingcup.com/zh_au/champions/2018-champions">2018交易杯</a>
                    </div>
                </li>
            </ul>

        </div>
        <div class="header-right">
            <button class="enter-button open-form">2020交易杯</button>
            <select name="language" id="language-switch">
                <option value="/zh">
                    简体中文
                </option>
                <option value="/en">
                    英文
                </option>

            </select>
            <img src="<?= $this->getThemePath() ?>/components/homepageSections/header/Shape.png" alt=""
                 class="mobile-nav-btn">
            <div class="mobile-nav">
                <ul>
                    <li><a href="https://www.tradingcup.com/zh_au">首页</a></li>
                    <!--                    <li><a href="">News</a></li>-->
                    <li id="dropdown-list-anchor">往届回顾 <img
                                src="<?= $this->getThemePath() ?>/components/homepageSections/header/Path.png"
                                alt="arrow lost">
                        <div id="campaign-dropdown-list">
                            <a href="https://www.tradingcup.com/zh_au/champions/2019-champions">2019交易杯</a>
                            <a href="https://www.tradingcup.com/zh_au/champions/2019-champions">2018交易杯</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <script src="<?= $this->getThemePath() ?>/components/homepageSections/header/header_zh.js"></script>
</header>
