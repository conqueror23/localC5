<script src="<?= $this->getThemePath() ?>/components/homepageSections/header/header20200615.js"></script>
<script>
var sideMenu = new PromoLiveAccountSideMenu("交易杯报名", "仅需几步即可在ACY创建真实交易账户", "zh");
$(document).ready(function (){
    $(".open-form").on("click", function () {
        sideMenu.openNav();
        return false;
    });
})
</script>
<script src="<?= $this->getThemePath() ?>/js/globalActions.js"></script>