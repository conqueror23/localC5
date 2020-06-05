<div class="section-content-wrapper sub-form-bk">
    <div class="subscribe-form-wrapper">
        <div id="form-section">
            <div class="form-left">
                <h2>
                    订阅交易杯参赛者访谈
                </h2>
                <p>
                    获取最新的参赛者交易策略
                </p>
            </div>
            <div class="form-right">
                <form action="#" id="subscribe-form" name='subscribe-form'>
                    <div class="form-inputs">
                        <input type="text" name='first_name' placeholder="名">
                        <input type="text" name='last_name' placeholder="姓">
                        <select name="country" id="country-dropdown" aria-placeholder="国家"></select>
                        <input type="email" name="email" placeholder="邮箱">
                    </div>
                    <button class="enter-button">
                        注册
                    </button>
                </form>
            </div>
        </div>
        <div id="form-after">
            <h2>
                感谢您的注册
            </h2>
            <p>
                及时查看您的邮件以获取排名领先参赛者的交易策略。
            </p>
        </div>
    </div>
</div>
<div id="error-msg">*表单提交出错 请稍后再试*</div>
<script src="<?= $this->getThemePath()?>/components/homepageSections/subscribeForm/getZhCountryList.js"></script>