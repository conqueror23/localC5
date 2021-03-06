<?php defined('C5_EXECUTE') or die("Access Denied.");

$c = Page::getCurrentPage();

/** @var \Concrete\Core\Utility\Service\Text $th */
$th = Core::make('helper/text');
/** @var \Concrete\Core\Localization\Service\Date $dh */
$dh = Core::make('helper/date');
$author = $c->getVersionObject()->getVersionAuthorUserName();


if ($c->isEditMode() && $controller->isBlockEmpty()) : ?>

    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Page List Block.') ?></div>

        <?php else: ?>

            <?php if (isset($pageListTitle) && $pageListTitle) : ?>
                <div class="grid-row">
                    <div class="column-12">
                        <h5><?php echo h($pageListTitle) ?></h5>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($rssUrl) && $rssUrl) : ?>
                <a href="<?php echo $rssUrl ?>" target="_blank" class="ccm-block-page-list-rss-feed">
                    <i class="fa fa-rss"></i>
                </a>
            <?php endif; ?>


                <?php $includeEntryText = false;
                if (
                    (isset($includeName) && $includeName)
                    ||
                    (isset($includeDescription) && $includeDescription)
                    ||
                    (isset($useButtonForLink) && $useButtonForLink)
                ) {
                    $includeEntryText = true;
                }

                foreach ($pages as $page) {

                // Prepare data for each page being listed...
                $buttonClasses = 'ccm-block-page-list-read-more';
                $entryClasses = 'blog-teaser margin-bottom-100';
                $title = $page->getCollectionName();
                if ($page->getCollectionPointerExternalLink() != '') {
                    $url = $page->getCollectionPointerExternalLink();
                    if ($page->openCollectionPointerExternalLinkInNewWindow()) {
                        $target = '_blank';
                    }
                } else {
                    $url = $page->getCollectionLink();
                    $target = $page->getAttribute('nav_target');
                }
                $target = empty($target) ? '_self' : $target;
                $description = $page->getCollectionDescription();
                $description = $controller->truncateSummaries ? $th->wordSafeShortText($description, $controller->truncateChars) : $description;
                $thumbnail = false;
                if ($displayThumbnail) {
                    $thumbnail = $page->getAttribute('thumbnail');
                }
                if (is_object($thumbnail) && $includeEntryText) {
                    $entryClasses = 'blog-teaser margin-bottom-100';
                }

                $date = $dh->formatDateTime($page->getCollectionDatePublic(), true);

                //Other useful page data...

                //$last_edited_by = $page->getVersionObject()->getVersionAuthorUserName();

                /* DISPLAY PAGE OWNER NAME
                 * $page_owner = UserInfo::getByID($page->getCollectionUserID());
                 * if (is_object($page_owner)) {
                 *     echo $page_owner->getUserDisplayName();
                 * }
                 */

                /* CUSTOM ATTRIBUTE EXAMPLES:
                 * $example_value = $page->getAttribute('example_attribute_handle', 'display');
                 *
                 * When you need the raw attribute value or object:
                 * $example_value = $page->getAttribute('example_attribute_handle');
                 */

                /* End data preparation. */

                /* The HTML from here through "endforeach" is repeated for every item in the list... */ ?>

                <div class="<?php echo $entryClasses ?>">

                    <?php if (is_object($thumbnail)) : ?>
                        <div class="blog-teaser__image margin-bottom-30">
                            <div class="overlay">
                                <div class="overlay__background"></div>
                                <div class="overlay__content text-center text-color-2">
                                    <span class="overlay__content-heading">
                                        <a href="<?php echo h($url) ?>" target="<?php echo h($target) ?>"><?php echo h($title) ?></a>
                                    </span>
                                    <span class="overlay__content-text">
                                        <a href="<?php echo h($url) ?>" target="<?php echo h($target) ?>"><?php echo h("Read this article") ?></a>
                                    </span>
                                </div>
                                    <?php
                                        $img = Core::make('html/image', array($thumbnail));
                                        $tag = $img->getTag();
                                        $tag->addClass('overlay__image overlay__image--skew');
                                        echo $tag;
                                    ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($includeEntryText) : ?>

                        <?php if (isset($includeName) && $includeName) : ?>

                            <?php if (isset($useButtonForLink) && $useButtonForLink) : ?>
                                <h5><?php echo h($title); ?></h5>
                            <?php else: ?>
                                <h5><a href="<?php echo h($url) ?>" target="<?php echo h($target) ?>"><?php echo h($title) ?></a></h5>
                            <?php endif; ?>

                        <?php endif; ?>

                    <div class="blog-teaser__meta margin-bottom-10">
                        <ul class="blog-teaser__meta-list">

                            <li class="blog-teaser__meta-list-item">
                                <i class="ion-android-calendar"></i>
                                <?php if (isset($includeDate) && $includeDate) : ?>
                                    <?php echo h($date) ?>
                                <?php endif; ?>
                            </li>

                            <li class="blog-teaser__meta-list-item">
                                <i class="ion-compose"></i>
                                    <?php $page_owner = UserInfo::getByID($page->getCollectionUserID());
                                        if (is_object($page_owner)) {
                                            echo $page_owner->getUserDisplayName();
                                    } ?>
                            </li>

                        </ul>
                    </div>

                    <div class="blog-teaser__description">
                        <p>
                            <?php if (isset($includeDescription) && $includeDescription) : ?>
                                <?php echo h($description) ?>
                            <?php endif; ?>
                        </p>
                        <span class="blog-teaser__read-more">
                            <a href="<?php echo h($url) ?>" target="<?php echo h($target) ?>" class="<?php echo h($buttonClasses) ?>"><?php echo h(t("Read more...")) ?></a>
                        </span>
                    </div>
                <?php endif; ?>

                </div>

                <?php } ?>

            <?php if (count($pages) == 0) { ?>
                <div class="ccm-block-page-list-no-pages"><?php echo h(t($noResultsMessage)) ?></div>
            <?php } ?>

        <?php if ($showPagination) : ?>
            <?php echo $pagination; ?>
        <?php endif; ?>

    <?php endif; ?>
