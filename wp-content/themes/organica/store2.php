var BASEURL = "/shop";
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


var storeLoaded = false;

function parseHash(hash) {
  if (hash=="") hash = "list:isnew:true";
  if (hash.indexOf("list:") >=0){
    var res = {type:"list"};
    var params = hash.replace("list:","").split("|");
    if (params.length==0) {
      params = "isnew:true";
    }
    params.forEach(function(param){
      var items = param.split(":");
      res[items[0]] = items[1].split(",");
    })
    return res;
  } else {
    return {type:"item", id: hash.replace("#","")};
  }
}

function generateHash(params){
  var prefix = "/shop/#";
  if (params.id) {
    return prefix+params.id;
  }

  prefix = prefix+ "list:";
  var res = "";
  for (var i in params){
    if (res) res += "|";
    res += i + ":" + params[i];
  }
  return prefix + res;
}

function generateShop() {
  var onLoaded = function() {
      var hash = document.location.hash;
      hash = hash.replace("#","");
      console.log("shop initting", hash);

      generateWidgets(hash);
      var isList = false;

      if (hash && hash.indexOf("list:") <0) {
        generatePage2(hash);
      } else {
        isList = true;
        generatePage1(hash);
        
      }
      if ($('.shopTopBreadcrumbs').length) {
          if (window.innerWidth < 768) {
             $("#sidebar").hide();
             $(".sidebar-expander").css({display:'flex'});
           } else {
            if (isList) {
               $("#sidebar").show();
               $(".sidebar-expander").hide();
            }
           }

          setTimeout(function(){
            $('html,body').animate({
                scrollTop: $('.shopTopBreadcrumbs').offset().top - 75
              }, 500);
          },500);
      }

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
  country = 'ukraine';

//    hideClasses();
    generateShop(); // shop
    checkoutInit(); // order

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

function interceptUrl(obj){
  setTimeout(function(){
    generateShop();
  },100);
  //console.log(obj, document.location);
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
    onAddToCart();
    //saveCart();
    //if (window.fbq) fbq('track', 'AddToCart');
    //onSwitchToCart();
    /*$("#orderDetails").show();
    $('html, body').animate({
          scrollTop: ($("#orderDetails").offset().top - 50)
      }, 1000);
    */
  } else {
    sendOrder(true);
  }
}

function oneClickOrder(){
    var phone = "" + $("#phone").val();
    phone = phone.replace(/[-\(\)]/g,"");
    phone = phone.replace(/ /g,"");
    console.log(phone);
    if (phone.length != 10) {
      alert("Введите пожалуйста телефон");
      return;
    }
    var hash = document.location.hash;
    hash = hash.replace("#","");
    var item = tStore.layer2[hash];
    var color = item.colors[lastColor];
    //$(".colorchosen").hide();
    //lastColor = -1;
    //$(".orderButton").hide();
    console.log(item, color, $("#size").val());
    var price = item.price;
    if (item.pricediscount) price = item.pricediscount;
    cart.push({item:item, price:price, color: color, size:$("#size").val()});

    sendOrder(true, phone);
}

function onAddToCart(){
  saveCart();
  if (window.fbq) fbq('track', 'AddToCart');
  res = "<h1>Товар добавлен!</h1>";
  res += "<div style='font-size:16px;margin-top:20px;color:#a01a29;text-align:center;padding-top:5px;'>Теперь в корзине товаров: <b>" + cart.length + "</b></div>";
  $( "#checkoutDialog" ).html(res);


  $( "#checkoutDialog" ).dialog({
    autoOpen: false,
    modal:true,
    show: {
      effect: "fade",
      duration: 500
    },
    dialogClass: "no-title",
    hide: {
      effect: "explode",
      duration: 500
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

function widgetFilter(hash){
  var html = '<div class="widget_product_categories"><ul class="product-categories">';
  var newcount = 0;
  var allcount = 0;
  console.log(hash);

  function isCurrentSelection(sortType, value) {

    if (hash[sortType] && hash[sortType].indexOf(value)>=0) return "cat-item-active";
    return "";
  }

  tStore.groups.forEach(function(group) {
    //if (group.upgroup) return;
    if (group.invisible == '1') return;
    var count = 0;
    tStore.layer1.forEach(function(item){
      if (item.group != group.id) return;
      if (item.isnew) newcount +=1;
      allcount += 1;

      count += 1;
    })
    html += '<li class="cat-item cat-item-348  ' + isCurrentSelection('group', group.id) + '"><a href="'+generateHash({group:group.id})+'">'+(group.title_smaller ? group.title_smaller : group.title)+'</a> <span class="count">('+count+')</span></li>';
  });
  html += "</ul></div>";
  var html2 = '<div class="widget_product_categories"><ul class="product-categories">';
  tStore.categories.forEach(function(cat) {
    var count = 0;
    tStore.layer1.forEach(function(item){

      if (item.categories) {
        item.categories.forEach(function(catIdx){
          if (catIdx.id == cat.id) count += 1;
        });
      }
    })
    if (count > 0) html2 += '<li class="cat-item cat-item-348  ' + isCurrentSelection('category', cat.id) + '"><a href="'+generateHash({category:cat.id})+'">'+(cat.title)+'</a> <span class="count">('+count+')</span></li>';
  });
  html2 += "</ul></div>";

  var html3 = '<div class="widget_product_categories"><ul class="product-categories">';
  tStore.dresstypes.forEach(function(cat) {
    var count = 0;
    tStore.layer1.forEach(function(item){
      if (item.dresstypes) {
        item.dresstypes.forEach(function(catIdx){
          if (catIdx.id == cat.id) count += 1;
        });
      }
    })
    if (count > 0) html3 += '<li class="cat-item cat-item-348 ' + isCurrentSelection('dresstype', cat.id) + '"><a href="'+generateHash({dresstype:cat.id})+'">'+(cat.title)+'</a> <span class="count">('+count+')</span></li>';
  });
  html3 += "</ul></div>";

  var newhtml = '<div class="widget_product_categories"><ul class="product-categories"><ul><li class="cat-item cat-item-348 current-cat ' + isCurrentSelection('isnew', 'true') + '"><a href="'+generateHash({isnew:true})+'">Новое</a> <span class="count">('+newcount+')</span></li>' + 
    '<li class="cat-item cat-item-348 ' + isCurrentSelection('all', 'true') + '"><a href="'+generateHash({all:true})+'">Все</a> <span class="count">('+allcount+')</span></li>' + 
    '</ul></div>';
  html = newhtml + 
          "<div class='filter-title'>Категории</div>" + html3 +
          "<div class='filter-title'>Сезоны</div>" + html2 +
          
         "<div class='filter-title'>Коллекции</div>" + html;
  $("#shopBreadcrumbs").html(html);
  //$("#shopCategories").html(html2);
}

function generateBC(hash){
  // letf-side

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
              <div class="breadcrumbs__item"><a href="#list:all:true" class="Все коллекции" rel="home" title="Все коллекции">Все коллекции</a></div>

            {OTHER}
            </div>
          </div><div class='clear'></div>`;
  var subHtml = '';
  var item, group, cat;
  if (hash.group) {
    group = hash.group;
  } else {
    if (hash.id) {
      var item = tStore.layer2[hash.id];
    }
    if (item){
      group = item.group;
    } else {
      cat = hash.category;
    }
  }
  if (group) {
    tStore.groups.forEach(function(g) {
      if (g.id == group) {
        subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="#list:group:'+g.id+'" class="breadcrumbs__item-link" rel="tag" title="'+g.title+'">'+g.title+'</a></div>';
      }
    })
  }
  if (cat) {
    tStore.categories.forEach(function(g) {
      if (g.id == cat) {
        subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="#list:category:'+g.id+'" class="breadcrumbs__item-link" rel="tag" title="'+g.title+'">'+g.title+'</a></div>';
      }
    })
  }
  if (hash.isnew) {
    subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="#list:isnew:true" class="breadcrumbs__item-link" rel="tag" title="Новое">Новое</a></div>';
  }
  if (item) {
    var title = item.title.replace("<br>"," ");
    subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="#'+item.id+'" class="breadcrumbs__item-link" rel="tag" title="'+title+'">'+title+'</a></div>';
  }
  html = html.replace(/\{OTHER\}/, subHtml);
  
  $(".shopTopBreadcrumbs").html(html);
}

function generatePage2(hash){

  var singleImage = `<div class="easyzoom"><a href="IMAGE"><img data-u="image" src="IMAGE"></a><img data-u="thumb" src="IMAGETHUMB"></div>`;

  var consts = {W1:378,H1:716,HSM:575,HTHUMB:120,WTHUMB:79};
  //single-product-images single-product-images-horizontal
  var htmlImages = `  
      <div class=""
           id="jssor_1"
           style="width: W1px;height:H1px;">
          <div class="enlarge"></div>
          <!-- Loading Screen -->
          <div data-u="loading">
            <div
              style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
          </div>

          <div data-u="slides" class="single-product-main_image"
               style="width: W1px; height: HSMpx;">
              IMAGETHUMBS
          </div>
          <!-- Thumbnail Navigator -->
          <div data-u="thumbnavigator" class="jssort01-99-66"
               style="left: 0px; bottom: 0;width: W1px; height: HTHUMBpx;">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides">
              <div data-u="prototype" class="p"
                   style="height: HTHUMBpx; width: WTHUMBpx">
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
  var isSmall = window.innerWidth < 600;
  for (var i in consts) {
    if (isSmall) {
      consts[i] = consts[i] / 1.5;
    } else {
      consts[i] = consts[i] / 1.2;
    }
    htmlImages = htmlImages.replace( i + "px", consts[i] +  "px");
    htmlImages = htmlImages.replace( i + "px", consts[i] +  "px");
    htmlImages = htmlImages.replace( i + "px", consts[i] +  "px");
    htmlImages = htmlImages.replace( i + "px", consts[i] +  "px");
  }
  console.log(htmlImages)



  var price = `<p class="price" style='margin:0'><del><span class="woocommerce-Price-amount amount">PRICEDISCOUNT<span class="woocommerce-Price-currencySymbol">₴</span></span></del> <ins><span class="woocommerce-Price-amount amount">PRICE<span class="woocommerce-Price-currencySymbol">₴</span></span></ins></p>`;
  var priceSimple = `<p class="price" style='margin:0'><ins><span class="woocommerce-Price-amount amount">PRICE<span class="woocommerce-Price-currencySymbol">₴</span></span></ins></p>`;

  var newHTML = `
  <div class='woocommerce'><div id="product" class="product type-product status-publish has-post-thumbnail product_cat-spring-autumn has-thumb first instock sale shipping-taxable purchasable product-type-simple">

    <div class="row">
      <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
        <div class="single-image-container">
          IMAGECONTAINER
        </div>
      </div>

      <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
        <div class="summary entry-summary" style="border-bottom: 1px solid #c6c6c6;margin-top:0;margin-bottom:0">

          <h2 itemprop="name" class="product_title entry-title">TITLE</h2>
          PRICE
      <!--<div class="product_meta">
          <span class="sku_wrapper">Код: <span class="sku" itemprop="sku">SKU</span></span>
      </div>-->
        </div>
      <div class='product-form'>
        <h1>Заказ в 3 шага</h1>
        <div class="form-step">
          <div class='form-step-id'><span>1</span></div>
          <div class="form-step-name">Размер:</div>
          <div class="form-step-form">FORM-SIZE</div>
        </div>
        <div class="form-step">
          <div class='form-step-id'><span>2</span></div>
          <div class="form-step-name">Цвет:</div>
          <div class="form-step-form">FORM-COLOR</div>
        </div>
        <div class="form-step step-3">
          <div class='form-step-id'><span>3</span></div>
          <div class='form-step-button1'>FORM-BUTTON1</div>
          <div class='form-step-button2'>FORM-BUTTON2</div>
        </div>
      </div>
      <div style='clear:both'></div>
      <div class="woocommerce-product-details__short-description">
          <p>DESCRIPTION</p>
      </div>
    </div>
  </div>
    `;

  $(".shopFirst").hide('slow');
  generateBC(parseHash(hash));
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
        pricetext = price.replace(/PRICEDISCOUNT/, parseInt(item.price)).replace(/PRICE/, parseInt(item.pricediscount));
      } else {
        pricetext = priceSimple.replace(/PRICE/, parseInt(item.price));
      }
      newHTML = newHTML.replace(/IMAGECONTAINER/g, htmlImages);
      newHTML = newHTML.replace(/PRICE/g, pricetext);
      newHTML = newHTML.replace(/TITLE/g, item.title);
      newHTML = newHTML.replace(/DESCRIPTION/g, item.description);

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
      newHTML = newHTML.replace(/FORM-SIZE/g, sizes);
      
      var colors = "<div class='colorchooser'>";
      colors += "<div class='colorname'></div><div class='fabricsample'></div>";
        //res += "<div class='colorPointerMobile'>Выберите цвет &raquo;</div>";

      var colorGroups = {one:[],two:[], three:[]};
      item.colors.forEach(function(c, index){
        if (c.invisible || !c.id) return;
        //colorGroups.one.push({color:color, index:index});
        var color = c.id;
          //var index = c.index;
          var bg="";//color.color;
          if (tStore.colorsHash[color]) {
            var path = tStore.colorsHash[color].path;
            if (path.indexOf("/") <0) {
              path = "/i/colors/" + path;
            }
            if (!path) path = tStore.colorsHash[color.id].path_big;
            bg += ' url("'+path+'")';
          } else {
            if (color.images && color.images.length>0) bg += ' url("'+color.images[0]+'")';
          }
          colors += "<a class='color' id='color"+index+"' title='"+color+"' onclick='changeColor(\""+hash+ "\","+index+")' style='background:"+bg+";background-size:32px 32px;'>";
          colors += "</a>"

      });
      colors += "</div>";
      newHTML = newHTML.replace(/FORM-COLOR/g, colors);


      /*form += "<div class='colorAddToCart'><div class='orderButton buttons' style='float:right'><input type='button' onclick='alert(\"Выберите, пожалуйста, сначала цвет\")' value='Добавить в корзину'></div></div>";
      form += "<div class='orderText'></div>"
      form += "<div style='clear:both;'></div>";*/
      var form = "";
      form += '<div class="help-title">добавить</div> <div class="orderButton buttons" ><a onclick="proceedStoreOrder(true)" class="button"><i class="fa fa-cart-plus" style="font-size: 16px;"></i>&nbsp;В корзину</a></div>';
      newHTML = newHTML.replace(/FORM-BUTTON1/g, form);
      form ='<div class="help-title">или купить в 1 клик</div> <div class="order-oneclick buttons"><input type="text" id="phone" value="+38" placeholder="+38(___)-___-__-__" /><a onclick="oneClickOrder()" class="button" style="padding: 10px 16px 9px 16px;">OK</a></div>';
      newHTML = newHTML.replace(/FORM-BUTTON2/g, form);

      newHTML = newHTML.replace(/FORM-BUTTONS/g, form);



      res += newHTML;
      $(".shopSecond .inner").html(res);
      $("#phone").mask("(999) 999-99-99");

      initJSSOR();
      prefillOrder();
      changeColor(item.id,0, true);
      //$(".shopSecond").show('slow');
 
  }
  /*if (cart.length ) {
    drawCart();
    $("#orderDetails").show();
    $("#orderForm").show();
  }*/

  $(".shopSecond").show('slow');
  $("#sidebar").hide();
  $(".sidebar-expander").css({display:'flex'});

}

function previewColor(color){
  var res = "";
  res += "<img src='"+color+"' width='100%'/>";
  $( "#checkoutDialog" ).html(res);
  $( "#checkoutDialog" ).dialog({
    autoOpen: false,
    modal:true,
    show: {
      effect: "fade",
      duration: 500
    },
    dialogClass: "no-title",
    hide: {
      effect: "fade",
      duration: 500
    },
    'title':'Ткань детальнее',
    buttons: {
      /*"OK": function() {
        $( "#checkoutDialog" ).dialog( "close" );
      }*/
    }
  });

  $( "#checkoutDialog" ).dialog( "open" );
}

function changeColor(hash, index, skipScroll) {
  var item = tStore.layer2[hash];
  console.log("Changing color to ", hash, index);
  var color = item.colors[index];
  //$(".colorchosen").hide();
  //$("#colorchosen" + index).show('slow');
  //$(".colorPointer").hide();
  $(".colorchooser .color").removeClass("color-active");
  $(".colorchooser #color"+index).addClass("color-active");

  lastColor = index;
  $(".colorname").html(color.id);// "<a href='#' onclick='previewColor(\""+tStore.colorsHash[color.id].path_big+"\");return false;'>"+color.id+"</a>");
  $(".fabricsample").html("<img src='"+tStore.colorsHash[color.id].path_big+"' height=100 style='height:120px'>");
  //$(".colorAddToCart").hide();

  return;
  var html = "";
  html += "<div style='float:left'><h4>Цвет: " + color.id + "</h4>";
  if (color.d){
    html += "<h4> Диаметр: "+color.d+"</h4>";
  }
  html +='</div>'
  html +='<div class="order-oneclick buttons" style="float:left;"><input type="text" id="phone" value="+38" placeholder="+38(___)-___-__-__" /><a onclick="oneClickOrder()" class="button" style="padding: 10px 16px 9px 16px;">OK</a></div>';
  html += '<div class="orderButton buttons" style="float:right"><a onclick="proceedStoreOrder(true)" class="button"><i class="fa fa-cart-plus" style="font-size: 16px;"></i>&nbsp;В корзину</a></div>';
//  html += "<div class='orderButton buttons' style='float:right'><input type='button' onclick='proceedStoreOrder(true)' value='Добавить в корзину'></div>";
  //if (color.images) {
    // image 1 goes to main, image 2 is a sample
    //$(".big-image img")[0].src=color.images[0];
    html += "<img src='"+ tStore.colorsHash[color.id].path_big +"' class='fabricsample'><br>";
    //html += "<table><tr><td width=50% style='padding:0'><img src='"+color.images[0]+"' style='width:100%;padding:2%'></td><td width=50% style='padding:0'><img src='"+color.images[1]+"' style='width:100%;padding:2%'></td></table>";
  //}
  $(".orderText").html(html);
  $("#phone").mask("(999) 999-99-99");

  if ($(document).width() < 800 && !skipScroll) {
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

function expandSidebar(){
  $("#sidebar").show();
  $(".sidebar-expander").hide();  
  $('html,body').animate({
    scrollTop: $('#sidebar').offset().top - 75
  }, 500);
}

function filterOK(isGroup) {

}

var isFirstShopLoaded = false;
function generatePage1(groupHash){

  var isAlreadyFirst = false;//$(".shopFirst:visible").length > 0;
  if (!isAlreadyFirst || !isFirstShopLoaded) {
    console.log("...", groupHash);
    $(".shopSecond").hide('slow');

    $(".shopFirst").show();
    var res = "";
    var hashParsed = parseHash(groupHash);
    generateBC(hashParsed);
    res += '<div class="woocommerce">';
    var showCategories = false;
    if (hashParsed.category || hashParsed.all) {
      showCategories = true;
    }

    if (!showCategories) {
      res += "<div class='row products'>";
    }
    tStore.groups.forEach(function(group) {
      var groupAdded = false;
      if (group.invisible == '1' || (hashParsed.group && hashParsed.group.indexOf(group.id) < 0 )) return;
      tStore.layer1.forEach(function(item){
          if (item.group != group.id) return;
          if (item.invisible) return;
          /* FILTER */
          if (!item.isnew && hashParsed.isnew) return;
          if (hashParsed.category) {
            if (!item.categories) return;
            var hasCategory = false;
            item.categories.forEach(function(cat) {
                if (hashParsed.category.indexOf(cat.id) >=0 ) hasCategory = true;
            });
            if (!hasCategory) return;
          }
          if (hashParsed.dresstype) {
            if (!item.dresstypes) return;
            var hasDresstype = false;
            item.dresstypes.forEach(function(cat) {
                if (hashParsed.dresstype.indexOf(cat.id) >=0 ) hasDresstype = true;
            });
            if (!hasDresstype) return;
          }
          if (!groupAdded && showCategories) {
            res += "<h2 class='cat-group-header'>Коллекция: " + group.title + "</h2><div class='row products'>";
          }
          groupAdded = true;

          var r = `<div class="first col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 post-1983 product type-product status-publish has-post-thumbnail product_cat-tubes has-thumb  instock shipping-taxable purchasable product-type-simple">
            <div class="block_product_thumbnail"><a href="{URL}" onclick='interceptUrl(this)' class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="1" height="1" src="{IMAGE}" style="width:auto;" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a></div><a href="{URL}" onclick='interceptUrl(this)' class="woocommerce-loop-product__title">{TITLE}</a>
            {PRICE}
          </div>`;
          var priceSimple = `<span class="price"><span class="woocommerce-Price-amount amount">{PRICE}<span class="woocommerce-Price-currencySymbol">₴</span></span></span>`;
          var priceDiscount = `<span class="price"><del><span class="woocommerce-Price-amount amount">{PRICE}<span class="woocommerce-Price-currencySymbol">₴</span></span></del> <ins><span class="woocommerce-Price-amount amount">{PRICEDISCOUNT}<span class="woocommerce-Price-currencySymbol">₴</span></span></ins></span>`;
          // '
            r = r.replace(/\{URL\}/g,'#' + item.id);
            r = r.replace(/\{TITLE\}/g, item.title);
            if (!item.images.length) { 
              r = r.replace(/\{IMAGE\}/g, '/wp-content/plugins/woocommerce/assets/images/placeholder.png');
            } else {
              r = r.replace(/\{IMAGE\}/g, item.images[0].path);
            }
            if (item.pricediscount) {
              priceDiscount = priceDiscount.replace("{PRICE}", parseInt(item.price));
              priceDiscount = priceDiscount.replace("{PRICEDISCOUNT}", parseInt(item.pricediscount));
              r = r.replace("{PRICE}", priceDiscount);
            } else {
              priceSimple = priceSimple.replace("{PRICE}", parseInt(item.price));
              r = r.replace("{PRICE}", priceSimple);
              //res += "<div style='display:inline;'>"+item.price+"</div>";
            }
            res += r;
      });
      if (!groupAdded && showCategories) {
            res += '</div>';
      }
    })
    if (!showCategories) {
      res += "</div>";
    }
  }
    $(".shopFirst .inner").html(res);

    isFirstShopLoaded = true;

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

function sendOrder(isFromReadyShop, singleClickPhone){
if (orderInProgress) return;
//if (window.SUPERCOUNTRY && window.SUPERCOUNTRY == "ru") country = "russia";
//if (window.SUPERCOUNTRY && window.SUPERCOUNTRY == "crimea") country = "crimea";
//    $("#oCountry").val(country == "ukraine"?"Украина":(country == "crimea"?"Крым":"Россия"));

  if (cart.length == 0) {
    alert('Заказ пуст, наберите плиз себе товары');
    return;
  }
  orderInProgress = true;
  var data;
  var checks = ["oName", "oHeight", "oLastName", "oEmail", "oPhone", "oCity", "oAddress"];

  if (singleClickPhone) {
    if (window.localStorage['ordervalues']) {
      data = JSON.parse(window.localStorage['ordervalues']);
      data['oPhone'] = singleClickPhone;
      data['oEmail'] = 'one-click-order';
      checks.push("oComments");
      checks.push("oSource");
    }
  } else {
    data = {
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
    for (var i=0;i<checks.length;i++){
      if (!data[checks[i]]) {
        alert("Заполните пожалуйста все поля заказа");
        return;
      }
    }
    checks.push("oComments");
    checks.push("oSource");
  }
//  data.oPhone = data.oPhone.replace(/-/g,"");


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
  var htmlEmail = "<h3>Спасибо за заказ!<br>Его номер " + id  + "</h3>" + html;
  var html="<h3>Спасибо за заказ! <br>Его номер " + id  + "</h3>" + html;
//http://tuba-duba.com

  data = {
    id: id,
    name : data.oName + " " + data.oLastName,
    height: data.oHeight,
    phone: data.oPhone,
    email: data.oEmail,
    country: "ukraine",
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

  if (!singleClickPhone) {
    $("button#proceedOrder").css({opacity:0.7}).val("В процессе...");
  }

  var jqxhr =  $.post("/sendorder.php", data, function(response){
    $("button#proceedOrder").css({opacity:1}).val("Оформить заказ");
    
    if (window.fbq) fbq('track', 'Purchase', {value: '100', currency: 'UAH'});
    if (response.indexOf("1")>=0) {
      cart = [];
      window.localStorage['cart'] = [];
      if (!singleClickPhone) {
        $("#orderDetails").html(html);
        $("#orderDetails").show('slow');
        $("#proceedOrder").hide();
        $("#sendOrder").hide();
        $("#lastOrderButtons").hide();
      } else {
        okQuick();
      }
    }
  });
  jqxhr.fail(function() {
    alert( "Произошла какая-то ошибка :( Позвоните, пожалуйста, в поддержку." );
  })
  jqxhr.always(function() {
    orderInProgress = false;
  });
  
}

function okQuick(){
  cart = [];
  saveCart();
  var res = "";
  res += "Спасибо! Наш менеджер скоро свяжется с вами. <br>Если вы получили SMS, значит, все точно хорошою ";
  $( "#checkoutDialog" ).html(res);
  $( "#checkoutDialog" ).dialog({
    autoOpen: false,
    modal:true,
    show: {
      effect: "fade",
      duration: 500
    },
    dialogClass: "no-title",
    hide: {
      effect: "fade",
      duration: 500
    },
    'title':'Заказ отправлен',
    buttons: {
      "Продолжить": function() {
        $( "#checkoutDialog" ).dialog( "close" );
      }
    }
  });

  $( "#checkoutDialog" ).dialog( "open" );
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
      <th class="product-quantity">Размер</th>
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
      <th colspan="4">Итого</th>
      <td style='text-align:center'><strong><span class="woocommerce-Price-amount amount">TOTAL<span class="woocommerce-Price-currencySymbol">₴</span></span></strong> </td>
      <td></td>
    </tr>
  </tfoot>
</table>
  </div></div>`;
  var itemTemplate = `<tr class="cart_item"><td class="product-thumbnail">
                  <a href="URL"><img width="60" style='width:60px;' src="IMAGE" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a>           </td>
                <td class="product-name" >
                  <h6><a href="URL">TITLE</a></h6>
                </td>
                <td style='text-align:center'>SIZE</td>
                
                <td class="product-quantity">
                <small>COLOR</small>
                </td>
                <td class="product-total" >
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
       itemHTML = itemHTML.replace(/SIZE/, c.size ? c.size : '');
       itemHTML = itemHTML.replace(/PRICE/, parseInt(c.price));
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
   $("#orderItems").html($(document).width() < 800 ? html : templateTotal); //
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
  //console.log('INITJSS', $('#jssor_1'));
  //console.trace()
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

function generateWidgets(hash){
  console.log("widgets to be set...");
  var parsed = parseHash(hash);
  generateBC(parsed);
  widgetFilter(parsed);
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
</div>`;
  var template = `<div class="swiper-slide post-2024 product type-product status-publish has-post-thumbnail product_cat-dharma has-thumb  instock sale shipping-taxable purchasable product-type-simple tm-products-carousel-widget-slide swiper-slide-active" style="width: 270px; margin-right: 30px;">

            <div class="block_product_thumbnail"><a href="LINK" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
            SALE
          <img width="1" height="1" src="IMAGE" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a></div><a href="LINK" class="woocommerce-loop-product__title">TITLE</a>
            <span class="price">PRICEDISCOUNT<ins><span class="woocommerce-Price-amount amount">PRICE<span class="woocommerce-Price-currencySymbol">₴</span></span></ins></span>
          
          </div>`;

          var r = "";

          tStore.layer1.forEach(function(item){
            if (!item.featured) return;
            var slide = "" + template;
            slide = slide.replace(/SALE/g, "");
            slide = slide.replace(/LINK/g, "/shop/#"+item.id);
            slide = slide.replace(/IMAGE/g, item.images[0].path);
            slide = slide.replace(/TITLE/g, item.title);
            //slide = slide.replace(/PRICEDISCOUNT/g, "");
            var price = item.price;
            if (item.pricediscount) { 
              slide = slide.replace(/PRICEDISCOUNT/g, '<del><span class="woocommerce-Price-amount amount">' + parseInt(item.price) + '<span class="woocommerce-Price-currencySymbol">₴</span></span></del>' );
              slide = slide.replace(/PRICE/g, parseInt(item.pricediscount));
            } else {
              slide = slide.replace(/PRICEDISCOUNT/g, "");
              slide = slide.replace(/PRICE/g, parseInt(item.price));
            }

            
            r += slide;
            //
            //<span class="onsale">Sale</span>
          }) 
    res = res.replace("SLIDES",r);
    $(".shopFrontPage").html(res);
    var mySwiper = new Swiper('.swiper-container', 
    {"slidesPerView":4,"slidesPerGroup":1,"slidesPerColumn":1,"spaceBetween":100,"speed":500,"loop":false,"freeMode":false,"grabCursor":true,"mousewheelControl":false,"paginationClickable":true,"nextButton":"#swiper-carousel-5a08913f6b0a9-next","prevButton":"#swiper-carousel-5a08913f6b0a9-prev","pagination":"#swiper-carousel-5a08911ab4c92-pagination","breakpoints":{"480":{"slidesPerView":2,"spaceBetween":8},"768":{"slidesPerView":2,"spaceBetween":15},"992":{"slidesPerView":3,"spaceBetween":23}}}
    );
}