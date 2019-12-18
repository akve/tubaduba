function generateShop() {

  var onLoaded = function() {

    $(".loader").hide();

    var hash = getCurrentHash();
    if ((!hist.length) || (hist.length && hist[hist.length - 1] != hash)) hist.push(hash);
    //    window.history.pushState('forward', null, document.location.href);

    console.log("shop initting", hash);
    $(".rd-mobilemenu").removeClass("active");
    $(".rd-mobilepanel_toggle").removeClass("active");

    generateWidgets(hash);
    var isList = false;

    if (hash && hash.indexOf("list:") < 0) {
      if (window.ga) ga('send', 'event', 'Item', 'view', hash);
      generatePage2(hash);
    } else {
      if (window.ga) ga('send', 'event', 'List', 'view', hash);
      isList = true;
      generatePage1(hash);

    }
    if ($('.shopTopBreadcrumbs').length) {
      if (window.innerWidth < 768) {
        $("#sidebar").hide();
        $(".sidebar-expander").css({
          display: 'flex'
        });
      } else {
        if (isList) {
          $("#sidebar").show();
          $(".sidebar-expander").hide();
        }
      }

      setTimeout(function() {
        $('html,body').animate({
          scrollTop: $('.shopTopBreadcrumbs').offset().top - 75
        }, 500);
      }, 500);
    }

  }

  if (storeLoaded) {
    onLoaded();
  } else {
    jQuery.get("/app/admin/admin-remote.php?action=load&country=" + (country == "crimea" ? "ru" : "ua"), "", function(r) {
      storeLoaded = true;
      r = _T(r);
      tStore = JSON.parse(r);
      //console.log(tStore);

      tStore.layer2 = {};
      tStore.layer1.forEach(function(r) {
        tStore.layer2[r.id] = r;
      })

      tStore.colorsHash = {};
      tStore.colorCodes.forEach(function(r) {
        tStore.colorsHash[r.id] = r;
      })
      onLoaded();
    });
  }
}


function widgetFilter(hash) {
  var html = '<div class="widget_product_categories"><ul class="product-categories">';
  var newcount = 0;
  var allcount = 0;
  var salecount = 0;
  console.log(hash);

  function isCurrentSelection(sortType, value) {

    if (hash[sortType] && hash[sortType].indexOf(value) >= 0) return "cat-item-active";
    return "";
  }

  tStore.groups.forEach(function(group) {
    //if (group.upgroup) return;
    if (group.invisible == '1') return;
    var count = 0;
    tStore.layer1.forEach(function(item) {
      if (item.group != group.id) return;
      if (item.isnew) newcount += 1;
      if (item.price && item.pricediscount) salecount += 1;
      allcount += 1;

      count += 1;
    })
    html += '<li class="cat-item cat-item-348  ' + isCurrentSelection('group', group.id) + '"><a href="' + generateHash({
      group: group.id
    }) + '">' + (group.title_smaller ? group.title_smaller : group.title) + '</a> <span class="count">(' + count + ')</span></li>';
  });
  html += "</ul></div>";
  var html2 = '<div class="widget_product_categories"><ul class="product-categories">';
  tStore.categories.forEach(function(cat) {
    var count = 0;
    tStore.layer1.forEach(function(item) {

      if (item.categories) {
        item.categories.forEach(function(catIdx) {
          if (catIdx.id == cat.id) count += 1;
        });
      }
    })
    if (count > 0) html2 += '<li class="cat-item cat-item-348  ' + isCurrentSelection('category', cat.id) + '"><a href="' + generateHash({
      category: cat.id
    }) + '">' + (cat.title) + '</a> <span class="count">(' + count + ')</span></li>';
  });
  html2 += "</ul></div>";

  var html3 = '<div class="widget_product_categories"><ul class="product-categories">';
  tStore.dresstypes.forEach(function(cat) {
    var count = 0;
    tStore.layer1.forEach(function(item) {
      if (item.dresstypes) {
        item.dresstypes.forEach(function(catIdx) {
          if (catIdx.id == cat.id) count += 1;
        });
      }
    })
    if (count > 0) html3 += '<li class="cat-item cat-item-348 ' + isCurrentSelection('dresstype', cat.id) + '"><a href="' + generateHash({
      dresstype: cat.id
    }) + '">' + (cat.title) + '</a> <span class="count">(' + count + ')</span></li>';
  });
  html3 += "</ul></div>";

  var newhtml = '<div class="widget_product_categories"><ul class="product-categories"><ul><li class="cat-item cat-item-348 current-cat ' + isCurrentSelection('isnew', 'true') + '"><a href="' + generateHash({
      isnew: true
    }) + '">' + _T("[R:Новое][U:Нове]") + '</a> <span class="count">(' + newcount + ')</span></li>' +
    '<li class="cat-item cat-item-348 ' + isCurrentSelection('all', 'true') + '"><a href="' + generateHash({
      all: true
    }) + '">Все</a> <span class="count">(' + allcount + ')</span></li>' +
    /*    '<li class="cat-item cat-item-348 ' + isCurrentSelection('sale', 'true') + '"><a href="'+generateHash({sale:true})+'">SALE</a> <span class="count">('+salecount+')</span></li>' + */
    '</ul></div>';
  html = newhtml +
    "<div class='filter-title'>" + _T("[R:Категории][U:Категорiї]") + "</div>" + html3 +
    "<div class='filter-title'>" + _T("[R:Сезоны][U:Сезони]") + "</div>" + html2 +

    "<div class='filter-title'>" + _T("[R:Коллекции][U:Колекцiї]") + "</div>" + html;
  $("#shopBreadcrumbs").html('<div class="breadcrumbs">' + html + '</div>');
  if (!$(".rd-mobilemenu_ul li.shop").length) {
    var h = $(".rd-mobilemenu_ul").html();
    h = h + "<li class='shop'></li>";
    $(".rd-mobilemenu_ul").html(h);
  }
  $(".rd-mobilemenu_ul li.shop").html(html);
  //$("#shopCategories").html(html2);
}

