'use strict';

// global variables
var subscribeForm = document.getElementById('subscribe-form');
var subscribeFormSection = document.getElementById('form-section');
var subscribeFormAfter = document.getElementById('form-after');

var getFormData = function getFormData() {
  var dataObject = {};
  var data = $('form').serialize();
  var dataArr = data.split('&');
  dataArr.map(function (key) {
    var record = key.split('=');
    dataObject[record[0]] = record[1];
  });
  return dataObject;
};

var showSubmitMessage = function showSubmitMessage() {
  subscribeFormSection.setAttribute('style', 'display:none;');
  subscribeFormAfter.setAttribute('style', 'display:flex;');
};
var getSubmitData = function getSubmitData() {
  var _leadData = leadData(),
      leadSource = _leadData.leadSource,
      leadSourceClassification = _leadData.leadSourceClassification;

  var formData = getFormData();
  formData["lead_source"] = leadSource;
  formData["lead_source_classification"] = leadSourceClassification;
  return formData;
};
var getRequestBody = function getRequestBody() {
  var body = [];
  var submitData = getSubmitData();
  var keys = Object.keys(submitData);

  keys.map(function (key) {
    if (submitData[key] !== '' && submitData[key] !== undefined) body.push(key + '=' + submitData[key]);
  });
  var requestBody = body.join('&');
  return requestBody;
};
var showErrorMessage = function showErrorMessage(err) {
  document.getElementById('error-msg').setAttribute('style', 'display:block');
  console.log('errors', err);
};

var concealErrorMessage = function concealErrorMessage() {
  document.getElementById('error-msg').setAttribute('style', 'display:none');
};

var submitForm = function submitForm(e) {
  e.preventDefault();

  if (getSubmitData().country !== "Country" && getSubmitData().country !== "%E8%AF%B7%E9%80%89%E6%8B%A9%E5%9B%BD%E5%AE%B6") {
    fetch(submitUrl, {
      method: "POST",
      body: getRequestBody()
    }).then(function (res) {
      if (res.status === 202 || res.status === 200) {
        showSubmitMessage();
      } else {
        console.log(res);
      }
    }).catch(function (err) {
      showErrorMessage(err);
    });
  } else {
    showErrorMessage();
  }
};

var button = subscribeForm.querySelector('button');

button.addEventListener('click', submitForm);