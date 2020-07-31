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
var hideMobileNav = function hideMobileNav(){
  var mobileNav = document.getElementById('mobile-nav-menu');
  mobileNav.setAttribute('style','opacity:0'); 
}

var showMobileNavMenu =function showMobileNavMenu(){
  var windowWidth= window.innerWidth;
  var mobileNav = document.getElementById('mobile-nav-menu');
    mobileNav.setAttribute('style','opacity:1');
  if(windowWidth>378){
    showTabletNavMenu(mobileNav);    
  }else{
    showPhoneNavMenu(mobileNav);
  }
}

var transformMobileMenu= function transformMobileMenu() {
  var navBtn= document.getElementById('mobile-nav-btn')
  if(navBtn.getAttribute('src').includes('hamburger')) {
    navBtn.setAttribute('src',headerResource+'/close.png')
    navBtn.setAttribute('style','height:20px;padding:1px 6px;');
    showMobileNavMenu();
  }else{
    navBtn.setAttribute('src',headerResource+'/hamburger.png')
    navBtn.setAttribute('style','height:20px');
    document.getElementById('mobile-nav-menu').setAttribute('style','opacity:0');
    // document.body.querySelector(':not(#mobile-nav-btn)').addEventListener('click',hideMobileNav)
  }
}

var toggleMobileMenu = function toggleMobileMenu(){
  transformMobileMenu()
}

var listenChampionAnchor = function listenChampionAnchor() {
  document.getElementById("dropdown-list-anchor").addEventListener("click",toggleDropDown);
};

 (function (){
   return document.getElementById('mobile-nav-btn').addEventListener("click",toggleMobileMenu);
})()

listenChampionAnchor();