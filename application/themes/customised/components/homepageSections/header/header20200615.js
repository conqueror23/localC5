"use strict";


var toggleDropDown = function toggleDropDown() {
  document.getElementById("campaign-dropdown-list").classList.toggle("show");
};
var showTabletNavMenu =function showTabletNavMenu(mobileNav){
  mobileNav.querySelector('#mobile-campaign-dropdown-list').setAttribute("style",'display:flex');
}

var showPhoneNavMenu =function showPhoneNavMenu(mobileNav){
  mobileNav.querySelector('ul').setAttribute('style','display:flex;flex-direction:column;align-items:center'); 

}

var showMobileNavMenu =function showMobileNavMenu(){
  var windowWidth= window.innerWidth;
  var mobileNav = document.getElementById('mobile-nav-menu');
    mobileNav.setAttribute('style','opacity:1');
    console.log(windowWidth);
  if(windowWidth>378){
    showTabletNavMenu(mobileNav);    
  }else{
    showPhoneNavMenu(mobileNav);
  }
}

var transformMobileMenu= function transformMobileMenu() {
  var navBtn= document.getElementById('mobile-nav-btn')
  if(navBtn.getAttribute('src').includes('hamburger')) {
    navBtn.setAttribute('src','/application/themes/customised/components/homepageSections/header/close.png')
    navBtn.setAttribute('style','height:16px');
    showMobileNavMenu();
  }else{
    navBtn.setAttribute('src','/application/themes/customised/components/homepageSections/header/hamburger.png')
    navBtn.setAttribute('style','height:10px');
    document.getElementById('mobile-nav-menu').setAttribute('style','opacity:0');
  }
}

var toggleMobileMenu = function toggleMobileMenu(){
  console.log('opening mobile nav menus');
  transformMobileMenu()
}

var listenChampionAnchor = function listenChampionAnchor() {
  document.getElementById("dropdown-list-anchor").addEventListener("click",toggleDropDown);
};

 (function (){
   return document.getElementById('mobile-nav-btn').addEventListener("click",toggleMobileMenu);
})()
// var sideMenu = new PromoLiveAccountSideMenu('Trading Cup Entry', "Create a live trading account with ACY in a few simple steps.", "en");
var mobileBtn = $(".mobile-nav-btn");

mobileBtn.on("click", function () {
  var mobileNav = $("mobile-nav");
  mobileNav.fadeIn(300);
});

listenChampionAnchor();