<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('components/header_zh1.php');
?>
<div class="<?php echo $c->getPageWrapperClass() ?>">
    <div class="blank-page-wrapper ">
        <div class="blank-title section-content-wrapper">
            <?php
            $a = new Area('title');
            $a->display($c);
            ?>
        </div>
        <div class="blank-body ">
            <?php
            $a = new Area('body');
            $a->display($c);
            ?>
        </div>
    </div>
</div>

<?php
$this->inc('components/footer_zh.php');
?>
