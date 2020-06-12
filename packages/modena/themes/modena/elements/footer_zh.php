<?php defined('C5_EXECUTE') or die("Access Denied."); 
    $pObj = Package::getByHandle('modena');
?>

<?php if($pObj->getConfig()->get('site_front_end.disable_backtotop.disable_backtotop') != true) : ?>
    <div class="back-to-top--floating"></div>
<?php endif; ?>
<footer class="background-color-2 padding-top-80 padding-bottom-40">
    <div class="grid-container">
        <div class="grid-row">
            <?php $footerColumns = $pObj->getConfig()->get('site_front_end.footer_columns.footer_columns');
                switch ($footerColumns) :
                    case '0': ?>
                        <div class="column-12">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 1');
                                $a->display();
                            ?>
                        </div>
                    <?php break; ?>
                    <?php case '1': ?>
                        <div class="column-6">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 1');
                                $a->display();
                            ?>
                        </div>
                        <div class="column-6">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 2');
                                $a->display();
                            ?>
                        </div>
                    <?php break; ?>
                    <?php case '2': ?> 
                        <div class="column-4">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 1');
                                $a->display();
                            ?>
                        </div>
                        <div class="column-4">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 2');
                                $a->display();
                            ?>
                        </div>
                        <div class="column-4">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 3');
                                $a->display();
                            ?>
                        </div>
                    <?php break; ?>
                    <?php case '3': ?>
                        <div class="column-3">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 1');
                                $a->display();
                            ?>
                        </div>
                        <div class="column-3">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 2');
                                $a->display();
                            ?>
                        </div>
                        <div class="column-3">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 3');
                                $a->display();
                            ?>
                        </div>
                        <div class="column-3">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 4');
                                $a->display();
                            ?>
                        </div>
                    <?php break; ?>
                    <?php case '4': ?>
                        <div class="column-4">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 1');
                                $a->display();
                            ?>
                        </div>
                        <div class="column-2 push-column-6">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 2');
                                $a->display();
                            ?>
                        </div>
                    <?php break; ?>
                    <?php default: ?>
                        <div class="column-4">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 1');
                                $a->display();
                            ?>
                        </div>
                        <div class="column-2 push-column-6">
                            <?php
                                $a = new GlobalArea('Footer ZhSite Column 2');
                                $a->display();
                            ?>
                        </div>
                    <?php break; ?>
            <?php endswitch; ?>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-row">
            <div class="column-12 copyright-content <?php echo $pObj->getConfig()->get('site_front_end.copyright_position.copyright_position'); ?> ">
                <div class="copyright-border margin-bottom-5 margin-top-30"></div>
                <p>
                    <!-- <span class="copyright"><?php echo h("Copyright") ?> &copy; <?php echo date('Y'); ?>&nbsp;</span>  -->
                        <?php 
                            $copyrightNotice = $pObj->getConfig()->get('site_front_end.copyright_notice.copyright_notice');
                            // if ($copyrightNotice) {
                            //     echo $copyrightNotice;
                            // }else{
                            //     echo t('Your company name here');
                            // } 
                            echo t('disclaimer-line1')
                        ?>

                        <?php if($pObj->getConfig()->get('site_front_end.login_link.login_link')) : ?>
                            &nbsp; | &nbsp;
                        <?php endif; ?>
                    
                        <?php $loginLink = $pObj->getConfig()->get('site_front_end.login_link.login_link');
                            if ($loginLink == true) {
                                echo Core::make('helper/navigation')->getLogInOutLink();
                        } ?>

                        <?php if($pObj->getConfig()->get('site_front_end.credit_link.credit_link')) : ?>
                            &nbsp; | &nbsp;
                        <?php endif; ?>

                        <?php $creditLink = $pObj->getConfig()->get('site_front_end.credit_link.credit_link');
                            if ($creditLink == true) {
                                echo t('Built with <a href="http://concrete5.com" target="_blank">Concrete5</a> CMS');
                        } ?>
                </p>
                <p>
                    <?php
                        echo t('disclaimer-line2')
                    ?>
                </p>
                <p>
                    <?php echo t('disclaimer-line3')?> <a href="/application/themes/customised/components/homepageSections/footer/2020-trading-cup-terms-and-conditions-english.pdf" target='_blank'>
                    <?php
                    echo t('Terms of use Acy')
                    ?>
                    </a>
                </p>

            </div>
        </div>
    </div>
</footer>
    </div>
        <script type="text/javascript" src="<?php echo $this->getThemePath() ?>/js/main-min.js"></script>
        <script type="text/javascript" src="<?php echo $this->getThemePath() ?>/js/scripts-min.js"></script>
        <?php View::element('footer_required'); ?>
    </body>
</html>
