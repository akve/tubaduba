var BASEURL = "/shop";
var lastColor = -1;
var country = 'ukraine';

var cart = [];
if (window.localStorage['cart']){
  cart = JSON.parse(window.localStorage['cart']);
  if (!cart) cart = [];
}
var currentState= {};
var orderInProgress = false;
var currentScroll = 0;

var analyticsRendered = false;
var fbAnalyticsRendered = false;
var tStore;


var storeLoaded =false;

function generateShop() {
  //if (!$(".shopFirst").length) return;

  var onLoaded = function() {
      var hash = document.location.hash;
      hash = hash.replace("#","");
      console.log("shop initting", hash);
      generateWidgets(hash);
      if (hash && hash.indexOf("group-") <0 && hash.indexOf("cat-") <0) {
        generatePage2(hash);
      } else {
        generatePage1(hash);
      }

      /*$('.fader').hover(function() {
           $(this).find("img:last").fadeToggle();
      });*/
  }

  if (storeLoaded) {
    onLoaded();
  } else {
    jQuery.get("/wp-content/themes/organica/admin-remote.php?action=load&country=" + (country == "crimea"?"ru":"ua") ,"",function(r){
        storeLoaded = true;
        tStore = JSON.parse(r);
        //console.log(tStore);

        tStore.layer2 = {};
        tStore.layer1.forEach(function(r){
          tStore.layer2[r.id] = r;
        })

        tStore.colorsHash = {};
        tStore.colorCodes.forEach(function(r){
          tStore.colorsHash[r.id] = r;
        })
        storeLoaded = true;
        onLoaded();
    });
  }
}

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

