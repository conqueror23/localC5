<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('components/header_top.php');
?>

<header>
    <div class="header-wrapper section-content-wrapper">
            <a href="https://www.tradingcup.com"><img src="<?= $this->getThemePath() ?>/components/homepageSections/header/logo.png" alt=""></a>

        <div class="header-right">
            <div class="header-nav">
                <ul>
                    <li><a href="https://www.tradingcup.com">Home</a></li>
                    <!--                <li><a href="/news">News</a></li>-->
                    <li id="dropdown-list-anchor">Past Champions <img
                                src="<?= $this->getThemePath() ?>/components/homepageSections/header/Path.png"
                                alt="arrow lost">
                        <div id="campaign-dropdown-list">
                            <a href="https://www.tradingcup.com/en/champions/2019-champions">2019 Champion</a>
                            <a href="https://www.tradingcup.com/en/champions/2018-champions">2018 Champion</a>
                        </div>
                    </li>
                </ul>

            </div>
            <button class="enter-button open-form">Enter 2020 Cup</button>
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
                    <li><a href="https://www.tradingcup.com">Home</a></li>
                    <!--                    <li><a href="">News</a></li>-->
                    <li id="dropdown-list-anchor">Past Champions <img
                                src="<?= $this->getThemePath() ?>/components/homepageSections/header/Path.png"
                                alt="arrow lost">
                        <div id="campaign-dropdown-list">
                            <a href="https://www.tradingcup.com/en/2019-champions/">2019 Champion</a>
                            <a href="https://www.tradingcup.com/en/2018-champions/">2018 Champion</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <script src="<?= $this->getThemePath() ?>/components/homepageSections/header/header.js"></script>
</header>
