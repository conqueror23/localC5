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

<form method="post" class="ensemble-ui-form" action="<?php echo $this->action('save_header_settings'); ?>">
<?php echo $this->controller->token->output('save_header_settings'); ?>

<fieldset>
    <div>
        <legend><?php  echo t('Header options')?></legend>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('static_header', 'Fixed position header'); ?>
                    <span class="help-block"><?php  echo t("Check to make the site header stay at the top of the screen when the page is scrolled."); ?></span>
                </div>
                <div class="col-md-1">
                    <div class="well text-center">
                        <?php  echo $form->checkbox('static_header', 1, $static_header); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('static_header_height', 'Header height'); ?>
                    <span class="help-block"><?php  echo t("This option adjusts the height of the site header, before it is scrolled, height is in pixels. (Default is 100px)"); ?></span>
                </div>
                <div class="col-md-6">
                    <div class="well text-center">
                        <?php  echo $form->number('static_header_height', $static_header_height); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('static_header_height_scroll', 'Header height on scroll'); ?>
                    <span class="help-block"><?php  echo t("This option adjusts the height of the site header, after it is scrolled, height is in pixels.(Only applicable if you are using the fixed position header, default is 70px)"); ?></span>
                </div>
                <div class="col-md-6">
                    <div class="well text-center">
                        <?php  echo $form->number('static_header_height_scroll', $static_header_height_scroll); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('disable_search', 'Header Search'); ?>
                    <span class="help-block"><?php  echo t("Check to hide the search icon and divider line to the right of the navigation bar."); ?></span>
                </div>
                <div class="col-md-1">
                    <div class="well text-center">
                        <?php  echo $form->checkbox('disable_search', 1, $disable_search); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('disable_guide_header', 'Guide Header'); ?>
                    <span class="help-block"><?php  echo t("Check to use the guide header. If you are using white text on your header and navigation with the \"fixed position header\" activated, the guide header can be used so you can see them against a white background."); ?></span>
                </div>
                <div class="col-md-1">
                    <div class="well text-center">
                        <?php  echo $form->checkbox('disable_guide_header', 1, $disable_guide_header); ?>
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