function initCountry() {
    var _country = getUrlParameter('country') ? getUrlParameter('country'): '';

    if (!_country) _country = Cookies.get("myCountryNew") ? Cookies.get("myCountryNew") : "";
  if (_country) country = _country;
  country = 'ukraine';

    hideClasses();
    generateShop(); // shop
    dcInit(); // zakaz tkani
    checkoutInit(); // order

  /*if (!country) {
    country = 'ukraine';
    //openCountryDialog();
    //return;
  } else {
    if (country == 'ukraine') {
      config = configUA;
    } else {
      if (country == 'crimea') {
        config = configCRIMEA;
        //tStore = tStoreCR;

      } else {
        country = 'crimea'; // override ru with cr
        config = configCRIMEA;
        //tStore = tStoreCR;
//        config = configRU;
//        tStore = tStoreRU;
      }
    }
    hideClasses();
    generateShop(); // shop
    dcInit(); // zakaz tkani
    checkoutInit(); // order
  }*/

  if (!analyticsRendered) {
      
      (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      i.initAnalytics = function() {
          if (analyticsRendered) return;
          analyticsRendered = true;
          a = s.createElement(o), m = s.getElementsByTagName(o)[0];
          a.async = 1;
          a.src = g;
          m.parentNode.insertBefore(a, m)
      }
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-84542153-1', 'auto');
      ga('send', 'pageview');
  }
}

function hideClasses(){
  // hide by class
  $(".country-specific").hide();
  $(".country-" + country).show();
}

/*function chooseCountry(id, dialog) {
  window.SUPERCOUNTRY = id;
  country = id;
  console.log("!!!",country);
  Cookies.set('myCountryNew', country, { expires: 365, path: '/' });
  if (dialog) $( dialog ).dialog( "close" );
  initCountry();
}*/

/*function openCountryDialog() {
  //return;
    var imagesPath = "/i/intro/0style.jpg";
  for(var i=1;i<=5;i++) {
    $("#cycler" + i)[0].src = imagesPath.replace(0,i);
    $("#cycler" + i).css("width","100%");
  }

  if (!countryInitted) {
    countryInitted = true;
    $( "#dialog" ).dialog({
        autoOpen: false,
        modal:true,
        show: {
          effect: "fade",
          duration: 1000
        },
        hide: {
          effect: "explode",
          duration: 1000
        },
        dialogClass: "no-close",
        buttons: {
          "Украина": function() {
            chooseCountry("ukraine", this);
          },

          "Крым": function() {
            chooseCountry("crimea", this);
          }
        }
      });
  }
  var isWide = window.innerWidth > 1000;


  $( "#dialog" ).dialog( "option", "width", isWide? "600":"350" );
  $( "#dialog" ).dialog( "option", "height", isWide? "500":"300" );

  var img = {w:800,h:486};

  $( "#dialog" ).dialog( "open" );
  var dialog = {w:$( "#dialog" ).width(),h:$( "#dialog" ).height()};
  var realImg = {w:$( "#dialog img" ).width(),h:$( "#dialog img" ).height()};
  if (dialog.w > realImg.w ) {
  //  $( "#dialog img" ).css({"padding-left":((dialog.w - realImg.w)/2)});
  } 
}
*/

function interceptUrl(obj){
  setTimeout(function(){
    generateShop();
  },100);
  //console.log(obj, document.location);
}

function changeColor(hash, index) {
  var item = tStore.layer2[hash];
  console.log("Changing color to ", hash, index);
  var color = item.colors[index];
  //$(".colorchosen").hide();
  //$("#colorchosen" + index).show('slow');
  $(".colorPointer").hide();
  $(".colorchooser .color").removeClass("color-active");
  $(".colorchooser #color"+index).addClass("color-active");
  $(".colorAddToCart").hide();

  lastColor = index;
  var html = "";
  html += "<div style='float:left'><h4>Цвет: " + color.id + "</h4>";
  if (color.d){
    html += "<h4> Диаметр: "+color.d+"</h4>";
  }
  html +='</div>'
  html += "<div class='orderButton buttons' style='float:right'><input type='button' onclick='proceedStoreOrder(true)' value='Добавить в корзину'></div>";
  //if (color.images) {
    // image 1 goes to main, image 2 is a sample
    //$(".big-image img")[0].src=color.images[0];
    html += "<img src='"+ tStore.colorsHash[color.id].path_big +"' class='fabricsample'><br>";
    //html += "<table><tr><td width=50% style='padding:0'><img src='"+color.images[0]+"' style='width:100%;padding:2%'></td><td width=50% style='padding:0'><img src='"+color.images[1]+"' style='width:100%;padding:2%'></td></table>";
  //}
  $(".orderText").html(html);
  if ($(document).width() < 800) {
    $('html, body').animate({
        scrollTop: ($(".orderText").offset().top-50)
    }, 1000);
    //$(".orderButton").show('slow');
  } else {
    //$(".orderButton").show('slow');
  }
  //cart.push({item:item, color: color});
  //drawCart();
  //$("#orderDetails").show();

  return false;
}

function proceedStoreOrder(isShow){
  if (isShow) {
    var hash = document.location.hash;
    hash = hash.replace("#","");
    var item = tStore.layer2[hash];
    var color = item.colors[lastColor];
    $(".colorchosen").hide();
    lastColor = -1;
    //$(".orderButton").hide();
    console.log(item, color, $("#size").val());
    var price = item.price;
    if (item.pricediscount) price = item.pricediscount;
    cart.push({item:item, price:price, color: color, size:$("#size").val()});
    //onAddToCart();
    saveCart();
    if (window.fbq) fbq('track', 'AddToCart');
    onSwitchToCart();
    /*$("#orderDetails").show();
    $('html, body').animate({
          scrollTop: ($("#orderDetails").offset().top - 50)
      }, 1000);
    */
  } else {
    sendOrder(true);
  }
}

function onAddToCart(){
  saveCart();
  if (window.fbq) fbq('track', 'AddToCart');
  res = "<h1>Благодарим!</h1>";
  res += "<div style='font-size:16px;margin-top:20px;color:#a01a29;text-align:center;padding-top:5px;'>Теперь в корзине товаров: <b>" + cart.length + "</b></div>";
  $( "#checkoutDialog" ).html(res);


  $( "#checkoutDialog" ).dialog({
    autoOpen: false,
    modal:true,
    show: {
      effect: "fade",
      duration: 1000
    },
    dialogClass: "no-title",
    hide: {
      effect: "explode",
      duration: 1000
    },
    buttons: {
      "Продолжить покупки": function() {
        $( "#checkoutDialog" ).dialog( "close" );
      },
      "Перейти к оформлению": function() {
        $( "#checkoutDialog" ).dialog( "close" );
        setTimeout(function(){
          onSwitchToCart()
        }, 500);
      }
    }
  });

  $( "#checkoutDialog" ).dialog( "open" );

  //alert('Товар добавлен в корзину'); // TBD: change with dialog
}

function onStoreOrderCancel(){
  if (confirm("Действительно все-все очистить?")) {
    cart = [];
    drawCart();
  }
  //cart.forEach()
}
function scrollGallery(right){
  if (right){
    currentScroll = currentScroll + 400;
  } else {
    currentScroll = currentScroll - 400;
  }
  $(".shop2imagewrapper #imgholder").stop().animate({scrollLeft:currentScroll}, '500', 'swing', function() { 
//   alert("Finished animating");
});
//  .scrollLeft(val);
}

function showSizes(){
    $( "#sizeDialog" ).dialog({
        autoOpen: false,
        modal:true,
        show: {
          effect: "fade",
          duration: 1000
        },
        hide: {
          effect: "explode",
          duration: 1000
        },
        //dialogClass: "no-close",
        /*buttons: {
          "Украина": function() {
            chooseCountry("ukraine", this);
          },
          "Россия": function() {
            chooseCountry("crimea", this);
          }
        }*/
      });
  var isWide = window.innerWidth > 1000;
  $( "#sizeDialog" ).dialog( "option", "width", isWide? "720":"350" );


  $( "#sizeDialog" ).dialog( "open" );
  return false; 
}

function generateBC(hash){
  hash = "" + hash;
  // letf-side
  var html = '<div class="widget_product_categories"><ul class="product-categories">';
  tStore.groups.forEach(function(group) {
    //if (group.upgroup) return;
    if (group.invisible) return;
    var count = 0;
    tStore.layer1.forEach(function(item){
      if (item.group != group.id) return;
      count += 1;
    })
    html += '<li class="cat-item cat-item-348 current-cat"><a href="#group-'+group.id+'">'+(group.title_smaller ? group.title_smaller : group.title)+'</a> <span class="count">('+count+')</span></li>';
  });
  html += "</ul></div>";
  var html2 = '<div class="widget_product_categories"><ul class="product-categories">';
  tStore.categories.forEach(function(cat) {
    var count = 0;
    tStore.layer1.forEach(function(item){
      if (item.categories && item.categories.indexOf(cat.id) >=0) count += 1;
    })
    if (count > 0) html2 += '<li class="cat-item cat-item-348 current-cat"><a href="#cat-'+cat.id+'">'+(cat.title)+'</a> <span class="count">('+count+')</span></li>';
  });
  html2 += "</ul></div>";
  $("#shopBreadcrumbs").html(html);
  $("#shopCategories").html(html2);

  //top BC: 
  /*<div class="breadcrumbs__items">
    <div class="breadcrumbs__content">
    <div class="breadcrumbs__wrap"><div class="breadcrumbs__item"><a href="http://localhost/" class="breadcrumbs__item-link is-home" rel="home" title="Home">Home</a></div>
       <div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="http://localhost/shop/" class="breadcrumbs__item-link" rel="tag" title="Магазин">Магазин</a></div>
       <div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="http://localhost/product-category/spring-autumn/" class="breadcrumbs__item-link" rel="tag" title="Весна-Осень">Весна-Осень</a></div>
       <div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><span class="breadcrumbs__item-target">Короткое, слегка расклешенное, платье с хомутом</span></div>
    </div>
    </div></div>*/

  html = `<div class="breadcrumbs__content">
            <div class="breadcrumbs__wrap">
              <div class="breadcrumbs__item"><a href="#" class="Все категории" rel="home" title="Все категории">Все коллекции</a></div>

            {OTHER}
            </div>
          </div><div class='clear'></div>`;
  var subHtml = '';
  var item, group, cat;
  if (hash.indexOf("group-") == 0 ) {
    group = hash.replace("group-","");
  } else {
    var item = tStore.layer2[hash];
    if (hash.indexOf("cat-") == 0 ) {
      cat = hash.replace("cat-","");
    }
    if (item){
      group = item.group;
    }
  }
  if (group) {
    tStore.groups.forEach(function(g) {
      if (g.id == group) {
        subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="#group-'+g.id+'" class="breadcrumbs__item-link" rel="tag" title="'+g.title+'">'+g.title+'</a></div>';
      }
    })
  }
  if (cat) {
    tStore.categories.forEach(function(g) {
      if (g.id == cat) {
        subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="#cat-'+g.id+'" class="breadcrumbs__item-link" rel="tag" title="'+g.title+'">'+g.title+'</a></div>';
      }
    })
  }
  if (item) {
    subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="#'+item.id+'" class="breadcrumbs__item-link" rel="tag" title="'+item.title+'">'+item.title+'</a></div>';
  }
  html = html.replace(/\{OTHER\}/, subHtml);
  
  $(".shopTopBreadcrumbs").html(html);
}

  /*<div id="product-1994" class="post-1994 product type-product status-publish has-post-thumbnail product_cat-spring-autumn has-thumb first instock sale shipping-taxable purchasable product-type-simple">

  <div class="row"><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><div class="single-image-container">
  <div class="single-product-images single-product-images-horizontal" id="jssor_1" style="width: 570px; height: 1079.68px; visibility: visible;" jssor-slider="true">
          
        <!-- Loading Screen -->
    

    
    <!-- Thumbnail Navigator -->
    
  <div style="position: absolute; top: 0px; left: 0px; width: 378px; height: 716px; transform-origin: 0px 0px 0px; transform: scale(1.50794);"><div class="single-product-images single-product-images-horizontal" style="width: 378px; height: 716px; visibility: visible; display: block; position: relative; top: 0px; left: 0px; overflow: visible;"><div class="enlarge"></div><div data-u="loading" style="top: 0px; left: 0px; width: 378px; height: 575px; display: none;">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
    </div><div data-u="slides" class="single-product-main_image" style="width: 378px; height: 575px; z-index: 0; position: absolute;"><div style="position: absolute; z-index: 0; pointer-events: none;"></div></div><div data-u="slides" class="single-product-main_image" style="width: 378px; height: 575px; z-index: 0; position: absolute; overflow: hidden;"><div style="top: 0px; left: 0px; width: 378px; height: 575px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0; display: none;"></div>
      <br>
<b>Notice</b>:  WC_Product::get_gallery_attachment_ids is <strong>deprecated</strong> since version 3.0! Use WC_Product::get_gallery_image_ids instead. in <b>/Users/akve/work/tubaduba/wp-includes/functions.php</b> on line <b>3831</b><br>
<div class="easyzoom is-ready" style="top: 0px; left: 0px; width: 378px; height: 575px; position: absolute; overflow: hidden;">
<a href="http://localhost/wp-content/uploads/2017/04/sleep_04-2.jpg" style="display: block; top: 0px; left: 0px; width: 378px; height: 575px; position: relative;">
<img data-u="image" src="http://localhost/wp-content/uploads/2017/04/sleep_04-2.jpg" border="0" style="top: 0px; left: 0px; width: 378px; height: 575px; position: absolute;">
</a>
<img data-u="thumb" src="http://localhost/wp-content/uploads/2017/04/sleep_04-2.jpg" style="display: none;">
<div data-u="loading" style="top: 0px; left: 0px; width: 378px; height: 575px; z-index: 1000; display: none;">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
    </div></div>
<div class="easyzoom" style="top: 0px; left: 0px; width: 378px; height: 575px; position: absolute; overflow: hidden; transform: translate3d(378px, 0px, 0px);">
<a href="http://localhost/wp-content/uploads/2017/04/sleep_01-1.jpg" style="display: block; top: 0px; left: 0px; width: 378px; height: 575px; position: relative;">
<img data-u="image" src="http://localhost/wp-content/uploads/2017/04/sleep_01-1.jpg" border="0" style="top: 0px; left: 0px; width: 378px; height: 575px; position: absolute;">
</a>
<img data-u="thumb" src="http://localhost/wp-content/uploads/2017/04/sleep_01-1.jpg" style="display: none;">
<div data-u="loading" style="top: 0px; left: 0px; width: 378px; height: 575px; z-index: 1000; display: none;">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
    </div></div>
<div class="easyzoom" style="top: 0px; left: 0px; width: 378px; height: 575px; position: absolute; overflow: hidden; transform: translate3d(378px, 0px, 0px);">
<a href="http://localhost/wp-content/uploads/2017/04/sleep_02-1.jpg" style="display: block; top: 0px; left: 0px; width: 378px; height: 575px; position: relative;">
<img data-u="image" src="http://localhost/wp-content/uploads/2017/04/sleep_02-1.jpg" border="0" style="top: 0px; left: 0px; width: 378px; height: 575px; position: absolute;">
</a>
<img data-u="thumb" src="http://localhost/wp-content/uploads/2017/04/sleep_02-1.jpg" style="display: none;">
<div data-u="loading" style="top: 0px; left: 0px; width: 378px; height: 575px; z-index: 1000; display: none;">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
    </div></div>
<div class="easyzoom" style="top: 0px; left: 0px; width: 378px; height: 575px; position: absolute; overflow: hidden; transform: translate3d(378px, 0px, 0px);">
<a href="http://localhost/wp-content/uploads/2017/04/sleep_04-1.jpg" style="display: block; top: 0px; left: 0px; width: 378px; height: 575px; position: relative;">
<img data-u="image" src="http://localhost/wp-content/uploads/2017/04/sleep_04-1.jpg" border="0" style="top: 0px; left: 0px; width: 378px; height: 575px; position: absolute;">
</a>
<img data-u="thumb" src="http://localhost/wp-content/uploads/2017/04/sleep_04-1.jpg" style="display: none;">
<div data-u="loading" style="top: 0px; left: 0px; width: 378px; height: 575px; z-index: 1000; display: none;">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
    </div></div>
    </div><div data-u="thumbnavigator" class="jssort01-99-66" style="left: 0px; bottom: 0px; width: 378px; height: 120px; visibility: visible;" jssor-slider="true">
      <!-- Thumbnail Item Skin Begin -->
      
      
      
      <!-- Thumbnail Item Skin End -->
    <div style="position: absolute; top: 0px; left: 0px; width: 378px; height: 120px; transform-origin: 0px 0px 0px; transform: scale(1);"><div class="jssort01-99-66" style="left: 0px; bottom: 0px; width: 378px; height: 120px; visibility: visible; display: block; position: relative; top: 0px; overflow: visible;"><div data-u="slides" style="position: absolute; overflow: hidden; left: -0.5px; top: 0px; width: 379px; height: 120px; z-index: 0;"><div style="position: absolute; z-index: 0; pointer-events: none;"></div></div><div data-u="slides" style="position: absolute; overflow: hidden; left: -0.5px; top: 0px; width: 379px; height: 120px; z-index: 0;"><div style="top: 0px; left: 0px; width: 79px; height: 120px; position: absolute; background-color: rgb(0, 0, 0); opacity: 0;"></div>
        
      <div style="top: 0px; left: 0px; width: 79px; height: 120px; position: absolute; overflow: hidden;"><div data-u="prototype" class="p pav" style="height: 120px; width: 79px; left: 0px; top: 0px;">
          <div class="w">
            <img data-u="thumb" src="http://localhost/wp-content/uploads/2017/04/sleep_04-2.jpg" class="t" style="">
          </div>
          <div class="c"></div>
        </div><div style="top: 0px; left: 0px; width: 79px; height: 120px; z-index: 1000; display: none;"></div></div><div style="top: 0px; left: 0px; width: 79px; height: 120px; position: absolute; overflow: hidden; transform: translate3d(100px, 0px, 0px);"><div data-u="prototype" class="p" style="height: 120px; width: 79px; left: 0px; top: 0px;">
          <div class="w">
            <img data-u="thumb" src="http://localhost/wp-content/uploads/2017/04/sleep_01-1.jpg" class="t" style="">
          </div>
          <div class="c"></div>
        </div><div style="top: 0px; left: 0px; width: 79px; height: 120px; z-index: 1000; display: none;"></div></div><div style="top: 0px; left: 0px; width: 79px; height: 120px; position: absolute; overflow: hidden; transform: translate3d(200px, 0px, 0px);"><div data-u="prototype" class="p" style="height: 120px; width: 79px; left: 0px; top: 0px;">
          <div class="w">
            <img data-u="thumb" src="http://localhost/wp-content/uploads/2017/04/sleep_02-1.jpg" class="t" style="">
          </div>
          <div class="c"></div>
        </div><div style="top: 0px; left: 0px; width: 79px; height: 120px; z-index: 1000; display: none;"></div></div><div style="top: 0px; left: 0px; width: 79px; height: 120px; position: absolute; overflow: hidden; transform: translate3d(300px, 0px, 0px);"><div data-u="prototype" class="p" style="height: 120px; width: 79px; left: 0px; top: 0px;">
          <div class="w">
            <img data-u="thumb" src="http://localhost/wp-content/uploads/2017/04/sleep_04-1.jpg" class="t" style="">
          </div>
          <div class="c"></div>
        </div><div style="top: 0px; left: 0px; width: 79px; height: 120px; z-index: 1000; display: none;"></div></div></div><span u="arrowleft" class="jssora11l" style="display: none;"></span><span u="arrowright" class="jssora11r" style="display: none;"></span></div></div></div></div></div></div>
  
  <span class="onsale">Sale</span>
</div></div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <div class="summary entry-summary">

    <h2 itemprop="name" class="product_title entry-title">Короткое, слегка расклешенное, платье с хомутом</h2>
<p class="price"><del><span class="woocommerce-Price-amount amount">695<span class="woocommerce-Price-currencySymbol">₴</span></span></del> <ins><span class="woocommerce-Price-amount amount">666<span class="woocommerce-Price-currencySymbol">₴</span></span></ins></p>
<div class="product_meta">

  
  
    <span class="sku_wrapper">Код: <span class="sku" itemprop="sku">shortsmallklesh</span></span>

    <span class="posted_in">Коллекция: <a href="http://localhost/product-category/spring-autumn/" rel="tag">Весна-Осень</a></span>
  
  
</div>

<div class="woocommerce-product-details__short-description">
    <p>Платье для миниатюрных принцесс) <br>  Небольшой клеш позволяет чувствовать себя максимально свободно и легко))<br>
Идеально подходит как для волшебных прогулок, так и для волшебных снов))<br>
Создано с любовью и легкостью <br> Материал: Ткань-ТУБА 95% хлопок,5% эластан<br>Размеры: 42-52<br>
(Цена соответствует размерам 42-48)<br>
 (см. <a href="'http://tuba-duba.com/dress-table-size/'">таблица размеров</a>)</p>
</div>

  
  <form class="cart" method="post" enctype="multipart/form-data">
    <div class="">
      <div class="sizechooser">
        <select name="custom_options[size]" id="custom__size">
          <option value="">-- размер --</option>
          <option>42</option>
          <option>44</option>
          <option>46</option>
          <option>48</option>
          <option>50</option>
          <option>52</option>
          <option>54</option>
        </select>
      </div>
      <div class="colorchooser">

      </div>
    </div>
    <div style="clear:both">

        
    </div>
    <input type="hidden" name="custom_options[color]" id="co_color" value="">

    <script>
    (function ($) {
      window._jq = $;
})();
      function onBeforeAddToCart(){
        if (!window._jq('#custom__size').val()) {
          alert('Выберите, пожалуйста, свой размер');
          return false;
        }
        if (window._jq(".colorchooser .color").length >0) {
          if (!window._jq("#co_color").val()) {
            alert('Выберите, пожалуйста, цвет');
            return false;
          }
        }
      }

      function chooseColor(slug,name){
        window._jq(".colorchooser .color").removeClass("color-active");
        window._jq("#color__" + slug).addClass("color-active");
        window._jq("#co_color").val(name);
      }
    </script>


    <button type="submit" name="add-to-cart" value="1994" class="single_add_to_cart_button button alt" onclick="return onBeforeAddToCart()">В корзину</button>

      </form>

  
<button type="button" class="button tm-woowishlist-button btn btn-default tm-woowishlist-button-single" data-id="1994" data-nonce="2a26f8e141"><span class="tm_woowishlist_product_actions_tip"><span class="text">Add to Wishlist</span></span></button>
<div class="woo-social-buttons"><span class="smsb_facebook custom"><a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/product/korotkoe_slegka_raskleshennoe_plate_s_homutom/" target="_blank"><img src="your_website_url_here/wp-content/uploads/2016/02/spacer.gif" alt="Facebook"></a></span><span class="smsb_twitter custom"><a href="https://twitter.com/intent/tweet?source=webclient&amp;original_referer=http://localhost/product/korotkoe_slegka_raskleshennoe_plate_s_homutom/&amp;text=Короткое, слегка расклешенное, платье с хомутом&amp;url=http://localhost/product/korotkoe_slegka_raskleshennoe_plate_s_homutom/" target="_blank"><img src="your_website_url_here/wp-content/uploads/2016/02/spacer.gif" alt="Twitter"></a></span><span class="smsb_googleplus custom"><a href="https://plus.google.com/share?url=http://localhost/product/korotkoe_slegka_raskleshennoe_plate_s_homutom/" target="_blank"><img src="your_website_url_here/wp-content/uploads/2016/02/spacer.gif" alt="Google Plus"></a></span><span class="smsb_pinterest custom"><a href="http://pinterest.com/pin/create/bookmarklet/?media=http://localhost/wp-content/uploads/2017/04/sleep_04-2.jpg&amp;url=http://localhost/product/korotkoe_slegka_raskleshennoe_plate_s_homutom/&amp;title=Короткое, слегка расклешенное, платье с хомутом&amp;description=Короткое, слегка расклешенное, платье с хомутом" target="_blank"><img src="your_website_url_here/wp-content/uploads/2016/02/spacer.gif" alt="Pinterest"></a></span><span class="smsb_linkedin custom"><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://localhost/product/korotkoe_slegka_raskleshennoe_plate_s_homutom/&amp;title=Короткое, слегка расклешенное, платье с хомутом&amp;summary=&amp;source=" target="_blank"><img src="your_website_url_here/wp-content/uploads/2016/02/spacer.gif" alt="Linkedin"></a></span><div style="clear:both"></div></div></div>
  </div><!-- .summary -->

  
  <div class="woocommerce-tabs wc-tabs-wrapper">
    <ul class="tabs wc-tabs" role="tablist">
              <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
          <a href="#tab-description">Описание</a>
        </li>
              <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
          <a href="#tab-reviews">Обзоры (0)</a>
        </li>
          </ul>
          <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="display: block;">
        

<p>Платье для миниатюрных принцесс) <br>  Небольшой клеш позволяет чувствовать себя максимально свободно и легко))<br>
Идеально подходит как для волшебных прогулок, так и для волшебных снов))<br>
Создано с любовью и легкостью <br> Материал: Ткань-ТУБА 95% хлопок,5% эластан<br>Размеры: 42-52<br>
(Цена соответствует размерам 42-48)<br>
 (см. <a href="http://tuba-duba.com/dress-table-size/">таблица размеров</a>)</p>
      </div>
          <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews" style="display: none;">
        <div id="reviews">
  <div id="comments">
    <h3>Reviews</h3>

    
      <p class="woocommerce-noreviews">There are no reviews yet.</p>

      </div>

  
    <div id="review_form_wrapper" class="row">
      <div id="review_form" class="col-lg-6">
          <div id="respond" class="comment-respond">
    <h3 id="reply-title" class="comment-reply-title">Be the first to review “Короткое, слегка расклешенное, платье с хомутом” <small><a rel="nofollow" id="cancel-comment-reply-link" href="/product/korotkoe_slegka_raskleshennoe_plate_s_homutom/#respond" style="display:none;">Cancel reply</a></small></h3>      <form action="http://localhost/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
        <p class="comment-form-rating"><span class="for_rating">Your Rating<span class="required">*</span></span>
                    <p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p><select name="rating" id="rating" style="display: none;">
                      <option value="">Rate…</option>
                      <option value="5">Perfect</option>
                      <option value="4">Good</option>
                      <option value="3">Average</option>
                      <option value="2">Not that bad</option>
                      <option value="1">Very Poor</option>
                    </select></p><p class="comment-form-comment"><label for="comment">Your Review <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p><p class="form-submit"><button name="submit" type="submit" id="submit" class="submit button">Submit</button> <input type="hidden" name="comment_post_ID" value="1994" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="cee7169b81"><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
      </form>
      </div><!-- #respond -->
        </div>
    </div>

  
  <div class="clear"></div>
</div>


      </div>
      </div>


  <div class="related products">

    <h1><span>Похожие</span> товары</h1>
    <div class="row products">
      
        <div class="first swiper-slide post-1995 product type-product status-publish has-post-thumbnail product_cat-spring-autumn has-thumb  instock shipping-taxable purchasable product-type-simple">

  <div class="block_product_thumbnail"><a href="http://localhost/product/Korotkoe_plate_s_kapyushonom_i_rukavami_/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="1" height="1" src="http://localhost/wp-content/uploads/2017/04/3.-Baklagan-factura_sh.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a></div><a href="http://localhost/product/Korotkoe_plate_s_kapyushonom_i_rukavami_/" class="woocommerce-loop-product__title">Короткое платье с капюшоном и рукавами ¾</a>
  <span class="price"><span class="woocommerce-Price-amount amount">655<span class="woocommerce-Price-currencySymbol">₴</span></span></span>
<div class="block_wishlist_compare"><button type="button" class="button tm-woowishlist-button btn btn-default" data-id="1995" data-nonce="3eb52d8435"><span class="tm_woowishlist_product_actions_tip"><span class="text">Add to Wishlist</span></span></button></div>
</div>

      
        <div class="swiper-slide post-2000 product type-product status-publish has-post-thumbnail product_cat-spring-autumn has-thumb last instock shipping-taxable purchasable product-type-simple">

  <div class="block_product_thumbnail"><a href="http://localhost/product/Korotkoe_plate_s_kapyushonom/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="1" height="1" src="http://localhost/wp-content/uploads/2016/10/withsleevsandhood6-2.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a></div><a href="http://localhost/product/Korotkoe_plate_s_kapyushonom/" class="woocommerce-loop-product__title">Короткое платье с капюшоном</a>
  <span class="price"><span class="woocommerce-Price-amount amount">645<span class="woocommerce-Price-currencySymbol">₴</span></span></span>
<div class="block_wishlist_compare"><button type="button" class="button tm-woowishlist-button btn btn-default" data-id="2000" data-nonce="1ae7374408"><span class="tm_woowishlist_product_actions_tip"><span class="text">Add to Wishlist</span></span></button></div>
</div>

      
        <div class="first swiper-slide post-1990 product type-product status-publish has-post-thumbnail product_cat-spring-autumn has-thumb  instock shipping-taxable purchasable product-type-simple">

  <div class="block_product_thumbnail"><a href="http://localhost/product/Plate_super-KLESH_s_homutom/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="1" height="1" src="http://localhost/wp-content/uploads/2017/04/Biruza.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a></div><a href="http://localhost/product/Plate_super-KLESH_s_homutom/" class="woocommerce-loop-product__title">Платье супер-КЛЕШ с хомутом</a>
  <span class="price"><span class="woocommerce-Price-amount amount">990<span class="woocommerce-Price-currencySymbol">₴</span></span></span>
<div class="block_wishlist_compare"><button type="button" class="button tm-woowishlist-button btn btn-default" data-id="1990" data-nonce="544becfb0a"><span class="tm_woowishlist_product_actions_tip"><span class="text">Add to Wishlist</span></span></button></div>
</div>

      
        <div class="swiper-slide post-2003 product type-product status-publish has-post-thumbnail product_cat-spring-autumn has-thumb last instock shipping-taxable purchasable product-type-simple">

  <div class="block_product_thumbnail"><a href="http://localhost/product/TUBA-kofta_s_krasivim_homutom/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="1" height="1" src="http://localhost/wp-content/uploads/2016/11/5.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a></div><a href="http://localhost/product/TUBA-kofta_s_krasivim_homutom/" class="woocommerce-loop-product__title">ТУБА-кофта с красивым хомутом</a>
  <span class="price"><span class="woocommerce-Price-amount amount">485<span class="woocommerce-Price-currencySymbol">₴</span></span></span>
<div class="block_wishlist_compare"><button type="button" class="button tm-woowishlist-button btn btn-default" data-id="2003" data-nonce="7113d3218c"><span class="tm_woowishlist_product_actions_tip"><span class="text">Add to Wishlist</span></span></button></div>
</div>

      
    </div>
  </div>


</div><!-- #product-1994 -->


    </div>*/
function generatePage2(hash){

  var singleImage = `<div class="easyzoom"><a href="IMAGE"><img data-u="image" src="IMAGE"></a><img data-u="thumb" src="IMAGETHUMB"></div>`;

  var htmlImages = `  
      <div class="single-product-images single-product-images-horizontal"
           id="jssor_1"
           style="width: width: 378px;height:716px;">
          <div class="enlarge"></div>
          <!-- Loading Screen -->
          <div data-u="loading">
            <div
              style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
          </div>

          <div data-u="slides" class="single-product-main_image"
               style="width: 378px; height: 575px;">
              IMAGETHUMBS
          </div>
          <!-- Thumbnail Navigator -->
          <div data-u="thumbnavigator" class="jssort01-99-66"
               style="left: 40px; bottom: 0;width: 378px; height: 120px;">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides">
              <div data-u="prototype" class="p"
                   style="height: 120px; width: 79px">
                <div class="w">
                  <div data-u="thumbnailtemplate" class="t"></div>
                </div>
                <div class="c"></div>
              </div>
            </div>
            <span u="arrowleft" class="jssora11l"></span>
            <span u="arrowright" class="jssora11r"></span>
            <!-- Thumbnail Item Skin End -->
            
          </div>
      </div>`;

  var price = `<p class="price"><del><span class="woocommerce-Price-amount amount">PRICEDISCOUNT<span class="woocommerce-Price-currencySymbol">₴</span></span></del> <ins><span class="woocommerce-Price-amount amount">PRICE<span class="woocommerce-Price-currencySymbol">₴</span></span></ins></p>`;
  var priceSimple = `<p class="price"><ins><span class="woocommerce-Price-amount amount">PRICE<span class="woocommerce-Price-currencySymbol">₴</span></span></ins></p>`;

  var newHTML = `
  <div class='woocommerce'><div id="product" class="product type-product status-publish has-post-thumbnail product_cat-spring-autumn has-thumb first instock sale shipping-taxable purchasable product-type-simple">

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="single-image-container">
          IMAGECONTAINER
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="summary entry-summary">

          <h2 itemprop="name" class="product_title entry-title">TITLE</h2>
          PRICE
      <!--<div class="product_meta">
          <span class="sku_wrapper">Код: <span class="sku" itemprop="sku">SKU</span></span>
      </div>-->

      <div class="woocommerce-product-details__short-description">
          <p>DESCRIPTION</p>
          
      </div>
      FORM
    </div>
  </div></div>
    `;

  $(".shopFirst").hide('slow');
  generateBC(hash);
  if (window.fbq) fbq('track', 'ViewContent');
  var res = "";
  var item;
  if (!tStore.layer2[hash]) {
    res = "Товар не найден";
    $(".shopSecond .inner").html(res);
  } else {
    item = tStore.layer2[hash];

    var images = "";
      item.images.forEach(function(img, idx){
            if (idx > 7) return;
            images += singleImage.replace(/IMAGETHUMB/g, img.path).replace(/IMAGE/g, img.path);
      });
      htmlImages = htmlImages.replace(/IMAGETHUMBS/g, images);
      htmlImages = htmlImages.replace(/JSSORINDEX/g, JSSORINDEX);
      var pricetext;
      if (item.pricediscount) {
        htmlImages +='<span class="onsale">Sale</span>';
        pricetext = price.replace(/PRICEDISCOUNT/, item.pricediscount).replace(/PRICE/, item.price);
      } else {
        pricetext = priceSimple.replace(/PRICE/, item.price);
      }
      newHTML = newHTML.replace(/IMAGECONTAINER/g, htmlImages);
      newHTML = newHTML.replace(/PRICE/g, pricetext);
      newHTML = newHTML.replace(/TITLE/g, item.title);
      newHTML = newHTML.replace(/DESCRIPTION/g, item.description);

      var form = "<div class='product-form'>";
      var sizes = "";
      if (item.sizes == "numbers") {
        var ss = [42,44,46,48,50,52,54];
        sizes = "<select id='size' name='size' class='sizes-selector'>";
        ss.forEach(function(s){sizes += "<option>"+s+"</option>"});
        sizes +="</select>";
        sizes += "&nbsp;<a href='#' onclick='showSizes();return false;' title='таблица размеров'><i class='fa fa-info'></i></a>";
      } else {
        sizes = "в зависимости от цвета. <br>см. <a href='#' onclick='showSizes();return false;'>таблица размеров</a>";
      }

      if (item.sizes == "oversize") {
        sizes = "OVERSIZE <br>Длина ткани по кругу 70 см<br>Тянется на любой размер ";
      }

      form +="<table><tr><td>Размер:</td><td>"+sizes+"</td></tr>";

      form += "<tr><td>Цвет:</td><td><div class='colorchooser'>";
        //res += "<div class='colorPointerMobile'>Выберите цвет &raquo;</div>";

      var colorGroups = {one:[],two:[], three:[]};
      item.colors.forEach(function(color, index){
        if (color.invisible || !color.id) return;
        var d = parseInt(color.d);
        if (color.d < 51) {
          colorGroups.one.push({color:color, index:index});
        } else {
          if (color.d > 57) {
            colorGroups.three.push({color:color, index:index});
          } else {
            colorGroups.two.push({color:color, index:index});
          }
        }
      });
      var showGroup = function(group, header) {
        //form +="<div style='clear:both'>"+header+"</div>";
        group.forEach(function(c){
          var color = c.color;
          var index = c.index;
          var bg="";//color.color;
          if (tStore.colorsHash[color.id]) {
            var path = tStore.colorsHash[color.id].path;
            if (path.indexOf("/") <0) {
              path = "/i/colors/" + path;
            }
            if (!path) path = tStore.colorsHash[color.id].path_big;
            bg += ' url("'+path+'")';
          } else {
            if (color.images && color.images.length>0) bg += ' url("'+color.images[0]+'")';
          }
          form += "<a class='color' id='color"+index+"' title='"+color.id+"' onclick='changeColor(\""+hash+ "\","+index+")' style='background:"+bg+";background-size:32px 32px;'>";
          form += "</a>"
        })
      }
      if (colorGroups.one.length > 0) showGroup(colorGroups.one,'Узкие');
      if (colorGroups.two.length > 0) showGroup(colorGroups.two,'Средние');
      if (colorGroups.three.length > 0) showGroup(colorGroups.three,'Широкие');


      form += "</div></td></tr></table>";
      //res += "<div class='pricetext'>" + item.pricetext + "</div>";
      form += "<div class='colorAddToCart'><div class='orderButton buttons' style='float:right'><input type='button' onclick='alert(\"Выберите, пожалуйста, сначала цвет\")' value='Добавить в корзину'></div></div>";
      form += "<div class='orderText'></div>"
      form += "<div style='clear:both;'></div>";

      newHTML = newHTML.replace(/FORM/g, form);



      res += newHTML;
      $(".shopSecond .inner").html(res);

      initJSSOR();
      prefillOrder();
      //$(".shopSecond").show('slow');
 
  }
  /*if (cart.length ) {
    drawCart();
    $("#orderDetails").show();
    $("#orderForm").show();
  }*/

  $(".shopSecond").show('slow');
  $("#sidebar").hide();
  $(".sidebar-expander").show();

}

var isFirstShopLoaded = false;
function generatePage1(groupHash){

  var isAlreadyFirst = false;//$(".shopFirst:visible").length > 0;
  if (!isAlreadyFirst || !isFirstShopLoaded) {
    console.log("...");
    $(".shopSecond").hide('slow');

    $(".shopFirst").show();
    var res = "";
    generateBC(groupHash);
    if (groupHash.indexOf("group-") !=0) {

        if (groupHash.indexOf("cat-") ==0) {
          var cat = groupHash.replace("cat-","");
          res += '<div class="woocommerce">';

          var alike = [];
          var alikeGroups = [];
          // this is the search :) 
          tStore.layer1.forEach(function(item){
            if (item.categories.indexOf(cat) >=0) {
                alike.push(item);
                alikeGroups.push(item.group);
            }
          });
          tStore.groups.forEach(function(group) {
            if (group.invisible || alikeGroups.indexOf(group.id) <0) return;
            res += "<h2 class='cat-group-header'>Коллекция: " + group.title + "</h2><div class='row products'>"
            alike.forEach(function(item){
                if (item.group != group.id) return;
                var r = `<div class="first col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 post-1983 product type-product status-publish has-post-thumbnail product_cat-tubes has-thumb  instock shipping-taxable purchasable product-type-simple">
                  <div class="block_product_thumbnail"><a href="{URL}" onclick='interceptUrl(this)' class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="1" height="1" src="{IMAGE}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a></div><a href="{URL}" onclick='interceptUrl(this)' class="woocommerce-loop-product__title">{TITLE}</a>
                  {PRICE}
                </div>`;
                var priceSimple = `<span class="price"><span class="woocommerce-Price-amount amount">{PRICE}<span class="woocommerce-Price-currencySymbol">₴</span></span></span>`;
                var priceDiscount = `<span class="price"><del><span class="woocommerce-Price-amount amount">{PRICE}<span class="woocommerce-Price-currencySymbol">₴</span></span></del> <ins><span class="woocommerce-Price-amount amount">{PRICEDISCOUNT}<span class="woocommerce-Price-currencySymbol">₴</span></span></ins></span>`;
                // '
                  r = r.replace(/\{URL\}/g,'#' + item.id);
                  r = r.replace(/\{TITLE\}/g, item.title);
                  console.log(item);
                  if (!item.images.length) { 
                    r = r.replace(/\{IMAGE\}/g, '/wp-content/plugins/woocommerce/assets/images/placeholder.png');
                  } else {
                    r = r.replace(/\{IMAGE\}/g, item.images[0].path);
                  }
                  if (item.pricediscount) {
                    priceDiscount = priceDiscount.replace("{PRICE}", item.price);
                    priceDiscount = priceDiscount.replace("{PRICEDISCOUNT}", item.pricediscount);
                    r = r.replace("{PRICE}", priceDiscount);
                  } else {
                    priceSimple = priceSimple.replace("{PRICE}", item.price);
                    r = r.replace("{PRICE}", priceSimple);
                    //res += "<div style='display:inline;'>"+item.price+"</div>";
                  }
                  res += r;
            });
            res += '</div>';
          })
      } else {
      // this is root cats list
          res += '<div class="woocommerce"><h2>Коллекции</h2>';
          var showGroups = true;
          var showCats = true;
          if (showGroups) {
              res += '<div class="row products">';
              tStore.groups.forEach(function(group) {
                if (group.invisible) return;

                var r = `<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-category product">
                  <a href="{HREF}" onclick='interceptUrl(this)'>
                    <img src="{IMAGE}" alt="{TITLE}" width="270" height="306"> 
                    <h3>{TITLE} <mark class="count"><span class="count__number">{COUNT}</span> товаров </mark> </h3>
                  </a>
                </div>`;
                if (group.img) {
                  r = r.replace(/\{IMAGE\}/g, group.img);
                } else {
                  r = r.replace(/\{IMAGE\}/g, '/wp-content/plugins/woocommerce/assets/images/placeholder.png');
                }
                r = r.replace("{HREF}",'#group-'+group.id);
                r = r.replace(/\{TITLE\}/g, group.title);
                var count = 0;
                tStore.layer1.forEach(function(item){
                  if (item.group != group.id) return;
                  count += 1;
                });
                r = r.replace("{COUNT}", count);
                if (count >0) {
                  res += r;

                }
            })
            res += "</div>";
          }

          if (showCats) {
              res += '<h2>Категории</h2><div class="row products">';
              tStore.categories.forEach(function(group) {
                if (group.invisible) return;

                var r = `<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-category product">
                  <a href="{HREF}" onclick='interceptUrl(this)'>
                    <img src="{IMAGE}" alt="{TITLE}" width="270" height="306"> 
                    <h3>{TITLE} <mark class="count"><span class="count__number">{COUNT}</span> товаров </mark> </h3>
                  </a>
                </div>`;
                if (group.path) {
                  r = r.replace(/\{IMAGE\}/g, group.path);
                } else {
                  r = r.replace(/\{IMAGE\}/g, '/wp-content/plugins/woocommerce/assets/images/placeholder.png');
                }
                r = r.replace("{HREF}",'#cat-'+group.id);
                r = r.replace(/\{TITLE\}/g, group.title);
                var count = 0;
                tStore.layer1.forEach(function(item){
                  if (item.categories.indexOf(group.id) <0) return;
                  count += 1;
                });
                r = r.replace("{COUNT}", count);
                if (count >0) {
                  res += r;
                }
            })
            res += "</div>";
          }
          res += "</div>";
      }
    } else {
        // add thumbnails? 

        if (tStore.groups) {
          res += '<div class="woocommerce"><div class="row products">';

          tStore.groups.forEach(function(group) {
            if (group.invisible || group.id != groupHash.replace("group-","")) return;
            tStore.layer1.forEach(function(item){
              if (item.group != group.id) return;
                var r = `<div class="first col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 post-1983 product type-product status-publish has-post-thumbnail product_cat-tubes has-thumb  instock shipping-taxable purchasable product-type-simple">
                  <div class="block_product_thumbnail"><a href="{URL}" onclick='interceptUrl(this)' class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="1" height="1" src="{IMAGE}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a></div><a href="{URL}" onclick='interceptUrl(this)' class="woocommerce-loop-product__title">{TITLE}</a>
                  {PRICE}
                </div>`;
                var priceSimple = `<span class="price"><span class="woocommerce-Price-amount amount">{PRICE}<span class="woocommerce-Price-currencySymbol">₴</span></span></span>`;
                var priceDiscount = `<span class="price"><del><span class="woocommerce-Price-amount amount">{PRICE}<span class="woocommerce-Price-currencySymbol">₴</span></span></del> <ins><span class="woocommerce-Price-amount amount">{PRICEDISCOUNT}<span class="woocommerce-Price-currencySymbol">₴</span></span></ins></span>`;
                // '
                  r = r.replace(/\{URL\}/g,'#' + item.id);
                  r = r.replace(/\{TITLE\}/g, item.title);
                  console.log(item);
                  if (!item.images.length) { 
                    r = r.replace(/\{IMAGE\}/g, '/wp-content/plugins/woocommerce/assets/images/placeholder.png');
                  } else {
                    r = r.replace(/\{IMAGE\}/g, item.images[0].path);
                  }
                  if (item.pricediscount) {
                    priceDiscount = priceDiscount.replace("{PRICE}", item.price);
                    priceDiscount = priceDiscount.replace("{PRICEDISCOUNT}", item.pricediscount);
                    r = r.replace("{PRICE}", priceDiscount);
                  } else {
                    priceSimple = priceSimple.replace("{PRICE}", item.price);
                    r = r.replace("{PRICE}", priceSimple);
                    //res += "<div style='display:inline;'>"+item.price+"</div>";
                  }
                  res += r;
            });
            
          })
          res += "</div></div>";
        } else {
            tStore.layer1.forEach(function(item){
              res += "<div class='shop1Item'>"
              res +=  "<a href='#"+item.id+"' onclick='interceptUrl(this)'>"+
                  "<div class='fader'>";
              item.images.forEach(function(img){
                res += "<img src='"+img+"'>";
              });
              res += "</div><div class='title'>"+item.title+"</div></a></div>";
            });
          }
        }
  }
    $(".shopFirst .inner").html(res);
    isFirstShopLoaded = true;
  /*if (groupHash) {
    //$("")
    console.log($("#"+groupHash).offset());
    $('html, body').animate({
        scrollTop: ($("#"+groupHash + " h1").offset().top - 130)
    }, 1000);

  }*/

/*  $('.fader').hover(function() {
       $(this).find("img:last").fadeToggle();
  });*/

}



/*
***********************************************************
*/
function dcInit(isThick){
  if ($("#dresschooser").length <=0 ) return;
  if (country == 'ukraine') {
      var addhtml = "";
      addhtml = "<h4>Тип ткани:</h4>";
      addhtml += "<a onclick='dcChangeType(0)' class='button " + (isThick?"":"active") + "'>тонкие</a> | ";
      addhtml += "<a onclick='dcChangeType(1)' class='button " + (isThick?"active":"") + "'>плотные</a>";
      $("#widthchooser").html(addhtml);
      if (isThick) {
        $(".w-thick").show();
        $(".w-light").hide();
      } else {
        $(".w-thick").hide();
        $(".w-light").show();
      }
  }
  $("#colorList").hide("slow");
  var html1 = "";
  var html2 = "";
  var html3 = "";
  config.forEach(function(color, index) {
    var template = "<div style='background-color:{COLOR};color:{FONTCOLOR}' id='scolor{INDEX}' class='singlecolor' onmouseover='onOver({INDEX}, this)' onmouseout='onOut({INDEX}, this)' onclick='onClickColor({INDEX}, this)' title='Нажмите, чтобы добавить в заказ'>&nbsp; {TITLE}<span class='addToOrder' id='addToOrder{INDEX}'>&nbsp;|&nbsp;Добавить</span></div>";
    template = template.replace(/\{COLOR\}/g, color.color);
    template = template.replace(/\{INDEX\}/g, index);
    template = template.replace(/\{FONTCOLOR\}/g, color.fc?"#ffffff":"#000000" );
    template = template.replace(/\{TITLE\}/g, color.title);
    if (color.thick ==1) {
      html1 += template;
    } else {
      if (color.thick == 2) {
        html3 += template
      } else {
        html2 += template;
      }
    }
  });
  $("#colorlist1").html(html1);
  $("#colorlist2").html(html2);
  $("#colorlist3").html(html3);
  $("#colorList").show("slow");

  $("#list1Price").html(country == 'ukraine' ? " 190 грн/м" : " 500 руб/м");
  $("#list2Price").html(country == 'ukraine' ? " 205 грн/м" : " 550 руб/м");
  $("#list3Price").html(country == 'ukraine' ? " 230 грн/м" : " 600 руб/м");


//  $( ".singlecolor" ).tooltip();

  config.forEach(function(color, index) {

    $('#scolor' + index).tooltip({
        content: 'Добавить в заказ',
        show: null, // show immediately
        open: function(event, ui)
        {
            if (typeof(event.originalEvent) === 'undefined')
            {
                return false;
            }
            
            var $id = $(ui.tooltip).attr('id');
            
            // close any lingering tooltips
            $('#' + $id).css('background-color', color.color);
            $('#' + $id).css('padding', '30px');
            $('#' + $id).css('color', color.fc?"#ffffff":"#000000");

            $('div.ui-tooltip').not('#' + $id).remove();
            
            // ajax function to pull in data and add it to the tooltip goes here
        },
        close: function(event, ui)
        {
            ui.tooltip.hover(function()
            {
                $(this).stop(true).fadeTo(400, 1); 
            },
            function()
            {
                $(this).fadeOut('400', function()
                {
                    $(this).remove();
                });
            });
        }
    });
  
    //if (cart.length) {
      //drawCart();
      //$("#orderForm").show();
      //proceedOrder();
    //}
  });

}

function dcChangeType(type) {
  if (type==1) {
    config = configUA_thick;
  } else {
    config = configUA;
  }
  dcInit(type);
  return false;
}

function onOver(index){
//  if (currentState.isFillingForm) return;
  var color = config[index];

  //$("#previewWindow").css({'background':"url('http://tuba-duba.com/" + color.images[0] + "') repeat"});
  //$("#previewWindow").css({'background-color':color.color});  
$("#addToOrder"+index).show();
//  onClickColor(index);
}
function onOut(index) {
  //if (currentState.isFillingForm) return;
  $("#addToOrder"+index).hide();
  //$("#previewWindow").css({'background':"#ffffff"});  
}
function onHideForm(){
$("#formatForm").hide('slow');
}
function onClickColor(index) {
  currentState.isFillingForm = true;
  var color = config[index];
  //'background-color':color.color,
  $("#previewWindow").css({'background':color.color+ " url('http://tuba-duba.com/" + color.images[0] + "') repeat"});
  $("#previewWindow").css({'background-size':'contain'});
  $("#formatForm").hide('slow');
  $("#formatForm #frmColor").html(color.title);
  var variants = "";
  var selectLength = "<span id='currentlen' style='display:none'></span> <select id='length' class='lengthChoose' onchange='showLengthConfirmation("+index+",{INDEXINSIDE}, this)'><option value='0'>Выбрать длину</option>";
  var lengths = [0.5, 0.7, 1, 1.5, 2];
  lengths.forEach(function(l){ selectLength += "<option value='"+l+"'>"+l+" метр"+(l!=1?"a":"")+"</option>"});
  selectLength += "<option value='more'>Больше</option></select>";
  color.widths.forEach(function(width, indexI){
    var template = "<div class='singlevariant'>" + 
            "<div>Ширина: <b>{WIDTH}</b>, плотность: {THICK}. <b>{COST}</b> "+(country=="ukraine"?"грн":"руб")+"/м</div>" +
            "<div>" + selectLength + "&nbsp;<br></div><br>" +
            "<hr><div class='variant-confirm'></div></div>";
    template = template.replace(/\{WIDTH\}/g, width.width);
    template = template.replace(/\{COST\}/g, width.price);
    template = template.replace(/\{INDEX\}/g, index);
    template = template.replace(/\{INDEXINSIDE\}/g, indexI);
    if (color.realthick) {
      template = template.replace(/\{THICK\}/g, color.realthick );
    }
    //template = template.replace(/\{THICK\}/g, color.thick ? "плотная": "тонкая");
    variants += template;
  });
  $("#formatForm #variants").html(variants);
  $("#formatForm").show('slow');
  $('html, body').animate({
        scrollTop: ($("#formatForm").offset().top)
    }, 1000);

}

function calcConfirmationString(len, price, elm){
  if (elm) {
    len = $(elm).val();
  }
  len = len.replace(/[^0-9.]/g, '');
    len = parseFloat(len);
    if (isNaN(len)) len = 0;
  var html = "Вы выбрали " + len + "м на сумму " + parseInt(len * price);
  //console.log(len, width);
  $("#currentlen").val(len);
  $(".confirmationString").html(html);
}

function showLengthConfirmation(index, indexI, element, isFromMore){
  var html = "";
  var len = $(element).val();
  var color = config[index];
  var width = color.widths[indexI];

  if (len == "more") {
      html += "Ваша длина: <input type='text' id='moreinput' placeholder='5м' onkeyup='calcConfirmationString(0, " + width.price + ",this)'>"
  };
  html += "<div class='confirmationString'></div>";
  html += "<div class='buttons'><input type='button' onclick='addToCart("+index+", " + indexI + ")' value='Добавить в корзину'></div>"
  $(".variant-confirm").html(html);
  if (len != "more") {
    calcConfirmationString(len, width.price);
  }
  $(".variant-confirm").show();
}

function addToCart(index, indexI) {
  var color = config[index];
  $(".variant-confirm").hide();
  var width = color.widths[indexI];
  var len = $("#currentlen").val();
  console.log(len);
  if (parseFloat(len) && !isNaN(parseFloat(len))) {
    cart.push({color:color, width:width, len:len});
  }
  //console.log(cart);
  
  onAddToCart();
/*$('html, body').animate({
        scrollTop: ($("#orderForm").offset().top - 50)
    }, 1000);*/
}

function removeFromCart(index){
  cart.splice(index,1);
  drawCart();
}
function onOrderCancel(){
  if (confirm('Очистить заказ?')){
    cart = [];
    drawCart();
  }
}

function proceedOrder(){
  $("#orderDetails").show('slow');
  $("#proceedOrder").hide();
//  $("#oCountry").val(country == "ukraine"?"Украина":(country == "crimea"?"Крым":"Россия"));
  $("#sendOrder").show();
  prefillOrder();
}

function prefillOrder(){
    var data = window.localStorage['ordervalues'] ? window.localStorage['ordervalues'] : {};
    var cookie = window.localStorage['ordervalues'];
    if (cookie) {
      cookie = JSON.parse(cookie);
      $("#oName").val(cookie.oName);
      $("#oHeight").val(cookie.oHeight);
      $("#oLastName").val(cookie.oLastName);
      $("#oEmail").val(cookie.oEmail);
      $("#oPhone").val(cookie.oPhone);
      $("#oSource").val(cookie.oSource);
      //$("#oCountry").val(cookie.oCountry);
      $("#oCity").val(cookie.oCity);
      $("#oAddress").val(cookie.oAddress);
    }
}

function onGiftChange(){
  if ($("#oGift:checked").length > 0 ){
    $("#giftDiv").show();
  } else {
    $("#giftDiv").hide();
  }
  drawCart();
}

function sendOrder(isFromReadyShop){
if (orderInProgress) return;
//if (window.SUPERCOUNTRY && window.SUPERCOUNTRY == "ru") country = "russia";
//if (window.SUPERCOUNTRY && window.SUPERCOUNTRY == "crimea") country = "crimea";
//    $("#oCountry").val(country == "ukraine"?"Украина":(country == "crimea"?"Крым":"Россия"));

  if (cart.length == 0) {
    alert('Заказ пуст, наберите плиз себе товары');
    return;
  }
orderInProgress = true;
  var data = {
    oName: $("#oName").val(),
    oLastName:$("#oLastName").val(),
    oHeight:$("#oHeight").val(),
    oEmail:$("#oEmail").val(),
    oPhone:$("#oPhone").val(),
    oCountry:country,
    oCity:$("#oCity").val(),
    oSource:$("#oSource").val(),
    oComments:$("#oComments").val(),
    oAddress:$("#oAddress").val()
  };

  window.localStorage['ordervalues'] = JSON.stringify(data);



  
  var checks = ["oName", "oHeight", "oLastName", "oEmail", "oPhone", "oCity", "oAddress"];
  for (var i=0;i<checks.length;i++){
    if (!data[checks[i]]) {
      alert("Заполните пожалуйста все поля заказа");
      return;
    }
  }
  checks.push("oComments");
  checks.push("oSource");
  var a = new Date();
  var id= ""+(a.getMonth() + 1) +"-" + a.getDate()+"-" + parseInt(Math.random() * 10000);
  var html="";

  var zakaz = drawCart(true);
  var zakazPlain = drawCart(true, true);

  html += zakaz;


  
  html += "<h4>Ваши детали:</h4><table class='table' cellpadding=3 cellspacing=3>";
  html += "<tr><td>Имя</td><td>" + data.oName + " " + data.oLastName + "</td></tr>";
  html += "<tr><td>Рост</td><td>" + data.oHeight + "</td></tr>";
  html += "<tr><td>Телефон</td><td>" + data.oPhone + "</td></tr>";
  html += "<tr><td>Email</td><td>" + data.oEmail + "</td></tr>";
  html += "<tr><td>Страна</td><td>" + country + "</td></tr>";
  html += "<tr><td>Город</td><td>" + data.oCity + "</td></tr>";
  html += "<tr><td>Адрес</td><td>" + data.oAddress + "</td></tr>";
  //html += "<tr><td>Откуда узнали</td><td>" + data.oSource + "</td></tr>";
  html += "<tr><td>Комментарии</td><td>" + data.oComments + "</td></tr>";
  html += "</table>";
        var htmlEmail = "<h3>Спасибо за заказ:)<br>Его номер " + id  + "</h3>" + html;
  var html="<h3>Спасибо за заказ:)<br>Его номер " + id  + "</h3>" + html;
//http://tuba-duba.com

  data = {
    id: id,
    name : data.oName + " " + data.oLastName,
    height: data.oHeight,
    phone: data.oPhone,
    email: data.oEmail,
    country: country,
    city: data.oCity,
    address: data.oAddress,
    source: data.oSource,
    comments: data.oComments,
    order: zakazPlain,
    time: new Date().toGMTString(),
    body:htmlEmail
  };
  if (country == "ukraine") {
    var phoneOK = false;
    if (data.phone.indexOf("0") == 0 && data.phone.length == 10) {
      data.phone = "+38" + data.phone;
      phoneOK = true;
    }
    if (data.phone.indexOf("3") == 0 && data.phone.length == 12) {
      data.phone = "+" + data.phone;
      phoneOK = true;
    }
    if (data.phone.indexOf("+38") == 0 && data.phone.length == 13) {
      phoneOK = true;
    }
    if (!phoneOK) {
        alert("Проверьте, пожалуйста, телефон. Он, похоже, неверный.");
        return;
    }
  }

  $.post("/sendorder.php", data, function(response){
orderInProgress = false;
    if (window.fbq) fbq('track', 'Purchase', {value: '100', currency: 'UAH'});
    if (response.indexOf("1")>=0) {
      cart = [];
      window.localStorage['cart'] = [];
      $("#orderDetails").html(html);
      $("#orderDetails").show('slow');
      $("#proceedOrder").hide();
      $("#sendOrder").hide();
      $("#lastOrderButtons").hide();
    }
  });
  
}
  
function saveCart(){
  window.localStorage['cart'] = JSON.stringify(cart);
  if (cart.length >0 ) {
    $(".checkout-text").html(cart.length);
    $(".checkout-text").show('bounce');
  } else {
    $(".checkout-text").hide();
  }
  $('.cart-contents .count span').html(cart.length);
  if (cart.length == 0) {
    $('.shopping_cart-dropdown-wrap').html("Ваша корзина пока пуста");
  } else {
    var i = `<li class="woocommerce-mini-cart-item mini_cart_item">
      <span class='title'>TITLE</span><span class="amount">PRICE</span>
      </li>`;
    var carthtml = '';
    var sum = 0;
    cart.forEach(function(item){
      sum += parseInt(item.item.price);
      carthtml += i.replace(/TITLE/,item.item.title).replace(/PRICE/,item.item.pricediscount ? item.item.pricediscount : item.item.price)
    })
    var html = `<div class='widget'><div class='woocommerce'><div class='widget_shopping_cart'><h4>Моя корзина</h4><div class='widget_shopping_cart_content'><ul class="woocommerce-mini-cart cart_list product_list_widget ">
              ` + carthtml + `
            </ul>

  <p class="woocommerce-mini-cart__total total"><strong>Итого:</strong> <span class="woocommerce-Price-amount amount">TOTAL<span class="woocommerce-Price-currencySymbol">₴</span></span></p>

  
  <p class="woocommerce-mini-cart__buttons buttons"><a href="/checkout/" class="button checkout wc-forward">Оформить</a></p></div></div></div></div>
  `;
    html = html.replace(/TOTAL/, sum);
    $('.shopping_cart-dropdown-wrap').html(html);
  }
}
function drawCart(calcOnly, plain){
  saveCart();
  if (!calcOnly) {
    if (cart.length == 0) {
      $("#orderItems").html("Ваша корзина пока пуста :(<br><br>");
      $("#orderForm").hide('slow');
      return;
    }
    $("#orderForm").show('slow');
  }

  var templateTotal = `<div class='woocommerce'><div id="order_review" class="woocommerce-checkout-review-order">
    <table class="shop_table shop_table_responsive woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name" colspan="2">Товар</th>
      <th class="product-quantity">Цвет</th>
      <th class="product-total">Цена</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
              
                ITEMS
              
            </tbody>
  <tfoot>
    <tr class="order-total">
      <th colspan="3">Итого</th>
      <td data-title="Итого" style='text-align:center'><strong><span class="woocommerce-Price-amount amount">TOTAL<span class="woocommerce-Price-currencySymbol">₴</span></span></strong> </td>
      <td></td>
    </tr>
  </tfoot>
</table>
  </div></div>`;
  var itemTemplate = `<tr class="cart_item"><td class="product-thumbnail">
                  <a href="URL"><img width="60" style='width:60px;' src="IMAGE" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a>           </td>
                <td class="product-name" data-title="Товар">
                  <h6><a href="URL">TITLE</a><br> SIZE              </h6>
                </td>
                
                <td class="product-quantity" data-title="Количество">
                COLOR           
                </td>
                <td class="product-total" data-title="Всего">
                  <span class="woocommerce-Price-amount amount">PRICE<span class="woocommerce-Price-currencySymbol">₴</span></span>           </td>
                <td><a href='#' onclick='removeFromCart("INDEX");return false;'><i class='fa fa-remove'></i></a></td>
                </tr>`;

  var html="<table class='table'><tr><th>Ткань/цвет</th><th>Ширина/размер</th><th>Длина</th><th>Цена</th><th>Всего</th><th>&nbsp;&nbsp;&nbsp;</th></tr>";
  if (plain) html = "";
  var sum = 0;
  var hasFabrics = false;
  var hasReady = false;
  console.log("CART", cart);
  cart.forEach(function(c, index){
    if (c.item) {
      hasReady = true;
      return;
    }
    hasFabrics = true;
    sum += parseInt(parseFloat(c.len) * c.width.price);
    var template = "<tr><td>" + c.color.title + 
            //"</td><td>" + (c.width.thick?c.width.thick:"средняя") +
            "</td><td>" + c.width.width + 
            "</td><td>" + c.len +
            "</td><td>" + c.width.price +
            "</td><td>" + parseInt(parseFloat(c.len) * c.width.price) +
            "<td><a href='#' onclick='removeFromCart("+index+");return false;'><img src='/img/DeleteRed.png' width=16 height=16></a></td></tr>";
      if (plain) {
           template = c.color.title + "/" + c.width.width + "/" + c.len + "/" + (parseInt(parseFloat(c.len) * c.width.price)) + " -- ";
      }
    html += template;
  });
  if (!plain) html +="</table>";
  if (!hasFabrics) html = "";
  if (hasReady) {
    if (!plain) html += "<table class='table'><tr><th>Товар</th><th>Цвет</th><th>Размер</th><th>Цена</th><th>&nbsp;&nbsp;&nbsp;</th></tr>";
    cart.forEach(function(c, index){
      if (!c.item) return;
      console.log(c.item);
      sum += parseInt(c.price);
      var template = "<tr><td>" + c.item.title + 
              //"</td><td>" + (c.width.thick?c.width.thick:"средняя") +
              "</td><td>" + c.color.id +
              "</td><td>" + (c.size? c.size: "") + 
              "</td><td>" + c.price +
              "<td><a href='#' onclick='removeFromCart("+index+");return false;'><img src='/img/DeleteRed.png' width=16 height=16></a></td></tr>";
      if (plain) {
           template = c.item.title + "/" + c.color.id + "/" + (c.size? c.size: "") + "/" +  c.price + " -- ";
      }
      html += template;
    });
    if (!plain) html +="</table>";
  }

  if ($("#oGift:checked").length > 0 ){
  }

/*    if ($("#giftCarton:checked").length >0) {
      html += plain ? " + картонная упаковка" : "<p> + картонная упаковка на подарок (30 грн)</p>";
      sum += 30;
    }
    if ($("#giftBox:checked").length >0) {
      html += plain ? " + деревянная упаковка" : "<p> + деревянная упаковка на подарок (100 грн)</p>";
      sum += 100;
    }*/

    var itemsHtml = "";
    cart.forEach(function(c, index){
      if (!c.item) return;
      
      var itemHTML = itemTemplate.replace(/TITLE/, c.item.title);
       itemHTML = itemHTML.replace(/COLOR/, c.color.id);
       itemHTML = itemHTML.replace(/URL/g, '/shop#' + c.item.id);
       itemHTML = itemHTML.replace(/IMAGE/, c.item.images.length? c.item.images[0].path : '');
       itemHTML = itemHTML.replace(/SIZE/, c.size ? 'Размер ' + c.size : '');
       itemHTML = itemHTML.replace(/PRICE/, c.price);
       itemHTML = itemHTML.replace(/INDEX/, index);
       itemsHtml += itemHTML;
    });
    templateTotal = templateTotal.replace(/ITEMS/, itemsHtml);
    templateTotal = templateTotal.replace(/TOTAL/, sum);

  if (!plain) {
    html += "<div>Итого: " + sum + "</div><br>";
  } else {
    html += "\r\nИтого:" + sum;
  }



  if (!calcOnly) {
   $("#orderItems").html(templateTotal);
  }
  return html;
}

function startZoom(){
  var hash = document.location.hash;
  hash = hash.replace("#","");
  var item = tStore.layer2[hash];
  var res = "";
    res += '<center><div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails"><a href="' + item.images[0].path + '">';
    res += '<img src="' + item.images[0].path + '" alt="" width="250" height="385" /></a></div></center>';

    res += '<ul class="zoom-thumbnails">'
    item.images.forEach(function(img, idx){
        if (idx == 0) return;
        if (idx > 7) return;
        res += '<li><a href="' + img.path + '" data-standard="' + img.path + '">';
        res += '<img src="' + img.path + '" alt="" width=40/></a></li>';
    });
    res += '</ul>';

    $( "#zoomDialog" ).html(res);


      $( "#zoomDialog" ).dialog({
        autoOpen: false,
        modal:true,
        show: {
          effect: "fade",
          duration: 1000
        },
        dialogClass: "no-title",
        hide: {
          effect: "explode",
          duration: 1000
        }
        
      });


  var isWide = window.innerWidth > 1000;


  var img = {w:800,h:486};

  $( "#zoomDialog" ).dialog( "option", "width", isWide? "700":"350" );
  $( "#zoomDialog" ).dialog( "option", "height", isWide? "540":"400" );
  $( "#zoomDialog" ).dialog( "open" );
  $('.ui-widget-overlay').on("click", function() {
      //Close the dialog
      $("#zoomDialog").dialog("close");
  });   

  //var dialog = {w:$( "#dialog" ).width(),h:$( "#dialog" ).height()};
  //var realImg = {w:$( "#dialog img" ).width(),h:$( "#dialog img" ).height()};
  //if (dialog.w > realImg.w ) {
  //  $( "#dialog img" ).css({"padding-left":((dialog.w - realImg.w)/2)});
  //} 

    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();


    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.zoom-thumbnails').on('click', 'a', function(e) {
      var $this = $(this);

      e.preventDefault();

      // Use EasyZoom's `swap` method
      api1.swap($this.data('standard'), $this.attr('href'));
    });
}

