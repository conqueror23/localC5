<?php defined('C5_EXECUTE') or die("Access Denied.");
    $pObj = Package::getByHandle('modena');
?>
<!doctype html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php View::element('header_required', array('pageTitle' => $pageTitle));?>
    <?php  echo $html->css($view->getStylesheet('main.less'))?>
    <?php if($pObj->getConfig()->get('site_front_end.use_google_font.use_google_font') == true) : ?>
        <link href="https://fonts.googleapis.com/css?family=<?php echo $pObj->getConfig()->get('site_front_end.main_google_font.main_google_font'); ?>:300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=<?php echo $pObj->getConfig()->get('site_front_end.heading_google_font.heading_google_font'); ?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=<?php echo $pObj->getConfig()->get('site_front_end.nav_google_font.nav_google_font'); ?>" rel="stylesheet" type="text/css">
    <?php endif; ?>
</head>
<body class="body">
    <div class="<?php echo $c->getPageWrapperClass()?>">
    <?php if($pObj->getConfig()->get('site_front_end.disable_preloader.disable_preloader') != true) : ?>
        <div class="page-pre-loader">
            <div class="page-pre-loader__container">
                <div class="page-pre-loader__effect"></div>
            </div>
        </div>
    <?php endif; ?>
        <?php  global $u;
            $u = new User();
                if (($u->isRegistered()) || $c->isEditMode()) { ?>
                    <style media="screen">
                        .ccm-page .primary-header--fixed-nav {
                            top: 48px;
                            overflow: visible !important;
                        }
                    </style>
        <?php } ?>
    <?php $this->inc('elements/styles.php'); ?>

<header class="primary-header <?php
    $staticHeader = $pObj->getConfig()->get('site_front_end.static_header.static_header', 1);
        if ($staticHeader == true && !$c->isEditMode()) {
            echo "primary-header--fixed-nav";
    } ?> 
    <?php
    $guideHeader = $pObj->getConfig()->get('site_front_end.disable_guide_header.disable_guide_header', 1);
        if($guideHeader == true && $c->isEditMode()) {
            echo "primary-header--guide-header";
        }?>
    ">

    <div class="grid-container">
        <div class="grid-row">
            <div class="column-12">
            <?php $disableSearch = $pObj->getConfig()->get('site_front_end.disable_search.disable_search');
                if ($disableSearch == false ) : ?>
                    <div class="primary-header--search float-right">
                        <div class="primary-header--search-inner">
                            <i class="ion-ios-search-strong"></i>
                        </div>
                    </div>
                <?php endif;?>
                <div class="primary-header__logo float-left">
                    <h1 class="primary-header__h1">
                        <?php
                            $a = new GlobalArea('Header ZhSite Title');
                            $a->display();
                        ?>
                    </h1>
                </div>
                <button class="mobile-nav-toggle float-right">
                    <span></span>
                </button>
                <nav class="desktop-nav float-right">
                    <?php
                        $a = new GlobalArea('Header ZhSite Navigation');
                        $a->setCustomTemplate("autonav", "main-nav");
                        $a->display();
                    ?>
                </nav>
                <span class="border-bottom"></span>
            </div>
        </div>
    </div>
    <div class="primary-header--search-dropdown">
        <div class="grid-container">
            <div class="grid-row">
            </div>
        </div>
    </div>
</header>
