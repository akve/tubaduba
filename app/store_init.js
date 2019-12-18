var BASEURL = "/shop";
var cart = [];
if (window.localStorage['cart']) {
  cart = JSON.parse(window.localStorage['cart']);
  if (!cart) cart = [];
}
var country;

var currentState = {};
var orderInProgress = false;
var currentScroll = 0;

var analyticsRendered = false;
console.log("AR", analyticsRendered);
var fbAnalyticsRendered = false;
var tStore;
var count = 0; // needed for safari
var hist = [];
var isFirstShopLoaded = false;
var LANG = "ru";

jQuery(document).ready(function($) {
  if (window.history && window.history.pushState) {

    window.history.pushState('forward', null, hist[hist.length - 1]);
    generateShop();

    $(window).on('popstate', function() {
      generateShop();
      if (hist.length) hist.pop();
      //      alert('Back button was pressed.');
    });

  }
});

var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split('=');

    if (sParameterName[0] === sParam) {
      return sParameterName[1] === undefined ? true : sParameterName[1];
    }
  }
};



function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

LANG = getCookie("lang");
if (!LANG || LANG=="en") LANG = "ru";

function switchLanguage(code) {
  createCookie("lang", code, 1000);
  document.location.reload();
}

var _T = function(s) {
  if (!s) return s;
  s = "" + s;
  if (s.indexOf("[R:") >= 0 || s.indexOf("[E:") >= 0 || s.indexOf("[U:") >= 0) {
    if (LANG == "ru") {
      s = s.replace(/\[E\:(.*?)\]/g, "");
      s = s.replace(/\[U\:(.*?)\]/g, "");
      s = s.replace(/\[R\:(.*?)\]/g, "$1");
    }
    if (LANG == "en") {
      s = s.replace(/\[U\:(.*?)\]/g, "");
      s = s.replace(/\[R\:(.*?)\]/g, "");
      s = s.replace(/\[E\:(.*?)\]/g, "$1");
    }
    if (LANG == "ua") {
      s = s.replace(/\[E\:(.*?)\]/g, "");
      s = s.replace(/\[R\:(.*?)\]/g, "");
      s = s.replace(/\[U\:(.*?)\]/g, "$1");
    }
  }
  return s;
}
var storeLoaded = false;

function parseHash(hash) {

  if (hash == "") hash = "list:isnew:true";
  hash = hash.replace(/%3A/g, ":");
  if (hash.indexOf("list:") >= 0) {
    var res = {
      type: "list"
    };
    var params = hash.replace("list:", "").split("|");
    if (params.length == 0) {
      params = "isnew:true";
    }
    params.forEach(function(param) {
      var items = param.split(":");
      res[items[0]] = items[1].split(",");
    })
    return res;
  } else {
    var item = hash.replace("?", "");
    if (item.indexOf("&") > 0) {
      item = item.split("&")[0];
    }
    return {
      type: "item",
      id: item
    };
  }
}

function generateHash(params) {
  var prefix = "/shop/?";
  if (params.id) {
    return prefix + params.id;
  }

  prefix = prefix + "list:";
  var res = "";
  for (var i in params) {
    if (res) res += "|";
    res += i + ":" + params[i];
  }
  return prefix + res;
}

function getCurrentHash() {
  var hash = "";
  if (document.location.href.indexOf("?") > 0) {
    hash = document.location.href.split("?")[1];
    if (hash.indexOf("&") > 0) {
      hash = hash.split("&")[0];
    }
    return hash.replace(/%3A/g, ":");
  } else {
    return "";
  }
}

function initCountry() {
  console.log('initcountry');
  country = 'ukraine';
  console.log("AR2", analyticsRendered);
  $(".search_switcher_block").html(generateLangSwitch());

  if (!analyticsRendered) {

    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      i.initAnalytics = function() {
        console.log("AR3", analyticsRendered);
        if (analyticsRendered) return;
        analyticsRendered = true;
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      }
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-84542153-1', 'auto');
    ga('send', 'pageview');
  }
  //    hideClasses();
  generateShop(); // shop
  checkoutInit(); // order

}

function interceptUrl(obj) {
  setTimeout(function() {
    console.log('intercept', document.location);
    generateShop();
  }, 100);
  //console.log(obj, document.location);
}


function checkInterceptHrefs() {

  // skip if not on shop yet
  if (document.location.href.indexOf("/shop") == -1) return;
  //setTimeout(
  //function(){
  $("a").click(function(e) {
    //console.log(e,this);
    var href = "" + this.getAttribute("href")
    if (href.indexOf("/shop") >= 0) {
      e.preventDefault();
      history.pushState({}, "", href);
      generateShop();
    }
  });
  //},100);
}

function createCookie(name, value, days) {
  var expires;

  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  } else {
    expires = "";
  }
  document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}


var generateLangSwitch = function() {
  return `<div class="lang-switch"><a onclick='switchLanguage("ru")'>RU</a> | <a onclick='switchLanguage("ua")'>UA</a> | <a onclick='switchLanguage("en")'>EN</a></div>`;
}


if (window.attachEvent) {
  window.attachEvent('onload', initCountry);
  //window.attachEvent("hashchange", generateShop, false);
} else {
  if (window.onload) {
    var curronload = window.onload;
    var newonload = function(evt) {
      curronload(evt);
      initCountry(); //generateShop(evt);
    };
    window.onload = newonload;
  } else {
    window.onload = initCountry;
  }
}

