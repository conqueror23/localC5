"use strict";

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

var getCountryList = function getCountryList() {
  var countryList = [{ "id": 4, "name": "阿富汗", "alpha2": "af", "alpha3": "afg" }, { "id": 8, "name": "阿尔巴尼亚", "alpha2": "al", "alpha3": "alb" }, { "id": 12, "name": "阿尔及利亚", "alpha2": "dz", "alpha3": "dza" }, { "id": 20, "name": "安道尔", "alpha2": "ad", "alpha3": "and" }, { "id": 24, "name": "安哥拉", "alpha2": "ao", "alpha3": "ago" }, { "id": 28, "name": "安提瓜和巴布达", "alpha2": "ag", "alpha3": "atg" }, { "id": 32, "name": "阿根廷", "alpha2": "ar", "alpha3": "arg" }, { "id": 51, "name": "亚美尼亚", "alpha2": "am", "alpha3": "arm" }, { "id": 36, "name": "澳大利亚", "alpha2": "au", "alpha3": "aus" }, { "id": 40, "name": "奥地利", "alpha2": "at", "alpha3": "aut" }, { "id": 31, "name": "阿塞拜疆", "alpha2": "az", "alpha3": "aze" }, { "id": 44, "name": "巴哈马", "alpha2": "bs", "alpha3": "bhs" }, { "id": 48, "name": "巴林", "alpha2": "bh", "alpha3": "bhr" }, { "id": 50, "name": "孟加拉国", "alpha2": "bd", "alpha3": "bgd" }, { "id": 52, "name": "巴巴多斯", "alpha2": "bb", "alpha3": "brb" }, { "id": 112, "name": "白俄罗斯", "alpha2": "by", "alpha3": "blr" }, { "id": 56, "name": "比利时", "alpha2": "be", "alpha3": "bel" }, { "id": 84, "name": "伯利兹", "alpha2": "bz", "alpha3": "blz" }, { "id": 204, "name": "贝宁", "alpha2": "bj", "alpha3": "ben" }, { "id": 64, "name": "不丹", "alpha2": "bt", "alpha3": "btn" }, { "id": 68, "name": "玻利维亚", "alpha2": "bo", "alpha3": "bol" }, { "id": 70, "name": "波黑", "alpha2": "ba", "alpha3": "bih" }, { "id": 72, "name": "博茨瓦纳", "alpha2": "bw", "alpha3": "bwa" }, { "id": 76, "name": "巴西", "alpha2": "br", "alpha3": "bra" }, { "id": 96, "name": "文莱", "alpha2": "bn", "alpha3": "brn" }, { "id": 100, "name": "保加利亚", "alpha2": "bg", "alpha3": "bgr" }, { "id": 854, "name": "布基纳法索", "alpha2": "bf", "alpha3": "bfa" }, { "id": 108, "name": "布隆迪", "alpha2": "bi", "alpha3": "bdi" }, { "id": 132, "name": "佛得角", "alpha2": "cv", "alpha3": "cpv" }, { "id": 116, "name": "柬埔寨", "alpha2": "kh", "alpha3": "khm" }, { "id": 120, "name": "喀麦隆", "alpha2": "cm", "alpha3": "cmr" }, { "id": 124, "name": "加拿大", "alpha2": "ca", "alpha3": "can" }, { "id": 140, "name": "中非", "alpha2": "cf", "alpha3": "caf" }, { "id": 148, "name": "乍得", "alpha2": "td", "alpha3": "tcd" }, { "id": 152, "name": "智利", "alpha2": "cl", "alpha3": "chl" }, { "id": 156, "name": "中国", "alpha2": "cn", "alpha3": "chn" }, { "id": 170, "name": "哥伦比亚", "alpha2": "co", "alpha3": "col" }, { "id": 174, "name": "科摩罗", "alpha2": "km", "alpha3": "com" }, { "id": 178, "name": "刚果共和国", "alpha2": "cg", "alpha3": "cog" }, { "id": 180, "name": "刚果民主共和国", "alpha2": "cd", "alpha3": "cod" }, { "id": 188, "name": "哥斯达黎加", "alpha2": "cr", "alpha3": "cri" }, { "id": 384, "name": "科特迪瓦", "alpha2": "ci", "alpha3": "civ" }, { "id": 191, "name": "克罗地亚", "alpha2": "hr", "alpha3": "hrv" }, { "id": 192, "name": "古巴", "alpha2": "cu", "alpha3": "cub" }, { "id": 196, "name": "塞浦路斯", "alpha2": "cy", "alpha3": "cyp" }, { "id": 203, "name": "捷克", "alpha2": "cz", "alpha3": "cze" }, { "id": 208, "name": "丹麦", "alpha2": "dk", "alpha3": "dnk" }, { "id": 262, "name": "吉布提", "alpha2": "dj", "alpha3": "dji" }, { "id": 212, "name": "多米尼克", "alpha2": "dm", "alpha3": "dma" }, { "id": 214, "name": "多米尼加", "alpha2": "do", "alpha3": "dom" }, { "id": 218, "name": "厄瓜多尔", "alpha2": "ec", "alpha3": "ecu" }, { "id": 818, "name": "埃及", "alpha2": "eg", "alpha3": "egy" }, { "id": 222, "name": "萨尔瓦多", "alpha2": "sv", "alpha3": "slv" }, { "id": 226, "name": "赤道几内亚", "alpha2": "gq", "alpha3": "gnq" }, { "id": 232, "name": "厄立特里亚", "alpha2": "er", "alpha3": "eri" }, { "id": 233, "name": "爱沙尼亚", "alpha2": "ee", "alpha3": "est" }, { "id": 748, "name": "斯威士兰", "alpha2": "sz", "alpha3": "swz" }, { "id": 231, "name": "埃塞俄比亚", "alpha2": "et", "alpha3": "eth" }, { "id": 242, "name": "斐济", "alpha2": "fj", "alpha3": "fji" }, { "id": 246, "name": "芬兰", "alpha2": "fi", "alpha3": "fin" }, { "id": 250, "name": "法国", "alpha2": "fr", "alpha3": "fra" }, { "id": 266, "name": "加蓬", "alpha2": "ga", "alpha3": "gab" }, { "id": 270, "name": "冈比亚", "alpha2": "gm", "alpha3": "gmb" }, { "id": 268, "name": "格鲁吉亚", "alpha2": "ge", "alpha3": "geo" }, { "id": 276, "name": "德国", "alpha2": "de", "alpha3": "deu" }, { "id": 288, "name": "加纳", "alpha2": "gh", "alpha3": "gha" }, { "id": 300, "name": "希腊", "alpha2": "gr", "alpha3": "grc" }, { "id": 308, "name": "格林纳达", "alpha2": "gd", "alpha3": "grd" }, { "id": 320, "name": "危地马拉", "alpha2": "gt", "alpha3": "gtm" }, { "id": 324, "name": "几内亚", "alpha2": "gn", "alpha3": "gin" }, { "id": 624, "name": "几内亚比绍", "alpha2": "gw", "alpha3": "gnb" }, { "id": 328, "name": "圭亚那", "alpha2": "gy", "alpha3": "guy" }, { "id": 332, "name": "海地", "alpha2": "ht", "alpha3": "hti" }, { "id": 340, "name": "洪都拉斯", "alpha2": "hn", "alpha3": "hnd" }, { "id": 348, "name": "匈牙利", "alpha2": "hu", "alpha3": "hun" }, { "id": 352, "name": "冰岛", "alpha2": "is", "alpha3": "isl" }, { "id": 356, "name": "印度", "alpha2": "in", "alpha3": "ind" }, { "id": 360, "name": "印尼", "alpha2": "id", "alpha3": "idn" }, { "id": 364, "name": "伊朗", "alpha2": "ir", "alpha3": "irn" }, { "id": 368, "name": "伊拉克", "alpha2": "iq", "alpha3": "irq" }, { "id": 372, "name": "爱尔兰", "alpha2": "ie", "alpha3": "irl" }, { "id": 376, "name": "以色列", "alpha2": "il", "alpha3": "isr" }, { "id": 380, "name": "意大利", "alpha2": "it", "alpha3": "ita" }, { "id": 388, "name": "牙买加", "alpha2": "jm", "alpha3": "jam" }, { "id": 392, "name": "日本", "alpha2": "jp", "alpha3": "jpn" }, { "id": 400, "name": "约旦", "alpha2": "jo", "alpha3": "jor" }, { "id": 398, "name": "哈萨克斯坦", "alpha2": "kz", "alpha3": "kaz" }, { "id": 404, "name": "肯尼亚", "alpha2": "ke", "alpha3": "ken" }, { "id": 296, "name": "基里巴斯", "alpha2": "ki", "alpha3": "kir" }, { "id": 408, "name": "朝鲜", "alpha2": "kp", "alpha3": "prk" }, { "id": 410, "name": "韩国", "alpha2": "kr", "alpha3": "kor" }, { "id": 414, "name": "科威特", "alpha2": "kw", "alpha3": "kwt" }, { "id": 417, "name": "吉尔吉斯斯坦", "alpha2": "kg", "alpha3": "kgz" }, { "id": 418, "name": "老挝", "alpha2": "la", "alpha3": "lao" }, { "id": 428, "name": "拉脱维亚", "alpha2": "lv", "alpha3": "lva" }, { "id": 422, "name": "黎巴嫩", "alpha2": "lb", "alpha3": "lbn" }, { "id": 426, "name": "莱索托", "alpha2": "ls", "alpha3": "lso" }, { "id": 430, "name": "利比里亚", "alpha2": "lr", "alpha3": "lbr" }, { "id": 434, "name": "利比亚", "alpha2": "ly", "alpha3": "lby" }, { "id": 438, "name": "列支敦士登", "alpha2": "li", "alpha3": "lie" }, { "id": 440, "name": "立陶宛", "alpha2": "lt", "alpha3": "ltu" }, { "id": 442, "name": "卢森堡", "alpha2": "lu", "alpha3": "lux" }, { "id": 450, "name": "马达加斯加", "alpha2": "mg", "alpha3": "mdg" }, { "id": 454, "name": "马拉维", "alpha2": "mw", "alpha3": "mwi" }, { "id": 458, "name": "马来西亚", "alpha2": "my", "alpha3": "mys" }, { "id": 462, "name": "马尔代夫", "alpha2": "mv", "alpha3": "mdv" }, { "id": 466, "name": "马里", "alpha2": "ml", "alpha3": "mli" }, { "id": 470, "name": "马耳他", "alpha2": "mt", "alpha3": "mlt" }, { "id": 584, "name": "马绍尔群岛", "alpha2": "mh", "alpha3": "mhl" }, { "id": 478, "name": "毛里塔尼亚", "alpha2": "mr", "alpha3": "mrt" }, { "id": 480, "name": "毛里求斯", "alpha2": "mu", "alpha3": "mus" }, { "id": 484, "name": "墨西哥", "alpha2": "mx", "alpha3": "mex" }, { "id": 583, "name": "密克罗尼西亚联邦", "alpha2": "fm", "alpha3": "fsm" }, { "id": 498, "name": "摩尔多瓦", "alpha2": "md", "alpha3": "mda" }, { "id": 492, "name": "摩纳哥", "alpha2": "mc", "alpha3": "mco" }, { "id": 496, "name": "蒙古国", "alpha2": "mn", "alpha3": "mng" }, { "id": 499, "name": "黑山", "alpha2": "me", "alpha3": "mne" }, { "id": 504, "name": "摩洛哥", "alpha2": "ma", "alpha3": "mar" }, { "id": 508, "name": "莫桑比克", "alpha2": "mz", "alpha3": "moz" }, { "id": 104, "name": "缅甸", "alpha2": "mm", "alpha3": "mmr" }, { "id": 516, "name": "纳米比亚", "alpha2": "na", "alpha3": "nam" }, { "id": 520, "name": "瑙鲁", "alpha2": "nr", "alpha3": "nru" }, { "id": 524, "name": "尼泊尔", "alpha2": "np", "alpha3": "npl" }, { "id": 528, "name": "荷兰", "alpha2": "nl", "alpha3": "nld" }, { "id": 554, "name": "新西兰", "alpha2": "nz", "alpha3": "nzl" }, { "id": 558, "name": "尼加拉瓜", "alpha2": "ni", "alpha3": "nic" }, { "id": 562, "name": "尼日尔", "alpha2": "ne", "alpha3": "ner" }, { "id": 566, "name": "尼日利亚", "alpha2": "ng", "alpha3": "nga" }, { "id": 807, "name": "北马其顿", "alpha2": "mk", "alpha3": "mkd" }, { "id": 578, "name": "挪威", "alpha2": "no", "alpha3": "nor" }, { "id": 512, "name": "阿曼", "alpha2": "om", "alpha3": "omn" }, { "id": 586, "name": "巴基斯坦", "alpha2": "pk", "alpha3": "pak" }, { "id": 585, "name": "帕劳", "alpha2": "pw", "alpha3": "plw" }, { "id": 591, "name": "巴拿马", "alpha2": "pa", "alpha3": "pan" }, { "id": 598, "name": "巴布亚新几内亚", "alpha2": "pg", "alpha3": "png" }, { "id": 600, "name": "巴拉圭", "alpha2": "py", "alpha3": "pry" }, { "id": 604, "name": "秘鲁", "alpha2": "pe", "alpha3": "per" }, { "id": 608, "name": "菲律宾", "alpha2": "ph", "alpha3": "phl" }, { "id": 616, "name": "波兰", "alpha2": "pl", "alpha3": "pol" }, { "id": 620, "name": "葡萄牙", "alpha2": "pt", "alpha3": "prt" }, { "id": 634, "name": "卡塔尔", "alpha2": "qa", "alpha3": "qat" }, { "id": 642, "name": "罗马尼亚", "alpha2": "ro", "alpha3": "rou" }, { "id": 643, "name": "俄罗斯", "alpha2": "ru", "alpha3": "rus" }, { "id": 646, "name": "卢旺达", "alpha2": "rw", "alpha3": "rwa" }, { "id": 659, "name": "圣基茨和尼维斯", "alpha2": "kn", "alpha3": "kna" }, { "id": 662, "name": "圣卢西亚", "alpha2": "lc", "alpha3": "lca" }, { "id": 670, "name": "圣文森特和格林纳丁斯", "alpha2": "vc", "alpha3": "vct" }, { "id": 882, "name": "萨摩亚", "alpha2": "ws", "alpha3": "wsm" }, { "id": 674, "name": "圣马力诺", "alpha2": "sm", "alpha3": "smr" }, { "id": 678, "name": "圣多美和普林西比", "alpha2": "st", "alpha3": "stp" }, { "id": 682, "name": "沙特阿拉伯", "alpha2": "sa", "alpha3": "sau" }, { "id": 686, "name": "塞内加尔", "alpha2": "sn", "alpha3": "sen" }, { "id": 688, "name": "塞尔维亚", "alpha2": "rs", "alpha3": "srb" }, { "id": 690, "name": "塞舌尔", "alpha2": "sc", "alpha3": "syc" }, { "id": 694, "name": "塞拉利昂", "alpha2": "sl", "alpha3": "sle" }, { "id": 702, "name": "新加坡", "alpha2": "sg", "alpha3": "sgp" }, { "id": 703, "name": "斯洛伐克", "alpha2": "sk", "alpha3": "svk" }, { "id": 705, "name": "斯洛文尼亚", "alpha2": "si", "alpha3": "svn" }, { "id": 90, "name": "所罗门群岛", "alpha2": "sb", "alpha3": "slb" }, { "id": 706, "name": "索马里", "alpha2": "so", "alpha3": "som" }, { "id": 710, "name": "南非", "alpha2": "za", "alpha3": "zaf" }, { "id": 728, "name": "南苏丹", "alpha2": "ss", "alpha3": "ssd" }, { "id": 724, "name": "西班牙", "alpha2": "es", "alpha3": "esp" }, { "id": 144, "name": "斯里兰卡", "alpha2": "lk", "alpha3": "lka" }, { "id": 729, "name": "苏丹", "alpha2": "sd", "alpha3": "sdn" }, { "id": 740, "name": "苏里南", "alpha2": "sr", "alpha3": "sur" }, { "id": 752, "name": "瑞典", "alpha2": "se", "alpha3": "swe" }, { "id": 756, "name": "瑞士", "alpha2": "ch", "alpha3": "che" }, { "id": 760, "name": "叙利亚", "alpha2": "sy", "alpha3": "syr" }, { "id": 762, "name": "塔吉克斯坦", "alpha2": "tj", "alpha3": "tjk" }, { "id": 834, "name": "坦桑尼亚", "alpha2": "tz", "alpha3": "tza" }, { "id": 764, "name": "泰国", "alpha2": "th", "alpha3": "tha" }, { "id": 626, "name": "东帝汶", "alpha2": "tl", "alpha3": "tls" }, { "id": 768, "name": "多哥", "alpha2": "tg", "alpha3": "tgo" }, { "id": 776, "name": "汤加", "alpha2": "to", "alpha3": "ton" }, { "id": 780, "name": "特立尼达和多巴哥", "alpha2": "tt", "alpha3": "tto" }, { "id": 788, "name": "突尼斯", "alpha2": "tn", "alpha3": "tun" }, { "id": 792, "name": "土耳其", "alpha2": "tr", "alpha3": "tur" }, { "id": 795, "name": "土库曼斯坦", "alpha2": "tm", "alpha3": "tkm" }, { "id": 798, "name": "图瓦卢", "alpha2": "tv", "alpha3": "tuv" }, { "id": 800, "name": "乌干达", "alpha2": "ug", "alpha3": "uga" }, { "id": 804, "name": "乌克兰", "alpha2": "ua", "alpha3": "ukr" }, { "id": 784, "name": "阿联酋", "alpha2": "ae", "alpha3": "are" }, { "id": 826, "name": "英国", "alpha2": "gb", "alpha3": "gbr" }, { "id": 840, "name": "美国", "alpha2": "us", "alpha3": "usa" }, { "id": 858, "name": "乌拉圭", "alpha2": "uy", "alpha3": "ury" }, { "id": 860, "name": "乌兹别克斯坦", "alpha2": "uz", "alpha3": "uzb" }, { "id": 548, "name": "瓦努阿图", "alpha2": "vu", "alpha3": "vut" }, { "id": 862, "name": "委内瑞拉", "alpha2": "ve", "alpha3": "ven" }, { "id": 704, "name": "越南", "alpha2": "vn", "alpha3": "vnm" }, { "id": 887, "name": "也门", "alpha2": "ye", "alpha3": "yem" }, { "id": 894, "name": "赞比亚", "alpha2": "zm", "alpha3": "zmb" }, { "id": 716, "name": "津巴布韦", "alpha2": "zw", "alpha3": "zwe" }];
  //  sort countryList based on alpha3 sort 
  var countryArrayList = countryList.map(function (ele) {
    return ele.name;
  });
  var finalArray = ['请选择国家'].concat(_toConsumableArray(countryArrayList));
  return finalArray;
};
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