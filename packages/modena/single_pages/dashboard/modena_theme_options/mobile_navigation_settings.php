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

<form method="post" class="ensemble-ui-form" action="<?php echo $this->action('save_mobile_nav_settings'); ?>">
<?php echo $this->controller->token->output('save_mobile_nav_settings'); ?>

<fieldset>
    <div>
        <legend><?php  echo t('Mobile navigation options')?></legend>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('mobile_nav_width', 'Mobile navigation width'); ?>
                    <span class="help-block"><?php  echo t("Choose how wide you would like the mobile navigation menu to be (Default is 70%)"); ?></span>
                </div>
                <div class="col-md-6">
                    <div class="well text-center">
                        <?php  echo $form->number('mobile_nav_width', $mobile_nav_width); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('mobile_nav_arrow', 'Mobile navigation arrow'); ?>
                    <span class="help-block"><?php  echo t("Check to display an indicator arrow on menu items that have a sub menu"); ?></span>
                </div>
                <div class="col-md-1">
                    <div class="well text-center">
                        <?php  echo $form->checkbox('mobile_nav_arrow', 1, $mobile_nav_arrow); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('mobile_nav_center', 'Center mobile navigation'); ?>
                    <span class="help-block"><?php  echo t("Check to center the mobile navigation"); ?></span>
                </div>
                <div class="col-md-1">
                    <div class="well text-center">
                        <?php  echo $form->checkbox('mobile_nav_center', 1, $mobile_nav_center); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('mobile_nav_shadow', 'Mobile navigation shadow'); ?>
                    <span class="help-block"><?php  echo t("Check to hide the shadow on the mobile navigation container (Recommended if you are using the mobile navigation at 100% width)"); ?></span>
                </div>
                <div class="col-md-1">
                    <div class="well text-center">
                        <?php  echo $form->checkbox('mobile_nav_shadow', 1, $mobile_nav_shadow); ?>
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
