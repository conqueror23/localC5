<div class="how-to-wrapper section-content-wrapper" id="how-to">
    <div class="how-to-left">
        <h1>How To Apply</h1>
        <ul>
            <li><span> 01 </span> <a href="">Click here</a> to open a live account with ACY Securities</li>
            <li><span> 02 </span> You Will receive an email confirmation once approved</li>
            <li><span> 03 </span> Deposite a minimun of $2000 into your ACY Live Trading Account. *</li>
            <li><span> 04 </span> Start trading</li>
        </ul>
        <a href='#' class="enter-button open-form"> Enter Now </a>
        <p>* $2,000 in your base currency.i.e. AU$2000, or US$2000</p>

    </div>
    <div class="how-to-right">
        <video controls muted width="580px" height="360px"
               src="<?= $this->getThemePath() ?>/components/homepageSections/howtoApply/Trading_Cup_How_to_Register.mp4"></video>
    </div>
</div>
<script>
    const video = document.querySelector("video");
    window.addEventListener("scroll", function () {
        const howTo = document.getElementById("how-to");
        const scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
        const howToHeight = howTo.offsetTop;
        if (scrollTop > howToHeight) {
            video.play();
        }
    })
    video.addEventListener("timeupdate", function () {
        let timeDisplay = Math.floor(video.currentTime);
        if (timeDisplay === 63) {
            setTimeout(() => {
                video.play();
            }, 5000);
        }
    }, false)
</script>