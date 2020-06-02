
// global variables
const subscribeForm = document.getElementById('subscribe-form')
const subscribeFormSection =document.getElementById('form-section');
const subscribeFormAfter =document.getElementById('form-after');


const getFormData=()=>{
  const dataObject ={};
  const data =$('form').serialize();
  const dataArr= data.split('&')
  dataArr.map(key=>{
    const record = key.split('=');
    dataObject[record[0]]=record[1]
  })
  return dataObject;
}

const showSubmitMessage =()=>{
  subscribeFormSection.setAttribute('style','display:none;');
  subscribeFormAfter.setAttribute('style','display:flex;');
}
const getSubmitData = () => {
  const {leadSource, leadSourceClassification} = leadData();
  const formData = getFormData();
  formData["lead_source"] = leadSource;
  formData["lead_source_classification"] = leadSourceClassification;
  return formData
}
const getRequestBody = () => {
  let body = [];
  const submitData = getSubmitData();
  const keys = Object.keys(submitData);

  keys.map(key => {
    if (submitData[key] !== '' && submitData[key] !== undefined)
      body.push(key + '=' + submitData[key]);
  })
  const requestBody = body.join('&')
  return requestBody
}
const showErrorMessage=(err)=>{
  document.getElementById('error-msg').setAttribute('style','display:block');
  console.log('errors',err)
}

const concealErrorMessage =()=>{
  document.getElementById('error-msg').setAttribute('style','display:none');
}

const submitForm = (e) => {
  e.preventDefault();
  if(getSubmitData().country !=="Country" && getSubmitData().country!=="请选择国家"){
    fetch(submitUrl, {
      method: "POST",
      body: getRequestBody(),
    }).then(res => {
      if (res.status === 202 || res.status === 200) {
        showSubmitMessage()
      } else {
        console.log(res);
      }
    }).catch(err=>{
      showErrorMessage(err)
    })
  }else{
    showErrorMessage()
  }
}



const button = subscribeForm.querySelector('button')

button.addEventListener('click',submitForm)

