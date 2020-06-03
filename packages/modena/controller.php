<?php
namespace Concrete\Package\Modena;

use Concrete\Core\Page\Single as SinglePage;
use Concrete\Core\Page\Page;
use Package;
use Concrete\Package\Modena\Src\EnsembleGridFramework;
use Core;
use PageTemplate;
use PageTheme;
use Loader;
use PageType;
use Config;
use BlockType;
use BlockTypeSet;
use FileImporter;
use \Concrete\Core\Attribute\Type as AttributeType;
use Concrete\Attribute\Select;
use Concrete\Attribute\Select\Option as SelectAttributeTypeOption;

use \Concrete\Core\Tree\Type\Topic;
use \Concrete\Core\Attribute\Key\CollectionKey as CollectionAttributeKey;
use \Concrete\Core\Backup\ContentImporter;

defined('C5_EXECUTE') or die('Access Denied.');

if (!function_exists('compat_is_version_8')) {
    function compat_is_version_8() {
        return interface_exists('\Concrete\Core\Export\ExportableInterface');
    }
}

class Controller extends Package
{
    protected $pkgHandle = 'modena';
    protected $appVersionRequired = '5.7.1';
    protected $pkgVersion = '1.1.8';
    protected $pkgAllowsFullContentSwap = true;

    public function getPackageName()
    {
        return t("Modena Theme");
    }

    public function getPackageDescription()
    {
        return t("A stylish, modern, multi-use Concrete5 theme");
    }

    public function swapContent($options)
    {
        if ($this->validateClearSiteContents($options)) {
            \Core::make('cache/request')->disable();

            $pl = new PageList();
            $pages = $pl->getResults();
            foreach ($pages as $c) {
                $c->delete();
            }

            $fl = new FileList();
            $files = $fl->getResults();
            foreach ($files as $f) {
                $f->delete();
            }

            $sl = new StackList();
            foreach ($sl->get() as $c) {
                $c->delete();
            }

            $home = Page::getByID(HOME_CID);
            $blocks = $home->getBlocks();
            foreach ($blocks as $b) {
                $b->deleteBlock();
            }

            $pageTypes = PageType::getList();
            foreach ($pageTypes as $ct) {
                $ct->delete();
            }

            if (is_dir($this->getPackagePath() . '/content_files')) {
                $ch = new ContentImporter();
                $computeThumbnails = true;
                if ($this->contentProvidesFileThumbnails()) {
                    $computeThumbnails = false;
                }
                $ch->importFiles($this->getPackagePath() . '/content_files', $computeThumbnails);
            }

            $ci = new ContentImporter();
            $ci->importContentFile($this->getPackagePath() . '/content.xml');

            \Core::make('cache/request')->enable();
        }
    }

