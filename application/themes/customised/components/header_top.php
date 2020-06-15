<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta data-n-head="true" data-hid="og:image" property="og:image" content="https://www.tradingcup.com/application/themes/customised/images/ogImage.jpg">
    <!-- google tag manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-M649WJD');</script>

    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/css/main.css">


    <!--    pre request packages -->
    <script src="<?php echo $view->getThemePath() ?>/components/homepageSections/subscribeForm/getCookies.js"
            type="text/javascript"></script>
            
     <!-- external links   -->
    <script src="https://apiform.crm.zerologix.com/js/external/acyform.bundle.js" type="text/javascript" ></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fetchival/0.3.2/index.min.js" integrity="sha256-JAUhVrURjJBWcWw4rjX42p4JltYpCS3kjpU7oxpuEjY=" crossorigin="anonymous"></script>

    <!-- end of pre request packages-->



    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/header/header.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/footer/footer.css">

    <!--    add modules css files-->

    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/howtoApply/how_to_apply.css">
    <!--    new css not found?-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo $view->getThemePath() ?>/components/homepageSections/news/news20200615.css">
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
    <!-- <?php echo $html->css($view->getStylesheet('main.less')) ?> -->

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
<script> var lang = "<?php echo Localization::activeLanguage() ?>"; </script>

<!-- google tag manager -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M649WJD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<div class="<?php echo $c->getPageWrapperClass() ?>">
