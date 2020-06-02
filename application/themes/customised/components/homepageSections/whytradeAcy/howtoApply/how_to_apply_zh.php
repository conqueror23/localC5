<div class="how-to-wrapper section-content-wrapper" id="how-to">
    <div class="how-to-left">
        <h2>如何参与</h2>
        <ul>
            <li><span> 01 </span> <a href="">点击此处</a> 开通ACY稀万证券真实交易账户。</li>
            <li><span> 02 </span> 您将会收到一封确认报名的邮件。</li>
            <li><span> 03 </span> 入金$2,000至比赛用ACY交易账户</li>
            <li><span> 04 </span> 开始交易！</li>
        </ul>
        <a href='#' class="enter-button open-form"> 立即参与 </a>
        <p>*$2,000货币单位是基于开设的比赛账户货币单位，如2,000美元或2,000澳元</p>

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