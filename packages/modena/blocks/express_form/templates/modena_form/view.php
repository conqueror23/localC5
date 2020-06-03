<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="ccm-block-express-form">
    <?php if (isset($renderer)) { ?>
        <div class="ccm-form">
            <a name="form<?=$bID?>"></a>

            <?php if (isset($success)) { ?>
                <div class="alert alert-success contact-form-success">
                    <?=$success?>
                </div>
            <?php } ?>

            <?php if (isset($error) && is_object($error)) { ?>
                <div class="alert alert-danger contact-form-danger">
                    <?=$error->output()?>
                </div>
            <?php } ?>

            <form enctype="multipart/form-data" class="form-stacked contact-form" method="post" action="<?=$view->action('submit')?>#form<?=$bID?>">
                <?php print $renderer->render();

                    if ($displayCaptcha) {
                        $captcha = \Core::make('helper/validation/captcha'); ?>
                        <div class="form-group captcha">
                            <?php
                            $captchaLabel = $captcha->label();
                                if (!empty($captchaLabel)) { ?>
                                    <label class="control-label captcha-label">
                                        <?php echo $captchaLabel;?>
                                    </label>
                                <?php } ?>
                            <div><?php  $captcha->display(); ?></div>
                            <div><?php  $captcha->showInput(); ?></div>
                        </div>
                    <?php } ?>

                <div class="form-actions">
                    <button type="submit" name="Submit" class="contact-form-submit"><?=t($submitLabel)?></button>
                </div>
            </form>
        </div>
    <?php } else { ?>
        <p><?=t('This form is unavailable.')?></p>
    <?php } ?>
</div>