function checkoutInit(){
  saveCart();
  prefillOrder();
  if ($("#orderDetails").length == 0) return;
  if (window.fbq) fbq('track', 'InitiateCheckout');
  $("#orderDetails").show('slow');
  drawCart();
}

function onSwitchToCart(){
  document.location = "/checkout";
}

/*function onNewCountrySwitch(c){
  chooseCountry(c);
  storeLoaded = false;
  $(".shopFirst").hide();
  generateShop();
  return false;
}*/

window.onhashchange = generateShop;

if(window.attachEvent) {
    window.attachEvent('onload', initCountry);
    //window.attachEvent("hashchange", generateShop, false);
} else {
    if(window.onload) {
        var curronload = window.onload;
        var newonload = function(evt) {
            curronload(evt);
            initCountry();//generateShop(evt);
        };
        window.onload = newonload;
    } else {
        window.onload = initCountry;
    }
}


var JSSORINDEX = 1;
var jssor_1_slider;
/* ORIGINAL */
function initJSSOR(){
  console.log('INITJSS', $('#jssor_1'));
  console.trace()
  delete jssor_1_slider;

  var jssor_options = {orientation: "1", cols: "4", spaceX: "21", spaceY: "21"};
  var jssor_1_options = {
    $Loop: 0,
    $DragOrientation: 1,
    $ThumbnailNavigatorOptions: {
      $Class: $JssorThumbnailNavigator$,
      $Cols: parseInt(jssor_options.cols),
      $SpacingX: parseInt(jssor_options.spaceX),
      $SpacingY: parseInt(jssor_options.spaceY),
      $Orientation: parseInt(jssor_options.orientation),
      $Loop: 0,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$
      }
    }
  };



   jssor_1_slider = new $JssorSlider$( "jssor_" + JSSORINDEX, jssor_1_options ),
  easyzoom = [],
  easyZoomApi = [];
  //JSSORINDEX +=1;

  //responsive code begin
  //you can remove responsive code if you don't want the slider scales while window resizing
  function ScaleSlider() {
      var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
      if ( refSize ) {
          refSize = Math.min( refSize, 960 );
          refSize = Math.max( refSize, 290 );
          jssor_1_slider.$ScaleWidth( refSize );
      }
      else {
          window.setTimeout(ScaleSlider, 30 );
      }
  }
  function zoom() {
    if ( 768 > Math.min( $( window ).width(), screen.width ) ) {
      easyZoomApi.forEach(function( item, i, arr ) {
        if ( item.$image ){
          item.teardown();
        }
      } );
      $( '.single-product-main_image:last > div.easyzoom' ).on( 'click', function( event ) {
        event.preventDefault();
      } );
    } else {
      easyZoomApi.forEach(function( item, i, arr ) {
        if ( !item.$image ){
          item._init();
        }
      } );
    }
  }
  //ScaleSlider();
  //$( window ).bind( "load", ScaleSlider );
  //$( window ).bind( "resize", ScaleSlider );
  //$( window ).bind( "orientationchange", ScaleSlider );

  //$( window ).bind( "resize", zoom );
  //$( window ).bind( "orientationchange", zoom );
  //responsive code end

  var items = [];
  $( '.single-product-main_image:last' ).find( '.easyzoom' ).each(function() {
    items.push( {
      src: $ (this ).find( '> a' ).attr( 'href' )
    } );
  });

  jssor_1_slider.$On( $JssorSlider$.$EVT_STATE_CHANGE, function( slideIndex, progress ){

    if ( !easyzoom.length ) {
      $( '.single-product-main_image:last > div.easyzoom' ).each(function(n){
        easyzoom[n] = $( this ).easyZoom();
        easyZoomApi[n] = easyzoom[n].data('easyZoom');
      });
    }

    if ( 768 > Math.min( $( window ).width(), screen.width ) ) {
      if ( easyZoomApi[slideIndex].$image ){
        easyZoomApi[slideIndex].teardown();
      }
    } else {
      if ( !easyZoomApi[slideIndex].$image ){
        easyZoomApi[slideIndex]._init();
      }
    }

    $( '.single-product-images .enlarge' ).click( function() {

      $.magnificPopup.open( {
        items:items,
        gallery: {
          enabled: true
        },
        type: 'image'
      }, slideIndex );
    });
  });
  // STRANGE FIX... 
  $("#jssor_1 > div").css('width','420px');$("#jssor_1").css('width','420px');
}

