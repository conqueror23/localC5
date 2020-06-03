<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

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
</style>

<form method="post" class="ensemble-ui-form" action="<?php echo $this->action('site_save_settings'); ?>">
<?php echo $this->controller->token->output('site_save_settings'); ?>

<fieldset>
    <div>
        <legend><?php  echo t('General site options')?></legend>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('site_width', 'Site width'); ?>
                    <span class="help-block"><?php echo t("Decide how wide the site will be (Default is 1240px)."); ?></span>
                </div>
                <div class="col-md-6">
                    <div class="well text-center">
                        <?php  echo $form->number('site_width', $site_width); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('social_button_shape', 'Social media button shape'); ?>
                    <span class="help-block"><?php echo t("Decide what shape you would like your sites social media sharing buttons."); ?></span>
                </div>
                <div class="col-md-6">
                    <div class="well text-center">
                        <?php $buttonShape = array('square' => t('Square'),'round' => t('Round')) ?>
                        <?php echo $form->select('social_button_shape', $buttonShape, $social_button_shape); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('disable_backtotop', 'Page pre-loader'); ?>
                    <span class="help-block"><?php  echo t("Check to disable the page pre-loader from all pages, your visitors will no longer see the page loading animation when they visit a page."); ?></span>
                </div>
                <div class="col-md-1">
                    <div class="well text-center">
                        <?php  echo $form->checkbox('disable_preloader', 1, $disable_preloader); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('disable_backtotop', 'Back to top button'); ?>
                    <span class="help-block"><?php  echo t("Check to disable the back to top button from your site."); ?></span>
                </div>
                <div class="col-md-1">
                    <div class="well text-center">
                        <?php  echo $form->checkbox('disable_backtotop', 1, $disable_backtotop); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('use_us_date', 'Use US Date format'); ?>
                    <span class="help-block"><?php echo t("Check to use the US standard date format (Month/Day/Year) anywhere the date is displayed"); ?></span>
                </div>
                <div class="col-md-1">
                    <div class="well text-center">
                        <?php  echo $form->checkbox('use_us_date', 1, $use_us_date); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</fieldset>

    <div class="ccm-dashboard-form-actions-wrapper">
        <div class="ccm-dashboard-form-actions">
            <button class="pull-right btn btn-success" type="submit" ><?php echo t('Save settings')?></button>
        </div>
    </div>

</form>
