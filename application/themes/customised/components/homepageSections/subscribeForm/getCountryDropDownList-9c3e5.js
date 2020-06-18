"use strict";

var defaultsLangs = { en: "Country", zh: "请选择国家", vi: "Vui lòng chọn một quốc gia", id: "Silakan pilih satu negara", ar: "رجاء قم بإختيار دوله" };
var supportedLangs = Object.keys(defaultsLangs);

var defaultCountryOptions =  Object.keys(defaultsLangs).map(function(key) {
  return defaultsLangs[key];
});

function _toConsumableArray(arr) {
  if (Array.isArray(arr)) {
    for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) {
      arr2[i] = arr[i];
    }
    return arr2;
  } else {
    return Array.from(arr);
  }
}

var submitUrl = "https://apiform.crm.zerologix.com/v1/landing-page/2020/trading-cup-subscribe";
// create options list

function createDefaultValue(list) {
  var finalList;
  if (supportedLangs.indexOf(lang) > -1) {
    finalList = [defaultsLangs[lang]].concat(_toConsumableArray(list));;
  } else {
    finalList =[defaultsLangs[en]].concat(_toConsumableArray(list));;
  }
  return finalList;
}

(function (_ref) {
  var countryList = _ref.countryList,
      countryListValues = _ref.countryListValues;

  var finalCountryList = createDefaultValue(countryList);
  var finalCountryListValues = createDefaultValue(countryListValues);

  for (var index = 0; index <= finalCountryList.length; index++) {
    var z = document.createElement("option");
    z.setAttribute("value", finalCountryListValues[index]);
    var t = document.createTextNode(finalCountryList[index]);
    z.appendChild(t);
    document.getElementById("country-dropdown").appendChild(z);
  }
})(getCountryList(lang));