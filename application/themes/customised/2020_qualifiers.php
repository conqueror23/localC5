
<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('components/headertest.php');
?>
<style>

body{
    background:#000;
}

.qualifiers-container p{
    line-height:84px;
}

@media only screen and (max-width:768px){
.qualifiers-container p{
    line-height:51px;
}

}
</style>

<script type="text/javascript" src="http://lprsc.acytest.com/202010-qualifiers/dist_test/packages/react-16.13.1/react.production.min.js"></script>
<script type="text/javascript" src="http://lprsc.acytest.com/202010-qualifiers/dist_test/packages/react-dom-16.13.1/react-dom.production.min.js"></script>
<script type="text/javascript" src="http://lprsc.acytest.com/202010-qualifiers/dist_test/packages/antd-4.2.5/antd-with-locales.min.js"></script>

<div id='root'></div>

<script src='http://lprsc.acytest.com/202010-qualifiers/dist_test/switch-autolang.js'>
</script>


<?php

$this->inc('components/footer.php');

?>
