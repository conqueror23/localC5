<script src="https://apiform.crm.zerologix.com/js/external/acyform.bundle.js" type="text/javascript"></script>
<div class="header-wrapper section-content-wrapper">
    <a href="#"><img src="<?= $this->getThemePath() ?>/components/homepageSections/header/logo.png" alt=""></a>
    <div class="header-nav">
        <ul>
            <li><a href="#">首页</a></li>
            <li><a href="/news">News</a></li>
            <li id="dropdown-list-anchor">往届回顾 <img
                        src="<?= $this->getThemePath() ?>/components/homepageSections/header/Path.png" alt="arrow lost">
                <div id="campaign-dropdown-list">
                    <a href="https://www.tradingcup.com/en/2019-champions/">2019交易杯</a>
                    <a href="https://www.tradingcup.com/en/2018-champions/">2018交易杯</a>
                </div>
            </li>
        </ul>

    </div>
    <div class="header-right">
        <button class="enter-button">2020交易杯</button>
        <select name="language" id="language-switch">
            <option value="/zh">
                中文
            </option>
            <option value="/en">
                英文
            </option>
        </select>
    </div>
    <img src="./Shape.png" alt="" class="mobile-nav-btn">
    <div class="mobile-nav">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">News</a></li>
            <li id="dropdown-list-anchor">Past Champions <img src="./Path.png" alt="arrow lost">
                <div id="campaign-dropdown-list">
                    <a href="https://www.tradingcup.com/en/2019-champions/">2019交易杯</a>
                    <a href="https://www.tradingcup.com/en/2018-champions/">2018交易杯</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<script src="<?= $this->getThemePath() ?>/components/homepageSections/header/header1.js"></script>