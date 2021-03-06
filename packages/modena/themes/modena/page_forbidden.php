<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<?php if($c->getAttribute('disable_sub_page_banner') == true) : ?>
    <div class="hero-unit__spacer"></div>
<?php else : ?>
    <div class="hero-unit-sub-page margin-bottom-100">
        <div class="hero-unit-sub-page--overlay"></div>
        <div class="hero-unit-sub-page__content">
            <div class="grid-row">
                <div class="column-12 animated-parent animation-delay-1000">
                    <h2 class="animated animate__fade-in-down-short go">
                        <?php if ($c->getAttribute('disable_sub_page_name') == false) {
                            $page = Page::getCurrentPage();
                            echo $page->getCollectionName();
                        } ?>
                    </h2>
                    <p class="animated animate__fade-in-up-short go">
                        <?php if($c->getAttribute('sub_page_heading_hash_tag') == false) : ?>
                            <span class="text-bold sub-heading-hash">#</span>
                        <?php endif; ?>
                        <?php if ($c->getAttribute('sub_page_heading_sub_text')) {
                            $page = Page::getCurrentPage();
                            echo $c->getAttribute('sub_page_heading_sub_text');
                        } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<section>
    <div class="grid-container">
        <div class="grid-row">
            <div class="column-12">
                <h3></h3><?php echo h("Sorry, you do not have permission to access this page.") ?></h3>
                <a class="button button-primary" href="<?php echo DIR_REL; ?>/"><?php echo h("Return to homepage") ?></a>
            </div>
        </div>
    </div>
</section>

<?php if ($c->getAttribute('disable_sub_page_footer_margin') == false) : ?>

    <div class="padding-top-100"></div>

<?php endif; ?>

<?php $this->inc('elements/footer.php'); ?>
