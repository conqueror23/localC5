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
</style>

<form method="post" class="ensemble-ui-form" action="<?php echo $this->action('blog_save_settings'); ?>">
<?php echo $this->controller->token->output('blog_save_settings'); ?>

<fieldset>
    <div>
        <legend><?php  echo t('Blog options')?></legend>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('blog_sidebar', 'Blog Post Sidebar'); ?>
                    <span class="help-block"><?php echo t("Decide where you would like the sidebar on your blog post pages."); ?></span>
                </div>
                <div class="col-md-6">
                    <div class="well text-center">
                        <?php $positionOptions = array('left' => t('Left'),'right' => t('Right'),'none' => t('None')) ?>
                        <?php echo $form->select('blog_sidebar', $positionOptions, $blog_sidebar); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <?php echo $form->label('blog_columns', 'Blog columns (Masonry blog only)'); ?>
                    <span class="help-block"><?php echo t("Choose how many columns you would like to display your masonry blog"); ?></span>
                </div>
                <div class="col-md-6">
                    <div class="well text-center">
                        <?php $blogColumns = array('isotope-width-6' => t('2'),'isotope-width-4' => t('3'),'isotope-width-3' => t('4')) ?>
                        <?php echo $form->select('blog_columns', $blogColumns, $blog_columns); ?>
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