function changeCurrentPhoto(id) {
  $(".contact-photos .photo").removeClass("active");
  $(".contact-photos .photo").addClass("inactive");
  $("#photo-"+id).removeClass("inactive");
  $("#photo-"+id).addClass("active");
  $(".contact-info").hide();
  $("#info-"+id).show();
}

function generateWidgets(){
  console.log("widgets to be set...");
  generateBC();
  generateFeatured();
}

function generateFeatured() {
  if (!$(".shopFrontPage")) return;

var res = `<div class="swiper-container woocommerce tm_products_carousel_widget">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper tm-products-carousel-widget-wrapper tm-products-carousel-widget-wrapper">
        <!-- Slides -->
        SLIDES
    </div>
    <div id="swiper-carousel-5a08913f6b0a9-next" class="swiper-button-next tm-products-carousel-widget-button-next" style="display: block;"></div>

    <div id="swiper-carousel-5a08913f6b0a9-prev" class="swiper-button-prev tm-products-carousel-widget-button-prev swiper-button-disabled" style="display: block;"></div>
    <!-- If we need navigation buttons -->
</div>`;
  var r = `<div class="swiper-slide post-2024 product type-product status-publish has-post-thumbnail product_cat-dharma has-thumb  instock sale shipping-taxable purchasable product-type-simple tm-products-carousel-widget-slide swiper-slide-active" style="width: 270px; margin-right: 30px;">

            <div class="block_product_thumbnail"><a href="http://localhost/product/ASTEYA_/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
            <span class="onsale">Sale</span>
          <img width="1" height="1" src="http://localhost/wp-content/uploads/2017/06/Asteya1.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a></div><a href="http://localhost/product/ASTEYA_/" class="woocommerce-loop-product__title">АСТЕЯ अस्तेय</a>
            <span class="price"><del><span class="woocommerce-Price-amount amount">1,690<span class="woocommerce-Price-currencySymbol">₴</span></span></del> <ins><span class="woocommerce-Price-amount amount">1,690<span class="woocommerce-Price-currencySymbol">₴</span></span></ins></span>
          
          </div>`;
          r = r + r;
          r = r+r;
          r = r+r;
res = res.replace("SLIDES",r);
    $(".shopFrontPage").html(res);
    var mySwiper = new Swiper('.swiper-container', 
    {"slidesPerView":4,"slidesPerGroup":1,"slidesPerColumn":1,"spaceBetween":30,"speed":500,"loop":false,"freeMode":false,"grabCursor":true,"mousewheelControl":false,"paginationClickable":true,"nextButton":"#swiper-carousel-5a08913f6b0a9-next","prevButton":"#swiper-carousel-5a08913f6b0a9-prev","pagination":"#swiper-carousel-5a08911ab4c92-pagination","breakpoints":{"480":{"slidesPerView":1,"spaceBetween":8},"768":{"slidesPerView":2,"spaceBetween":15},"992":{"slidesPerView":3,"spaceBetween":23}}}
    );
}