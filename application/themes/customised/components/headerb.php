<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('components/header_top.php');

//$as = new GlobalArea('Header Search');
//$blocks = $as->getTotalBlocksInArea();
//$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

<header>
    <div class="container">
        <div class="row">
            <?php
            $a = new GlobalArea('Header Site Title');
            $a->display();
            ?>

            <div class="header-nav">
                <ul class="header-nav-left">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">News</a></li>
                </ul>

                <script src="https://apiform.crm.zerologix.com/js/external/acyform.bundle.js"
                        type="text/javascript"></script>
                <script>
                    let element = new PromoLiveAccountSideMenu("Create a live ACY account Today", "", 'en');

                </script>

                <div class="header-nav-right">
                    <button class="enter-button" onclick="element.openNav()"> Enter 2020 Cup</button>
                    <select>
                        <option>
                            <a href="">English</a>
                        </option>
                        <option>
                            <a href="">Chinese</a>
                        </option>
                    </select>
                </div>
            </div>

            <?php
            //            if ($displayThirdColumn) {
            //                ?>
            <!--                <!--                <div class="col-sm-3 col-xs-12">-->-->
            <!--                <!--                    -->--><?php ////$as->display(); ?>
            <!--                <!--                </div>-->-->
            <!--                --><?php
            //            }
            ?>
        </div>
    </div>
</header>
