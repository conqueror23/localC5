<?php

defined('C5_EXECUTE') or die("Access Denied.");

$c = Page::getCurrentPage();

if (!$content && is_object($c) && $c->isEditMode()) {

    ?>

    <div class="customized_content_block"><?=t('Empty Content Block.')?></div>

    <?php

} else {

    ?>

    <div class ='customized_content_block'>

        <?php
        echo $content;
        ?>

    </div>
<?php
}
?>
