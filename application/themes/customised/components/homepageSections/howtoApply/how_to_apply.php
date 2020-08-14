<div class='how-to-section-wrapper'>
<div class="how-to-wrapper section-content-wrapper" id="how-to">
    <div class="how-to-left">
        <h1><?php echo t("How To Apply");?></h1>
        <ul>
            <li><span> 01 </span>
             <?php echo t('<a href="javascript:void(0)" class="open-form">Click here</a> to open a live account with ACY Securities');?>
        </li>
            <li><span> 02 </span> <?php echo t("You Will receive an email confirmation once approved");?></li>
            <li><span> 03 </span> <?php echo t("Deposit a minimum of $2000 into your ACY Live Trading Account. *")?></li>
            <li><span> 04 </span> <?php echo t("Start trading");?></li>
        </ul>
        <a href='javascript:void(0)' class="enter-button open-form"> <?php echo t("Enter Now");?></a>
        <p><?php echo t("*$2,000 in your base currency.i.e. AU$2000, or US$2000");?></p>

    </div>
    <div class="how-to-right">
        <video controls muted width="580px" height="360px"
               src="<?= $this->getThemePath() ?>/components/homepageSections/howtoApply/trading-cup-how-to-register.mp4" webkit-playsinline playsinline></video>
    </div>
</div>
</div>

<script src="<?= $this->getThemePath() ?>/components/homepageSections/howtoApply/howtoApply.js" defer></script>