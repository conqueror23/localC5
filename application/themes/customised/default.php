    <link href="<?= $this->getThemePath() ?>/css/style.css" rel='stylesheet' type='text/css'
          media='screen and (min-width:1000px)'>
    <link href="<?= $this->getThemePath() ?>/css/mobile.css" rel='stylesheet' type='text/css'
          media='screen and (max-width:500px)'>

<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('components/header.php');

?>

<div class="<?php echo $c->getPageWrapperClass() ?>">
    <div class="customised-theme-wrapper">
        <?php
        $a = new Area('Title');
        $a->display($c);
        ?>
    </div>
</div>

<?php
$this->inc('components/footer.php');
?>
