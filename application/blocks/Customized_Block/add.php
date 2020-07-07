<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php
$view->inc('view.php', array('info' => $info, 'c' => isset($c) ? $c : null));
?>
<?php echo $form->label('content','Name');?>
<?php echo $form->text('content',array('style'=>'width:32px'));
?>

<?php echo $form->lable('description','Name');?>

<?php echo $form->text('description',array('style'=>'width:40px'));
?>




