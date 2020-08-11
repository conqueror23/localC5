<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

</div>
<script src="<?php echo $view->getThemePath();?>/components/homepageSections/highlight2019/assets/index.js"></script>
<script src="<?php echo $view->getThemePath() ?>/js/globalActions.js"></script>
<script src="<?= $this->getThemePath()?>/components/homepageSections/subscribeForm/getCountryList-9c3e5.js"></script>
<?php if(Localization::activeLanguage() ==='en'){ ?>
<script src="<?= $this->getThemePath() ?>/components/homepageSections/subscribeForm/submitSub.js"></script>
<script src="<?= $this->getThemePath() ?>/components/homepageSections/subscribeForm/getCountryDropDownList-9c3e5.js"></script>
<?php }?>

<!--<script src="--><?//= $this->getThemePath() ?><!--/components/homepageSections/highlight2019/assets/index.js"></script>-->
<?php View::element('footer_required'); ?>

</body>
</html>
