<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();

$footerSocial = new GlobalArea('Footer Social');
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();

$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>

<footer id="footer-theme">
    <div class="footer-wrapper section-content-wrapper">
        <div class="footer-tab">
            <img src="./logo.png" alt="">
            <div class="footer-nav">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">2019 Champion</a>
                    </li>
                    <li>
                        <a href="">2018 Champion</a>
                    </li>
                </ul>
            </div>
            <div class="social-media">
                <div>
                    twitter
                </div>
                <div>
                    facebook
                </div>
                <div>
                    snapshot
                </div>
            </div>
        </div>
        <div class="footer-description">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui soluta cupiditate iure quaerat dolorum
                ratione?
                Harum maiores explicabo sed saepe voluptatem laboriosam. Voluptates dolor magni perspiciatis cumque
                voluptatum, est earum vero vel aperiam tempore maiores ipsum tenetur eaque distinctio itaque suscipit
                deleniti, quod iusto omnis laboriosam? Dolores cumque iure corporis reiciendis accusantium, culpa ullam,
                et,
                aut quibusdam ipsum libero porro eum temporibus? Harum, distinctio quam veniam quas impedit magni.
                Facilis
                quasi, provident consectetur, impedit porro dolore rem ipsam ipsa suscipit delectus aut deleniti quam
                eos
                dolorem. Aspernatur assumenda et excepturi laudantium magni? Molestiae maiores dignissimos dolorem a
                molestias doloribus veniam!
            </p>

        </div>
    </div>
</footer>

<footer id="concrete5-brand">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span><?php echo t('Built with <a href="http://www.concrete5.org" class="concrete5" rel="nofollow">concrete5</a> CMS.') ?></span>
                <span class="pull-right">
                    <?php echo Core::make('helper/navigation')->getLogInOutLink() ?>
                </span>
                <span id="ccm-account-menu-container"></span>
            </div>
        </div>
    </div>
</footer>

<?php $this->inc('components/footer_bottom.php'); ?>
