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

            <ul class="margin-bottom-40 modena-sidebar--page-list">
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

                    <li>
                        <a href="<?php echo h($url) ?>" target="<?php echo h($target) ?>">
                            <?php echo h($title) ?>
                        </a>
                    </li>
            <?php } ?>
        </ul>
    <?php endif; ?>
