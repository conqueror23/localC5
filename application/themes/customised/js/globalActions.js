"use strict";

$(function () {
    $(".open-form").on("click", function () {
        sideMenu.openNav();
        return false;
    });

    $('body').on("click", '#widgetEnterNow', function () {
        sideMenu.openNav();
        return false;
    });

});