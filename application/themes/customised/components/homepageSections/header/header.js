const toggleDropDown = () => {
  document.getElementById("campaign-dropdown-list").classList.toggle("show");
};

const listenAnchor = () => {
  document
    .getElementById("dropdown-list-anchor")
    .addEventListener("click", toggleDropDown);
};

const sideMenu = new PromoLiveAccountSideMenu(
  'Trading Cup Entry',
  "Create a live trading account with ACY in a few simple steps.",
  "en"
);
const mobileBtn = $(".mobile-nav-btn");

mobileBtn.on("click", function () {
  const mobileNav = $("mobile-nav");
  mobileNav.fadeIn(300);
});

listenAnchor();
