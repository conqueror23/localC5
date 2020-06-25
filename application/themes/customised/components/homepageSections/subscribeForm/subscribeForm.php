<div class="section-content-wrapper sub-form-bk">
    <div class="subscribe-form-wrapper">
        <div id="form-section">
            <!--TODO add cover for other langs-->
            <?php if(Localization::activeLanguage()==='en'){
             ?>
            <div class="form-left">
                <h2>
                <?php echo t('Subscribe to our trading interviews'); ?>
                </h2>
                <p>
                <?php echo t('Stay up to date with how our winners are trading.'); ?>
                </p>
            </div>
            <div class="form-right">
                <form action="#" id="subscribe-form" name='subscribe-form'>
                    <div class="form-inputs">
                        <input type="text" name='first_name' placeholder="<?php echo t('First Name'); ?>">
                        <input type="text" name='last_name' placeholder="<?php echo t('Last Name'); ?>">
                        <select name="country" id="country-dropdown" aria-placeholder="Country"></select>
                        <input type="email" name="email" placeholder="<?php echo t('Email'); ?>">
                    </div>
                    <button class="enter-button">
                    <?php echo t('Sign Up'); ?>
                    </button>
                </form>
            </div>
            <?php
            }else{
                ?>
                <div class="replacement-wrapper">
                    <div class="replacement-left">
                        <h2><?php echo t("replacement-title");?></h2>
                        <p><?php echo t('replacement-content');?></p>
                    </div>
                    <div class="replacement-right">
                        <a href="#top-trader-anchor" class="enter-button"> <?php echo t('check-top-traders');?></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div id="form-after">
            <h2>
            <?php echo t('Thank you for signing up'); ?>
            </h2>
            <p>
            <?php echo t('Check your email to stay up to date with how our winners are trading'); ?> 
            </p>
        </div>
    </div>
</div>
<div id="error-msg">
    <?php echo t('*Error happened when submitting please try again*'); ?> 
</div>

