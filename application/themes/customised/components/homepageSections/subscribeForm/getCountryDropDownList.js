const submitUrl='https://apiform.crm.zerologix.com/v1/landing-page/2020/trading-cup-subscribe';

// create options list
const createDropDownOptions = (list) => {
    for (let index = 0; index <= list.length; index++) {
        let z = document.createElement("option");
        z.setAttribute("value", list[index]);
        let t = document.createTextNode(list[index]);
        z.appendChild(t);
        document.getElementById('country-dropdown').appendChild(z)
    }
};
createDropDownOptions(getCountryList())
