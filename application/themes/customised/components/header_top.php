<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/css/main.css">

    <!--    pre request packages -->
    <script src="<?php echo $view->getThemePath() ?>/components/homepageSections/subscribeForm/getCookies.js"
            type="text/javascript"></script>

     <!-- external links   -->
    <script src="https://apiform.crm.zerologix.com/js/external/acyform.bundle.js" type="text/javascript" ></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous" defer></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.0.0/fetch.min.js.map" crossorigin="anonymous" defer async></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fetchival/0.3.2/index.min.js" integrity="sha256-JAUhVrURjJBWcWw4rjX42p4JltYpCS3kjpU7oxpuEjY=" crossorigin="anonymous"></script>


    <!-- end of pre request packages-->

    <script src="<?php echo $view->getThemePath() ?>/js/globalActions.js"></script>

    <?php //echo $view->getThemePath() ?><!--/css/header-modified.css">-->
    <?php //echo $view->getThemePath() ?><!--/css/footer-modified.css">-->

    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/header/header.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/footer/footer.css">

    <!--    add modules css files-->

    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/howtoApply/how_to_apply.css">
    <!--    new css not found?-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/news/news.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/subscribeForm/subscribeForm.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/top2020Qualifiers/top_2020_qualifiers.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/topTraders/top_traders.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/tradingcup2020/tradingcup_2020.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/whytradeAcy/why_trade_acy.css">

     <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/socialMedia/socialMedia_zh.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/socialMedia/socialMedia.css">

    <!--    Bosco`s part -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/sponsor/assets/common.css">

    <link rel="stylesheet"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/highlight2019/assets/common001.css">


    <!--end of modules css    -->
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath() ?>/css/basic-default-page001.css">
    <?php echo $html->css($view->getStylesheet('main.less')) ?>

    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style');
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            );
            document.querySelector('head').appendChild(msViewportStyle);
        }
    </script>
</head>
<body>

<div class="<?php echo $c->getPageWrapperClass() ?>">