    public function install()
    {
        $pkg = parent::install();
        $theme = PageTheme::add('modena', $pkg);
        SinglePage::add('/dashboard/modena_theme_options/header_settings', $pkg);
        SinglePage::add('/dashboard/modena_theme_options/footer_settings', $pkg);
        SinglePage::add('/dashboard/modena_theme_options/navigation_settings', $pkg);
        SinglePage::add('/dashboard/modena_theme_options/mobile_navigation_settings', $pkg);
        SinglePage::add('/dashboard/modena_theme_options/site_settings', $pkg);
        SinglePage::add('/dashboard/modena_theme_options/blog_settings', $pkg);
        SinglePage::add('/dashboard/modena_theme_options/google_fonts', $pkg);
        SinglePage::add('/dashboard/modena_theme_options/portfolio_settings', $pkg);

        // Install our Blocks

        if(!BlockTypeSet::getByHandle('modena')) {
            BlockTypeSet::add('modena', 'Modena', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_accordion');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_accordion', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_animated_content');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_animated_content', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_buttons');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_buttons', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_hero_unit');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_hero_unit', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_icon_box');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_icon_box', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_slider');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_slider', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_lightbox');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_lightbox', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_tabs');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_tabs', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_notices');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_notices', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_pricing');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_pricing', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_team');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_team', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_offscreen_hero');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_offscreen_hero', $pkg);
        }

        $bt = BlockType::getByHandle('vidal_themes_quote_slider');
        if (!is_object($bt)) {
            $bt = BlockType::installBlockType('vidal_themes_quote_slider', $pkg);
        }

        // Install our page templates

        if(!PageTemplate::getByHandle('right_sidebar')) {
            PageTemplate::add('right_sidebar', t('Right Sidebar'), 'right_sidebar.png', $pkg);
        }

        if(!PageTemplate::getByHandle('left_sidebar')) {
            PageTemplate::add('left_sidebar', t('Left Sidebar'), 'left_sidebar.png', $pkg);
        }

        if(!PageTemplate::getByHandle('full')) {
            PageTemplate::add('full_width', t('Full'), 'full.png', $pkg);
        }

        if(!PageTemplate::getByHandle('sub_page')) {
            PageTemplate::add('sub_page', t('Sub Page'), 'full.png', $pkg);
        }

        if(!PageTemplate::getByHandle('blog_entry')) {
            PageTemplate::add('blog_entry', t('Blog Entry'), 'full.png', $pkg);
        }

        if(!PageTemplate::getByHandle('home')) {
            PageTemplate::add('home', t('Home'), 'full.png', $pkg);
        }

        // Instal and register attributes

        $bgImgAttrKey = CollectionAttributeKey::getByHandle('sub_page_banner');
            if (!$bgImgAttrKey || !intval($bgImgAttrKey->getAttributeKeyID())) {
                $boolt = AttributeType::getByHandle('image_file');
                $bgImgAttrKey = CollectionAttributeKey::add($boolt, array('akHandle' => 'sub_page_banner', 'akName' => t('Page Banner'), 'akIsSearchable' => false),$pkg);
        }

        $disableSubPageName = CollectionAttributeKey::getByHandle('disable_sub_page_name');
            if (!$disableSubPageName || !intval($disableSubPageName->getAttributeKeyID())) {
                $disableName = AttributeType::getByHandle('boolean');
                $disableSubPageName = CollectionAttributeKey::add($disableName, array('akHandle' => 'disable_sub_page_name', 'akName' => t('Disable Sub Page Name'), 'akIsSearchable' => false),$pkg);
        }

        $disableSubPageBanner = CollectionAttributeKey::getByHandle('disable_sub_page_banner');
            if (!$disableSubPageBanner || !intval($disableSubPageBanner->getAttributeKeyID())) {
                $disableBanner = AttributeType::getByHandle('boolean');
                $disableSubPageBanner = CollectionAttributeKey::add($disableBanner, array('akHandle' => 'disable_sub_page_banner', 'akName' => t('Disable Sub Page Banner'), 'akIsSearchable' => false),$pkg);
        }

        $disableSubPageFooterMargin = CollectionAttributeKey::getByHandle('disable_sub_page_footer_margin');
            if (!$disableSubPageFooterMargin || !intval($disableSubPageFooterMargin->getAttributeKeyID())) {
                $disableFooterMargin = AttributeType::getByHandle('boolean');
                $disableSubPageFooterMargin = CollectionAttributeKey::add($disableFooterMargin, array('akHandle' => 'disable_sub_page_footer_margin', 'akName' => t('Disable Page Footer Margin'), 'akIsSearchable' => false),$pkg);
        }

        $subPageHeadingSubText = CollectionAttributeKey::getByHandle('sub_page_heading_sub_text');
            if (!$subPageHeadingSubText || !intval($subPageHeadingSubText->getAttributeKeyID())) {
                $subPageSubText = AttributeType::getByHandle('text');
                $subPageHeadingSubText = CollectionAttributeKey::add($subPageSubText, array('akHandle' => 'sub_page_heading_sub_text', 'akName' => t('Sub Page Heading Description'), 'akIsSearchable' => false),$pkg);
        }

        $subPageHeadingHashTag = CollectionAttributeKey::getByHandle('sub_page_heading_hash_tag');
            if (!$subPageHeadingHashTag || !intval($subPageHeadingHashTag->getAttributeKeyID())) {
                $subPageHash = AttributeType::getByHandle('boolean');
                $subPageHeadingHashTag = CollectionAttributeKey::add($subPageHash, array('akHandle' => 'sub_page_heading_hash_tag', 'akName' => t('Disable Sub Heading Hash Tag'), 'akIsSearchable' => false),$pkg);
        }
    }

    public function on_start()
    {
        // Register Ensemble Grid
        $manager = Core::make('manager/grid_framework');
            $manager->extend('modena', function($app) {
                return new EnsembleGridFramework();
        });

        $al = \Concrete\Core\Asset\AssetList::getInstance();

        $al->register(
            'javascript', 'modena_google_fonts', 'js/google-fonts.js', array(), 'modena'
        );

        $al->register(
            'javascript', 'main_modena_google_fonts', 'js/main-google-fonts.js', array(), 'modena'
        );
    }
}
