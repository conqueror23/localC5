"use strict";

var toggleDropDown = function toggleDropDown() {
  document.getElementById("campaign-dropdown-list").classList.toggle("show");
};

var listenAnchor = function listenAnchor() {
  document.getElementById("dropdown-list-anchor").addEventListener("click", toggleDropDown);
};

// var sideMenu = new PromoLiveAccountSideMenu('Trading Cup Entry', "Create a live trading account with ACY in a few simple steps.", "en");
var mobileBtn = $(".mobile-nav-btn");

mobileBtn.on("click", function () {
  var mobileNav = $("mobile-nav");
  mobileNav.fadeIn(300);
});

listenAnchor();