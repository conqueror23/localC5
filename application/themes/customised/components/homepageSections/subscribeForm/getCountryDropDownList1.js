"use strict";

var submitUrl = 'https://apiform.crm.zerologix.com/v1/landing-page/2020/trading-cup-subscribe';

// create options list
var createDropDownOptions = function createDropDownOptions(list) {
    for (var index = 0; index <= list.length; index++) {
        var z = document.createElement("option");
        z.setAttribute("value", list[index]);
        var t = document.createTextNode(list[index]);
        z.appendChild(t);
        document.getElementById('country-dropdown').appendChild(z);
    }
};
createDropDownOptions(getCountryList());