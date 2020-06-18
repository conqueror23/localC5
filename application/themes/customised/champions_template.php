<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<html lang="en">
<head>
    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>

        <?php
            $a = new Area('script-section');
            $a->display($c);
            ?>
</head>

<body>

    <div class="<?php echo $c->getPageWrapperClass() ?>">

        <?php
            $a = new Area('main-body');
            $a->display($c);
            ?>
                <?php
            $a = new Area('footer-section');
            $a->display($c);
            ?>

    <?php View::element('footer_required'); ?>
</body>
    
</html>