function generateBC(hash) {
  // letf-side


  html = `<div class="breadcrumbs__content">
            <div class="breadcrumbs__wrap">{PREVLINK}
              <div class="breadcrumbs__item"><a href="` + generateHash({
    all: true
  }) + `" class="tutto" rel="home" title="Все коллекции">` + _T("[R:Все коллекции][U:Всi колекцiї]") + `</a></div>

            {OTHER}
            </div>
          </div><div class='clear'></div>`;
  var subHtml = '';
  var item, group, cat, dresstype;
  if (hash.group) {
    group = hash.group;
  } else {
    if (hash.id) {
      var item = tStore.layer2[hash.id];
    }
    if (item) {
      group = item.group;
    } else {
      cat = hash.category;
      if (hash.dresstype) {
        dresstype = hash.dresstype;
      }
    }
  }
  if (dresstype) {
    tStore.dresstypes.forEach(function(g) {
      if (g.id == dresstype) {
        subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="' + generateHash({
          dresstype: g.id
        }) + '" class="breadcrumbs__item-link" rel="tag" title="' + g.title + '">' + g.title + '</a></div>';
      }
    })
  }
  if (group) {
    tStore.groups.forEach(function(g) {
      if (g.id == group) {
        subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="' + generateHash({
          group: g.id
        }) + '" class="breadcrumbs__item-link" rel="tag" title="' + g.title + '">' + g.title + '</a></div>';
      }
    })
  }
  if (cat) {
    tStore.categories.forEach(function(g) {
      if (g.id == cat) {
        subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="' + generateHash({
          category: g.id
        }) + '" class="breadcrumbs__item-link" rel="tag" title="' + g.title + '">' + g.title + '</a></div>';
      }
    })
  }
  if (hash.isnew) {
    subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="' + generateHash({
      isnew: true
    }) + '" class="breadcrumbs__item-link" rel="tag" title="Новое">' + _T("[R:Новое][U:Нове]") + '</a></div>';
  }
  if (hash.sale && false) {
    subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="' + generateHash({
      sale: true
    }) + '" class="breadcrumbs__item-link" rel="tag" title="SALE">SALE</a></div>';
  }
  if (item) {
    var title = item.title.replace("<br>", " ");
    subHtml += '<div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">/</div></div> <div class="breadcrumbs__item"><a href="' + generateHash({
      id: item.id
    }) + '" class="breadcrumbs__item-link" rel="tag" title="' + title + '">' + title + '</a></div>';
  }
  html = html.replace(/\{OTHER\}/, subHtml);

  var prevHtml = "";
  //console.log("WTF", hist);
  if (hist.length > 1) {
    var last = hist[hist.length - 2];
    console.log("W??", last);
    if (last == "list:sale:true" && false) {
      prevHtml = '<div class="breadcrumbs__item"><a href="' + generateHash({
        sale: true
      }) + '" class="breadcrumbs__item-link" rel="tag" title="' + title + '"><b>SALE</b></a></div><div class="breadcrumbs__item"><div class="breadcrumbs__item-sep">|</div></div> ';
    }
  }
  html = html.replace(/\{PREVLINK\}/, prevHtml);

  $(".shopTopBreadcrumbs").html('<div class="breadcrumbs">' + html + '</div>');
}

