'use strict';

var showWechatQr = function showWechatQr() {
    $('.top-tran')[0].setAttribute('style', "display: flex;margin-top: 28px;margin-left: 12px;position: absolute;");
    $(".qr-code")[0].setAttribute('style', "display: flex;margin-top: 40px;margin-left: 8px;position: absolute;");
    $(".qr-code")[1].setAttribute('style', "display:none");
    $('.top-tran')[1].setAttribute('style', "display:none");
};
var showLineQr = function showLineQr() {
    $(".qr-code")[0].setAttribute('style', "display:none");
    $(".qr-code")[1].setAttribute('style', "display: flex;margin-top: 40px;margin-left: -24px;position: absolute;");
    $('.top-tran')[1].setAttribute('style', "display: flex;margin-top: 28px;margin-left: 12px;position: absolute;");
    $('.top-tran')[0].setAttribute('style', "display:none");
};
$('.wechat-zh-logo').on('click', function () {
    showWechatQr();
});

$('.line-zh-logo').on('click', function () {
    showLineQr();
});