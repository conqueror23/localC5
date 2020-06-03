<?php defined('C5_EXECUTE') or die('Access Denied.');

if (isset($error)) {
    ?><?php echo $error?><br/><br/><?php
}

if (!isset($query) || !is_string($query)) {
    $query = '';
}

?>

<form action="<?php echo $view->url($resultTarget)?>" method="get" class="ccm-search-block-form">
    <?php if ($query === '') { ?>
        <input name="search_paths[]" type="hidden" value="<?php echo htmlentities($baseSearchPath, ENT_COMPAT, APP_CHARSET) ?>" />
            <?php } elseif (isset($_REQUEST['search_paths']) && is_array($_REQUEST['search_paths'])) {
                foreach ($_REQUEST['search_paths'] as $search_path) { ?>
                    <input name="search_paths[]" type="hidden" value="<?php echo htmlentities($search_path, ENT_COMPAT, APP_CHARSET) ?>" />
            <?php }
            } ?>
        <input name="query" type="text" value="<?php echo htmlentities($query, ENT_COMPAT, APP_CHARSET)?>" class="ccm-search-block-text header-search-bar" />
    <?php if (isset($buttonText) && ($buttonText !== '')) { ?> 
        <input name="submit" type="submit" value="<?=h($buttonText)?>" class="header-search-bar__submit" />
    <?php } ?>

</form>

<?php