function generatePage2(hash) {

  var singleImage = `<div class="easyzoom"><a href="IMAGE"><img data-u="image" src="IMAGE"></a><img data-u="thumb" src="IMAGETHUMB"></div>`;

  var consts = {
    W1: 378,
    H1: 716,
    HSM: 575,
    HTHUMB: 120,
    WTHUMB: 79
  };
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
  var isSmall = window.innerWidth <= 1024;
  for (var i in consts) {
    if (isSmall) {
      consts[i] = consts[i] / 1.5;
    } else {
      consts[i] = consts[i] / 1.2;
    }
    htmlImages = htmlImages.replace(i + "px", consts[i] + "px");
    htmlImages = htmlImages.replace(i + "px", consts[i] + "px");
    htmlImages = htmlImages.replace(i + "px", consts[i] + "px");
    htmlImages = htmlImages.replace(i + "px", consts[i] + "px");
  }
  //console.log(htmlImages)



  var price = `<p class="price" style='margin:0'><del><span class="woocommerce-Price-amount amount">PRICEDISCOUNT<span class="woocommerce-Price-currencySymbol"> грн</span></span></del> <ins><span class="woocommerce-Price-amount amount">PRICE<span class="woocommerce-Price-currencySymbol"> грн</span></span></ins></p>`;
  var priceSimple = `<p class="price" style='margin:0'><ins><span class="woocommerce-Price-amount amount">PRICE<span class="woocommerce-Price-currencySymbol"> грн</span></span></ins></p>`;

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
        <h1>` + _T("[R:Заказ в 3 шага][U:Замовлення в 3 кроки]") + `</h1>
        <div class="form-step">
          <div class='form-step-id'><span>1</span></div>
          <div class="form-step-name">` + _T("[R:Размер][U:Розмiр]") + `:</div>
          <div class="form-step-form">FORM-SIZE</div>
        </div>
        <div class="form-step">
          <div class='form-step-id'><span>2</span></div>
          <div class="form-step-name">` + _T("[R:Цвет][U:Колiр]") + `:</div>
          <div class="form-step-form">FORM-COLOR</div>
        </div>
        <div class="form-step step-3">
          <div class='form-step-id'><span>3</span></div>
          <div class='form-step-button1'>FORM-BUTTON1</div>
          <div class='form-step-button2'>FORM-BUTTON2</div>
        </div>
      </div>
      <div style='clear:both'></div>

        <div class="woocommerce-tabs wc-tabs-wrapper">
            <ul class="tabs wc-tabs">
                <li class="description_tab active">
                  <a href='javascript:void(0)' onclick='onChangeTab(0);return false;'>` + _T("[R:Описание][U:Опис]") + `</a>
                </li>
                      <li class="delivery_tab">
                  <a href='javascript:void(0)' onclick='onChangeTab(1);return false;'>` + _T("[R:Доставка и оплата][U:Доставка та оплата]") + ` </a>
                </li>
            </ul>
            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" style="display: block;">
              <p>DESCRIPTION</p>
            </div>
            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--delivery panel entry-content wc-tab" id="tab-additional_information" style="display: none;">
              <p><b>Доставка</b><br>` + _T(`
              [R:
              <li>Новой Почтой в любую точку Украины (на отделение или курьером).
              <li>Все, что есть в наличии, мы отправляем в течении 1-3х дней.
              <li>Пошив нужного размера под заказ - в течении 10 рабочих дней.
              <li>В другие страны пересылаем Укрпочтой.

              <p><b>Оплата</b><br>
              Предоплата на карту Приват-банка<br>

              <p><b>Возврат и обмен</b><br>
              <li>Одежда, созданная по индивидуальным меркам, возврату/обмену не подлежит.
              <li>Если же одежда была в наличии, и по каким-то причинам не подошла -  ее возврат/обмен возможен в течение 14 дней
              <li>Возврат не понравившейся одежды - за счет покупателя.
              <li>Возврат одежды с дефектами пошива, осуществляется за наш счет.][U:
              <li>Новою Поштою в будь-яку точку України (на вiддiлення або кур'єром).
              <li>Все, що є в наявностi, ми вiдправляємо протягом 1-3х днiв.
              <li>Пошив потрiбного розмiру пiд замовлення - протягом 10 робочих днiв.
              <li>В iншi країни пересилаємо Укрпоштою

              <p><b>Оплата</b><br>
              Передоплата на карту Приват-банка<br>

              <p><b>Повернення та обмiн</b><br>
              <li>Одяг, який створено за iндивидуальними замiрами, поверненню не пiдлягає.
              <li>Якщо одяг був в наявностi, але за якихось обставин не подойшов -  повернення\обмiн
            можливий протягом 14 днiв
              <li>Повернення одягу, що не сподобався - за рахунок покупця.
              <li>Повернення дефектного одягу - за наш рахунок
              ]`) + `
            </div>

        </div>
    </div>
  </div>
  <div class="additional-wrapper">
    <h4>` + _T("[R:Другие товары из этой коллекции][U:Iншi товари з цiєї колекцiї]") + `</h4>
    <div class="additional-items"></div>
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
    item.images.forEach(function(img, idx) {
      if (idx > 7) return;
      images += singleImage.replace(/IMAGETHUMB/g, img.path).replace(/IMAGE/g, img.path);
    });
    htmlImages = htmlImages.replace(/IMAGETHUMBS/g, images);
    htmlImages = htmlImages.replace(/JSSORINDEX/g, JSSORINDEX);
    var pricetext;
    if (item.pricediscount) {
      htmlImages += '<span class="onsale">Sale</span>';
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
      var ss = ['S', 'M', 'L', 'XL'] //[42,44,46,48,50,52];
      sizes = "<select id='size' name='size' class='sizes-selector'>";
      ss.forEach(function(s) {
        sizes += "<option>" + s + "</option>"
      });
      sizes += "</select>";
      sizes += _T("&nbsp;<a href='javascript:void(0)' onclick='showSizes();return false;' title='[R:таблица размеров][U:таблиця розмiрiв]'><i class='fa fa-info'></i></a>");
    } else {
      sizes = _T("[R:в зависимости от цвета][U:залежно вiд кольору]. <br>см. <a href='javascript:void(0)' onclick='showSizes();return false;'>[R:таблица размеров][U:таблиця розмiрiв]</a>");
    }

    if (item.sizes == "oversize") {
      sizes = "OVERSIZE";
    }
    newHTML = newHTML.replace(/FORM-SIZE/g, sizes);

    var colors = "<div class='colorchooser'>";
    colors += "<div class='colorname'></div><div class='fabricsample'></div>";

    var colorGroups = {
      one: [],
      two: [],
      three: []
    };
    item.colors.forEach(function(c, index) {
      if (c.invisible || !c.id) return;
      //colorGroups.one.push({color:color, index:index});
      var color = c.id;
      //var index = c.index;
      var bg = ""; //color.color;
      if (tStore.colorsHash[color]) {
        var path = tStore.colorsHash[color].path;
        if (path.indexOf("/") < 0) {
          path = "/i/colors/" + path;
        }
        if (!path) path = tStore.colorsHash[color.id].path_big;
        bg += ' url("' + path + '")';
      } else {
        if (color.images && color.images.length > 0) bg += ' url("' + color.images[0] + '")';
      }
      colors += "<a class='color' id='color" + index + "' title='" + color + "' onclick='changeColor(\"" + hash + "\"," + index + ")' style='background:" + bg + ";background-size:32px 32px;'>";
      colors += "</a>"

    });
    colors += "</div>";
    newHTML = newHTML.replace(/FORM-COLOR/g, colors);



    var form = "";
    form += _T('<div class="help-title">[R:добавить][U:додати]</div> <div class="orderButton buttons" ><a onclick="proceedStoreOrder(true)" class="button"><i class="fa fa-cart-plus" style="font-size: 16px;"></i>&nbsp;[R:В корзину][U:В кошик]</a></div>');
    newHTML = newHTML.replace(/FORM-BUTTON1/g, form);
    form = _T('<div class="help-title">[R:или купить в 1 клик][U:або придбати в 1 клiк]</div> <div class="order-oneclick buttons"><input type="text" id="phone" value="+38" placeholder="+38(___)-___-__-__" /><a onclick="oneClickOrder()" class="button" style="padding: 10px 16px 9px 16px;">OK</a></div>');
    newHTML = newHTML.replace(/FORM-BUTTON2/g, form);

    newHTML = newHTML.replace(/FORM-BUTTONS/g, form);



    res += newHTML;
    $(".shopSecond .inner").html(res);
    $("#phone").mask("(999) 999-99-99");

    initJSSOR();
    prefillOrder();
    changeColor(item.id, 0, true);
    console.log('?????');
    generateFeatured(item.id, item.group);
    //$(".shopSecond").show('slow');

  }
  /*if (cart.length ) {
    drawCart();
    $("#orderDetails").show();
    $("#orderForm").show();
  }*/

  $(".shopSecond").show('slow');
  if (window.innerWidth < 768) {
    $("#sidebar").hide();
    $(".sidebar-expander").css({
      display: 'flex'
    });
  }

  checkInterceptHrefs();

}

