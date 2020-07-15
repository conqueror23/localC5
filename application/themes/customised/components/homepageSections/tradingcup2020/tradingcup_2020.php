    <div class="tradingcup-warpper">
        <div class="tradingcup-veil section-content-wrapper">
            <div class="tradingcup-content-wrapper">
                <p class="sub"><?php echo t('2020 Trading Cup'); ?></p>

                <?php
//                   Todo why this logic not working here
                echo 'id  pending --- ';
                echo  '<br>';
                echo  Localization::activeLanguage()!=='id';
                echo  '<br>';
                echo 'ar pending --- ';
                echo  '<br>';
                echo  Localization::activeLanguage()!=='ar';
                echo  '<br>';
                echo ' || operations --- ';
                echo  '<br>';
                echo ((Localization::activeLanguage()!=='id') || ( Localization::activeLanguage()!=='ar'));
                ?>

                <?php
                if((Localization::activeLanguage()!=='id') || ( Localization::activeLanguage()!=='ar'))
                {
                        ?>
                <h1> <span><?php echo t('$US 150,000');?></span>
                    <?php echo t('Total Price Pool Given Away*'); ?>
                </h1>
                <?php
                    }else{
                    ?>
                    <h1>
                        <?php echo t('Total Price Pool Given Away*'); ?>
                        <span><?php echo t('$US 150,000');?></span>
                    </h1>
                <?php
                    }
                    ?>
                <ul>
                    <li>
                        <?php echo t('Six $US10,000 Monthly Qualifying Stages');?>
                    </li>
                    <li>
                        <?php echo t("\$US90,000 up for grabs in the grand final");?>
                    </li>
                    <li>
                        <?php echo t("The Grand Champion gets \$US63,000"); ?>
                    </li>
                </ul>
                <a href="#how-to" class='enter-button'><?php echo t("How To Enter ");?><span>&#8595;</span> </a>
                <p id="sub-msg">
                    <?php echo t('*Trading involves risk. <a href="<?= $this->getThemePath() ?>/components/homepageSections/footer/2020-trading-cup-terms-and-conditions-english.pdf" target="_blank">T&Cs apply.</a>'); ?> 
                </p>
            </div>
        </div>
    </div>
