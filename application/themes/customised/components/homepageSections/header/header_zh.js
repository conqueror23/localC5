"use strict";

var toggleDropDown = function toggleDropDown() {
  console.log("you have clicked anchor");
  document.getElementById("campaign-dropdown-list").classList.toggle("show");
};

var listenAnchor = function listenAnchor() {
  document.getElementById("dropdown-list-anchor").addEventListener("click", toggleDropDown);
};

var sideMenu = new PromoLiveAccountSideMenu("交易杯报名", "仅需几步即可在ACY创建真实交易账户", "zh");
var mobileBtn = $(".mobile-nav-btn");

mobileBtn.on("click", function () {
  var mobileNav = $("mobile-nav");
  mobileNav.fadeIn(300);
});

$(function () {
  // bind change event to select
  $("#language-switch").on("change", function () {
    var url = $(this).val(); // get selected value
    if (url) {
      // require a URL
      window.location = window.location.href + url; // redirect
    }
    return false;
  });
});

listenAnchor();