function onChangeTab(tabId) {
  var hideTabId = tabId == 0 ? 1 : 0;
  var names = ['description', 'delivery'];
  $("." + names[hideTabId] + "_tab").removeClass("active");
  $("." + names[tabId] + "_tab").addClass("active");
  $(".woocommerce-Tabs-panel--" + names[hideTabId]).hide();
  $(".woocommerce-Tabs-panel--" + names[tabId]).show();
}

function previewColor(color) {
  var res = "";
  res += "<img src='" + color + "' width='100%'/>";
  $("#checkoutDialog").html(res);
  $("#checkoutDialog").dialog({
    autoOpen: false,
    modal: true,
    show: {
      effect: "fade",
      duration: 500
    },
    dialogClass: "no-title",
    hide: {
      effect: "fade",
      duration: 500
    },
    'title': 'Ткань детальнее',
    buttons: {
      /*"OK": function() {
        $( "#checkoutDialog" ).dialog( "close" );
      }*/
    }
  });

  $("#checkoutDialog").dialog("open");
}

function changeColor(hash, index, skipScroll) {
  var item = tStore.layer2[hash];
  console.log("Changing color to ", hash, index);
  var color = item.colors[index];
  if (!color.id || color.invisible) {
    color = null;
    for (var i = 0; i < item.colors.length; i++) {
      if (item.colors[i].id && !item.colors[i].invisible && !color) {
        color = item.colors[i];
        index = i;
      }
    }
  }
  if (!color) return;
  //$(".colorchosen").hide();
  //$("#colorchosen" + index).show('slow');
  //$(".colorPointer").hide();
  $(".colorchooser .color").removeClass("color-active");
  $(".colorchooser #color" + index).addClass("color-active");

  lastColor = index;
  $(".colorname").html(color.id); // "<a href='javascript:void(0)' onclick='previewColor(\""+tStore.colorsHash[color.id].path_big+"\");return false;'>"+color.id+"</a>");
  $(".fabricsample").html("<img src='" + tStore.colorsHash[color.id].path_big + "' height=100 style='height:120px'>");
  //$(".colorAddToCart").hide();

  return;
  var html = "";
  html += "<div style='float:left'><h4>Цвет: " + color.id + "</h4>";
  if (color.d) {
    html += "<h4> Диаметр: " + color.d + "</h4>";
  }
  html += '</div>'
  html += '<div class="order-oneclick buttons" style="float:left;"><input type="text" id="phone" value="+38" placeholder="+38(___)-___-__-__" /><a onclick="oneClickOrder()" class="button" style="padding: 10px 16px 9px 16px;">OK</a></div>';
  html += _T('<div class="orderButton buttons" style="float:right"><a onclick="proceedStoreOrder(true)" class="button"><i class="fa fa-cart-plus" style="font-size: 16px;"></i>&nbsp;[R:В корзину][U:В кошик]</a></div>');
  //if (color.images) {
  // image 1 goes to main, image 2 is a sample
  //$(".big-image img")[0].src=color.images[0];
  html += "<img src='" + tStore.colorsHash[color.id].path_big + "' class='fabricsample'><br>";
  //html += "<table><tr><td width=50% style='padding:0'><img src='"+color.images[0]+"' style='width:100%;padding:2%'></td><td width=50% style='padding:0'><img src='"+color.images[1]+"' style='width:100%;padding:2%'></td></table>";
  //}
  $(".orderText").html(html);
  $("#phone").mask("(999) 999-99-99");

  if ($(document).width() < 800 && !skipScroll) {
    $('html, body').animate({
      scrollTop: ($(".orderText").offset().top - 50)
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

function expandSidebar() {
  $("#sidebar").show();
  $(".sidebar-expander").hide();
  $('html,body').animate({
    scrollTop: $('#sidebar').offset().top - 75
  }, 500);
}


function generatePage1(groupHash) {

  var isAlreadyFirst = false; //$(".shopFirst:visible").length > 0;
  if (!isAlreadyFirst || !isFirstShopLoaded) {
    console.log("...", groupHash);
    $(".shopSecond").hide('slow');

    $(".shopFirst").show();
    var res = "";
    var hashParsed = parseHash(groupHash);
    generateBC(hashParsed);
    res += '<div class="woocommerce">';
    var showCategories = false;
    if (hashParsed.group || hashParsed.all) {
      showCategories = true;
    }

    if (!showCategories) {
      res += "<div class='row products'>";
    }
    tStore.groups.forEach(function(group) {
      var groupAdded = false;
      if (group.invisible == '1' || (hashParsed.group && hashParsed.group.indexOf(group.id) < 0)) return;
      tStore.layer1.forEach(function(item) {
        if (item.group != group.id) return;
        if (item.invisible) return;
        /* FILTER */
        if (!item.isnew && hashParsed.isnew) return;
        if (hashParsed.category) {
          if (!item.categories) return;
          var hasCategory = false;
          item.categories.forEach(function(cat) {
            if (hashParsed.category.indexOf(cat.id) >= 0) hasCategory = true;
          });
          if (!hasCategory) return;
        }
        if (hashParsed.dresstype) {
          if (!item.dresstypes) return;
          var hasDresstype = false;
          item.dresstypes.forEach(function(cat) {
            if (hashParsed.dresstype.indexOf(cat.id) >= 0) hasDresstype = true;
          });
          if (!hasDresstype) return;
        }
        if (hashParsed.sale) {
          if (item.price && item.pricediscount) {
            var p1 = parseInt(item.price);
            var p2 = parseInt(item.pricediscount);
            if (p1 == p2) return;
          } else {
            return;
          }
        }
        if (!groupAdded && showCategories) {
          res += _T("<h2 class='cat-group-header'>[R:Коллекция][U:Колекцiя]: " + group.title + "</h2><div class='row products'>");
        }
        groupAdded = true;

        var r = `
          <div class="product-list-item col-xs-6 col-sm-6 col-md-4">
            <div class="thumbnail img-hover-zoom">
              <a href="{URL}" onclick='interceptUrl(this)' class="link">
                  <img width="1" height="1" src="{IMAGE}" style="width:auto;" class="wp-post-image" alt="">
              </a>
            </div>
            <a href="{URL}" onclick='interceptUrl(this)' class="title">{TITLE}</a>
            <div class="price">{PRICE}</div>
          </div>`;
        var priceSimple = `<span class="price"><span class="woocommerce-Price-amount amount">{PRICE}<span class="woocommerce-Price-currencySymbol"> грн</span></span></span>`;
        var priceDiscount = `<span class="price"><del><span class="woocommerce-Price-amount amount">{PRICE}<span class="woocommerce-Price-currencySymbol"> грн</span></span></del> <ins><span class="woocommerce-Price-amount amount">{PRICEDISCOUNT}<span class="woocommerce-Price-currencySymbol"> грн</span></span></ins></span>`;
        // '
        r = r.replace(/\{URL\}/g, generateHash({
          id: item.id
        }));
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
      if (showCategories) {
        res += '</div>';
      }
    })
    if (!showCategories) {
      res += "</div>";
    }
  }
  $(".shopFirst .inner").html(res);

  isFirstShopLoaded = true;

  checkInterceptHrefs();

}

function startZoom() {
  var hash = getCurrentHash();
  var item = tStore.layer2[hash];
  var res = "";
  res += '<center><div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails"><a href="' + item.images[0].path + '">';
  res += '<img src="' + item.images[0].path + '" alt="" width="250" height="385" /></a></div></center>';

  res += '<ul class="zoom-thumbnails">'
  item.images.forEach(function(img, idx) {
    if (idx == 0) return;
    if (idx > 7) return;
    res += '<li><a href="' + img.path + '" data-standard="' + img.path + '">';
    res += '<img src="' + img.path + '" alt="" width=40/></a></li>';
  });
  res += '</ul>';

  $("#zoomDialog").html(res);


  $("#zoomDialog").dialog({
    autoOpen: false,
    modal: true,
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


  var img = {
    w: 800,
    h: 486
  };

  $("#zoomDialog").dialog("option", "width", isWide ? "700" : "350");
  $("#zoomDialog").dialog("option", "height", isWide ? "540" : "400");
  $("#zoomDialog").dialog("open");
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


var JSSORINDEX = 1;
var jssor_1_slider;
/* ORIGINAL */
function initJSSOR() {
  //console.log('INITJSS', $('#jssor_1'));
  //console.trace()
  delete jssor_1_slider;

  var jssor_options = {
    orientation: "1",
    cols: "4",
    spaceX: "21",
    spaceY: "21"
  };
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



  jssor_1_slider = new $JssorSlider$("jssor_" + JSSORINDEX, jssor_1_options),
    easyzoom = [],
    easyZoomApi = [];
  //JSSORINDEX +=1;

  //responsive code begin
  //you can remove responsive code if you don't want the slider scales while window resizing
  function ScaleSlider() {
    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
    if (refSize) {
      refSize = Math.min(refSize, 960);
      refSize = Math.max(refSize, 290);
      jssor_1_slider.$ScaleWidth(refSize);
    } else {
      window.setTimeout(ScaleSlider, 30);
    }
  }

  function zoom() {
    if (768 > Math.min($(window).width(), screen.width)) {
      easyZoomApi.forEach(function(item, i, arr) {
        if (item.$image) {
          item.teardown();
        }
      });
      $('.single-product-main_image:last > div.easyzoom').on('click', function(event) {
        event.preventDefault();
      });
    } else {
      easyZoomApi.forEach(function(item, i, arr) {
        if (!item.$image) {
          item._init();
        }
      });
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
  $('.single-product-main_image:last').find('.easyzoom').each(function() {
    items.push({
      src: $(this).find('> a').attr('href')
    });
  });

  jssor_1_slider.$On($JssorSlider$.$EVT_STATE_CHANGE, function(slideIndex, progress) {

    if (!easyzoom.length) {
      $('.single-product-main_image:last > div.easyzoom').each(function(n) {
        easyzoom[n] = $(this).easyZoom();
        easyZoomApi[n] = easyzoom[n].data('easyZoom');
      });
    }

    if (768 > Math.min($(window).width(), screen.width)) {
      if (easyZoomApi[slideIndex].$image) {
        easyZoomApi[slideIndex].teardown();
      }
    } else {
      if (!easyZoomApi[slideIndex].$image) {
        easyZoomApi[slideIndex]._init();
      }
    }

    $('.single-product-images .enlarge').click(function() {

      $.magnificPopup.open({
        items: items,
        gallery: {
          enabled: true
        },
        type: 'image'
      }, slideIndex);
    });
  });
  // STRANGE FIX...
  $("#jssor_1 > div").css('width', '420px');
  $("#jssor_1").css('width', '420px');
}

function generateWidgets(hash) {
  console.log("widgets to be set...");
  var parsed = parseHash(hash);
  generateBC(parsed);
  widgetFilter(parsed);
  generateFeatured();

  checkInterceptHrefs();
}


