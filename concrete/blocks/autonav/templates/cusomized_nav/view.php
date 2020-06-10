<?php defined('C5_EXECUTE') or die("Access Denied.");

$navItems = $controller->getNavItems();
$c = Page::getCurrentPage();

/*** STEP 1 of 2: Determine all CSS classes (only 2 are enabled by default, but you can un-comment other ones or add your own) ***/
foreach ($navItems as $ni) {
    $classes = array();
    if ($ni->isCurrent) {
        $classes[] = 'nav-selected';
    }

    if ($ni->inPath) {
        //class for parent items of the page currently being viewed
        $classes[] = 'nav-path-selected';
    }

    //Put all classes together into one space-separated string
    $ni->classes = implode(" ", $classes);
}

//*** Step 2 of 2: Output menu HTML ***/

if (count($navItems) > 0) {
    echo '<ul class="customized_list">'; //opens the top-level menu

    foreach ($navItems as $ni) {
        echo '<li class="' . $ni->classes . '">'; //opens a nav item
        echo '<a href="' . $ni->url . '" target="' . $ni->target . '" class="' . $ni->classes . '">' . h($ni->name) . '</a>';

        if ($ni->hasSubmenu) {
            echo '<ul>'; //opens a dropdown sub-menu
        } else {
            echo '</li>'; //closes a nav item

            echo str_repeat('</ul></li>', $ni->subDepth); //closes dropdown sub-menu(s) and their top-level nav item(s)
        }
    }

    echo '</ul>'; //closes the top-level menu
} elseif (is_object($c) && $c->isEditMode()) {
    ?>
    <div class="customized_list_wrapper"><?=t('Empty Cusomized Nav Block.')?></div>
    <?php
}
