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
    if(record[0]==='email'){
      var b =record[1].replace('%40','@')
      dataObject[record[0]] = b;
    }else{
      dataObject[record[0]] = record[1];
    }
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
var handleResponseMsg = function handleResponseMsg(res) {

  res.json().then(function (data) {
    if (data.status_code === 202 || data.status_code === 201 || data.status_code === 200) {
      showSubmitMessage();
      document.getElementById('error-msg').setAttribute('style', 'display:none');
    } else {
      console.log('show data',data);
      showErrorMessage(data.message);
    }
  });

  // showErrorMessage(err);
};

var submitForm = function submitForm(e) {
  e.preventDefault();
  if (defaultCountryOptions.indexOf(getSubmitData().country)==-1) {
    fetch(submitUrl, {
      method: "POST",
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(getSubmitData())
    }).then(function (res) {
      if (res.status === 202 || res.status === 201 || res.status === 200) {
        handleResponseMsg(res);
      } else {
        console.log(res);
      }
    }).catch(function (err) {
      showErrorMessage(err);
    });
  } else {
    console.log('debugging',defaultCountryOptions.indexOf(getSubmitData().country)==-1);
    showErrorMessage();
  }
};

var button = subscribeForm.querySelector('button');

button.addEventListener('click', submitForm);