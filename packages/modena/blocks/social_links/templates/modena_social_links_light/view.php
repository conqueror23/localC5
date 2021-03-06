<?php defined('C5_EXECUTE') or die("Access Denied.");
    $pObj = Package::getByHandle('modena');
?>

<div id="ccm-block-social-links<?php echo $bID?>" class="ccm-block-social-links">
    <ul class="sharing-icons">
    <?php foreach($links as $link) {
        $service = $link->getServiceObject();
        ?>
        <li class="sharing-icon"><a target="_blank" class="sharing-icon--light <?php echo $pObj->getConfig()->get('site_front_end.social_button_shape.social_button_shape') == 'round' ? 'sharing-icon--round' : ''; ?>" href="<?php echo h($link->getURL()); ?>"><?php echo $service->getServiceIconHTML(); ?></a></li>
    <?php } ?>
    </ul>
</div>