<?php defined('C5_EXECUTE') or die(_("Access Denied."));
// print Core::make('helper/concrete/ui')->tabs(array(
//     array('header-settings', t('Header settings'), true),
//     array('footer-settings', t('Footer Settings')),

// ));
?>
<style media="screen">
    .ensemble-ui-form {
        width: 100%;
    }
    .ccm-ui .ensemble-ui-form .form-group {
        margin-bottom: 40px;
        padding-bottom: 40px;
        display: block;
        border-bottom: 1px solid #e5e5e5;
    }

.font-select {
  font-size: 16px;
  width: 300px;
  position: relative;
  display: inline-block;
  zoom: 1;
  *display: inline;
}

.font-select .fs-drop {
  background: #fff;
  border: 1px solid #aaa;
  border-top: 0;
  position: absolute;
  top: 32px;
  left: 0;
  -webkit-box-shadow: 0 4px 5px rgba(0,0,0,.15);
  -moz-box-shadow   : 0 4px 5px rgba(0,0,0,.15);
  -o-box-shadow     : 0 4px 5px rgba(0,0,0,.15);
  box-shadow        : 0 4px 5px rgba(0,0,0,.15);
  z-index: 999;
}

.font-select > a {
  background-color: #fff;
  /* background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eeeeee), color-stop(0.5, white));
  background-image: -webkit-linear-gradient(center bottom, #eeeeee 0%, white 50%);
  background-image: -moz-linear-gradient(center bottom, #eeeeee 0%, white 50%);
  background-image: -o-linear-gradient(top, #eeeeee 0%,#ffffff 50%);
  background-image: -ms-linear-gradient(top, #eeeeee 0%,#ffffff 50%); */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#ffffff',GradientType=0 );
  background-image: linear-gradient(top, #eeeeee 0%,#ffffff 50%);
  -webkit-border-radius: 4px;
  -moz-border-radius   : 4px;
  border-radius        : 4px;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
  border: 1px solid #e3e3e3;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  position: relative;
  height: 32px;
  line-height: 32px;
  padding: 0 0 0 8px;
  color: #444;
  text-decoration: none;
}

.font-select > a span {
  margin-right: 26px;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  line-height: 1.8;
  -o-text-overflow: ellipsis;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
  cursor: pointer;
}

.font-select > a div {
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius   : 0 4px 4px 0;
  border-radius        : 0 4px 4px 0;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
  background: #efefef;
  /* background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #ccc), color-stop(0.6, #eee));
  background-image: -webkit-linear-gradient(center bottom, #ccc 0%, #eee 60%);
  background-image: -moz-linear-gradient(center bottom, #ccc 0%, #eee 60%);
  background-image: -o-linear-gradient(bottom, #ccc 0%, #eee 60%);
  background-image: -ms-linear-gradient(top, #cccccc 0%,#eeeeee 60%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cccccc', endColorstr='#eeeeee',GradientType=0 );
  background-image: linear-gradient(top, #cccccc 0%,#eeeeee 60%); */
  border-left: 1px solid #e3e3e3;
  position: absolute;
  right: 0;
  top: 0;
  display: block;
  height: 100%;
  width: 18px;
}

.font-select > a div b {
  /* background: url('fs-sprite.png') no-repeat 0 1px; */
  display: block;
  width: 100%;
  height: 100%;
  cursor: pointer;
}

.font-select > a div b:before {
    content: "\f078";
    font-family: "Fontawesome";
    font-size: 12px;
    color: #bbb;
    position: relative;
    top: -2px;
}

.font-select .fs-drop {
  -webkit-border-radius: 0 0 4px 4px;
  -moz-border-radius   : 0 0 4px 4px;
  border-radius        : 0 0 4px 4px;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
}

.font-select .fs-results {
  margin: 0 4px 4px 0;
  max-height: 190px;
  width: 294px;
  padding: 0 0 0 4px;
  position: relative;
  overflow-x: hidden;
  overflow-y: auto;
}

.font-select .fs-results li {
  line-height: 80%;
  padding: 7px 7px 8px;
  margin: 0;
  list-style: none;
  font-size: 18px;
}

.font-select .fs-results li.active {
  background: #3875d7;
  color: #fff;
  cursor: pointer;
}
.font-select .fs-results li em {
  background: #feffde;
  font-style: normal;
}

.font-select .fs-results li.active em {
  background: transparent;
}

.font-select-active > a {
  -webkit-box-shadow: 0 0 5px rgba(0,0,0,.3);
  -moz-box-shadow   : 0 0 5px rgba(0,0,0,.3);
  -o-box-shadow     : 0 0 5px rgba(0,0,0,.3);
  box-shadow        : 0 0 5px rgba(0,0,0,.3);
  border: 1px solid #5897fb;
}

.font-select-active > a {
  border: 1px solid #aaa;
  -webkit-box-shadow: 0 1px 0 #fff inset;
  -moz-box-shadow   : 0 1px 0 #fff inset;
  -o-box-shadow     : 0 1px 0 #fff inset;
  box-shadow        : 0 1px 0 #fff inset;
  background-color: #eee;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, white), color-stop(0.5, #eeeeee));
  background-image: -webkit-linear-gradient(center bottom, white 0%, #eeeeee 50%);
  background-image: -moz-linear-gradient(center bottom, white 0%, #eeeeee 50%);
  background-image: -o-linear-gradient(bottom, white 0%, #eeeeee 50%);
  background-image: -ms-linear-gradient(top, #ffffff 0%,#eeeeee 50%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eeeeee',GradientType=0 );
  background-image: linear-gradient(top, #ffffff 0%,#eeeeee 50%);
  -webkit-border-bottom-left-radius : 0;
  -webkit-border-bottom-right-radius: 0;
  -moz-border-radius-bottomleft : 0;
  -moz-border-radius-bottomright: 0;
  border-bottom-left-radius : 0;
  border-bottom-right-radius: 0;
}

.font-select-active > a div {
  background: transparent;
  border-left: none;
}

.font-select-active > a div b {
  background-position: -18px 1px;
}
</style>

<form method="post" class="ensemble-ui-form" action="<?php echo $this->action('google_fonts_save_settings'); ?>">
<?php echo $this->controller->token->output('google_fonts_save_settings'); ?>

<fieldset>
    <div>
        <legend><?php  echo t('Google fonts')?></legend>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('use_google_font', 'Use Google fonts'); ?>
                    <span class="help-block"><?php echo t("Check to use Google fonts on your site, this option will override all font selections made in the theme customizer. Please note, due to the large amount of fonts the font dropdown menus may take a short while to display the font previews."); ?></span>
                </div>
                <div class="col-md-1">
                    <div class="well text-center">
                        <?php  echo $form->checkbox('use_google_font', 1, $use_google_font); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('main_google_font', 'Main site font'); ?>
                    <span class="help-block"><?php echo t("Choose a Google font to use for your main content."); ?></span>
                </div>
                <div class="col-md-6">
                    <div class="well text-center">
                        <?php  echo $form->text('main_google_font', $main_google_font); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('heading_google_font', 'Headings font'); ?>
                    <span class="help-block"><?php echo t("Choose a Google font to use for your sites headings, this will be used for headings H1 to H6."); ?></span>
                </div>
                <div class="col-md-6">
                    <div class="well text-center">
                        <?php  echo $form->text('heading_google_font', $heading_google_font); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('nav_google_font', 'Navigation font'); ?>
                    <span class="help-block"><?php echo t("Choose a Google font to use for your sites navigation, this will be used your main and mobile navigation."); ?></span>
                </div>
                <div class="col-md-6">
                    <div class="well text-center">
                        <?php  echo $form->text('nav_google_font', $nav_google_font); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</fieldset>

<script>
    $(document).ready(function() {
        $('#main_google_font').mainfontselect();
        $('#heading_google_font').fontselect();
        $('#nav_google_font').fontselect();
    });
</script>

    <div class="ccm-dashboard-form-actions-wrapper">
        <div class="ccm-dashboard-form-actions">
            <button class="pull-right btn btn-success" type="submit" ><?php echo t('Save settings')?></button>
        </div>
    </div>

</form>
