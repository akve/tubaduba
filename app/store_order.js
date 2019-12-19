function proceedStoreOrder(isShow) {
  if (isShow) {
    var hash = getCurrentHash();
    var item = tStore.layer2[hash];
    var color = item.colors[lastColor];
    $(".colorchosen").hide();
    lastColor = -1;
    //$(".orderButton").hide();
    console.log(item, color, $("#size").val());
    var price = item.price;
    if (item.pricediscount) price = item.pricediscount;
    cart.push({
      item: item,
      price: price,
      color: color,
      size: $("#size").val()
    });
    onAddToCart(hash);
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

function oneClickOrder() {
  if (window.ga) ga('send', 'event', 'Item', 'oneclickorder', hash);
  var phone = "" + $("#phone").val();
  phone = phone.replace(/[-\(\)]/g, "");
  phone = phone.replace(/ /g, "");
  console.log(phone);
  if (phone.length != 10) {
    alert(_T("[R:Введите пожалуйста телефон][U:Введiть, будь-ласка, телефон]"));
    return;
  }
  var hash = getCurrentHash();
  var item = tStore.layer2[hash];
  var color = item.colors[lastColor];
  //$(".colorchosen").hide();
  //lastColor = -1;
  //$(".orderButton").hide();
  console.log(item, color, $("#size").val());
  var price = item.price;
  if (item.pricediscount) price = item.pricediscount;
  cart.push({
    item: item,
    price: price,
    color: color,
    size: $("#size").val()
  });

  sendOrder(true, phone);
}

function onAddToCart(hash) {
  if (window.ga) ga('send', 'event', 'Item', 'addtocart', hash);
  saveCart();
  if (window.fbq) fbq('track', 'AddToCart');
  res = "<h1>" + _T('[R:Товар добавлен][U:Товар додано]') + "!</h1>";
  res += "<div style='font-size:16px;margin-top:20px;color:#a01a29;text-align:center;padding-top:5px;'>" + _T("[R:Теперь в корзине товаров][U:Тепер в кошику товарiв]") + ": <b>" + cart.length + "</b></div>";
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
      effect: "explode",
      duration: 500
    },
    buttons: {
      "Продолжить покупки": function() {
        $("#checkoutDialog").dialog("close");
      },
      "Перейти к оформлению": function() {
        $("#checkoutDialog").dialog("close");
        setTimeout(function() {
          onSwitchToCart()
        }, 500);
      }
    }
  });

  $("#checkoutDialog").dialog("open");

  //alert('Товар добавлен в корзину'); // TBD: change with dialog
}

function onStoreOrderCancel() {
  if (confirm(_T("[R:Действительно все-все очистить?][U:Дiйсно все очистити?]"))) {
    cart = [];
    drawCart();
  }
  //cart.forEach()
}

function showSizes() {
  $("#sizeDialog").dialog({
    autoOpen: false,
    modal: true,
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
  $("#sizeDialog").dialog("option", "width", isWide ? "720" : "350");


  $("#sizeDialog").dialog("open");
  return false;
}



function removeFromCart(index) {
  cart.splice(index, 1);
  drawCart();
}

function onOrderCancel() {
  if (confirm('Очистить заказ?')) {
    cart = [];
    drawCart();
  }
}

function proceedOrder() {
  $("#orderDetails").show('slow');
  $("#proceedOrder").hide();
  //  $("#oCountry").val(country == "ukraine"?"Украина":(country == "crimea"?"Крым":"Россия"));
  $("#sendOrder").show();
  prefillOrder();
}

function prefillOrder() {
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

function sendOrder(isFromReadyShop, singleClickPhone) {
  if (orderInProgress) return;
  if (window.ga) ga('send', 'event', 'Checkout', 'end', '');
  //if (window.SUPERCOUNTRY && window.SUPERCOUNTRY == "ru") country = "russia";
  //if (window.SUPERCOUNTRY && window.SUPERCOUNTRY == "crimea") country = "crimea";
  //    $("#oCountry").val(country == "ukraine"?"Украина":(country == "crimea"?"Крым":"Россия"));

  if (cart.length == 0) {
    orderInProgress = false;
    alert(_T('[R:Заказ пуст, наберите плиз себе товары][U:Замовлення пусте]'));
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
    } else {
      data = {};
      data['oPhone'] = singleClickPhone;
      data['oEmail'] = 'one-click-order';
    }
  } else {
    data = {
      oName: $("#oName").val(),
      oLastName: $("#oLastName").val(),
      oHeight: $("#oHeight").val(),
      oEmail: $("#oEmail").val(),
      oPhone: $("#oPhone").val(),
      oCountry: country,
      oCity: $("#oCity").val(),
      oSource: $("#oSource").val(),
      oComments: $("#oComments").val(),
      oAddress: $("#oAddress").val()
    };
    window.localStorage['ordervalues'] = JSON.stringify(data);
    for (var i = 0; i < checks.length; i++) {
      if (!data[checks[i]]) {
        alert("Заполните пожалуйста все поля заказа");
        orderInProgress = false;
        return;
      }
    }
    checks.push("oComments");
    checks.push("oSource");
  }
  //  data.oPhone = data.oPhone.replace(/-/g,"");


  var a = new Date();
  var id = "" + (a.getMonth() + 1) + "-" + a.getDate() + "-" + parseInt(Math.random() * 10000);
  var html = "";

  var zakaz = drawCart(true);
  var zakazPlain = drawCart(true, true);

  html += zakaz;



  html += _T("<h4>[R:Ваши детали][U:Вашi деталi]:</h4><table class='table' cellpadding=3 cellspacing=3>");
  html += _T("<tr><td>[R:Имя][U:Iм'я]</td><td>") + data.oName + " " + data.oLastName + "</td></tr>";
  html += _T("<tr><td>[R:Рост][U:Зрiст]</td><td>") + data.oHeight + "</td></tr>";
  html += _T("<tr><td>[R:Телефон][U:Телефон]</td><td>") + data.oPhone + "</td></tr>";
  html += _T("<tr><td>[R:Email][U:Email]</td><td>") + data.oEmail + "</td></tr>";
  html += _T("<tr><td>[R:Страна][U:Країна]</td><td>") + country + "</td></tr>";
  html += _T("<tr><td>[R:Город][U:Мiсто]</td><td>") + data.oCity + "</td></tr>";
  html += _T("<tr><td>[R:Адрес][U:Адреса]</td><td>") + data.oAddress + "</td></tr>";
  //html += "<tr><td>[R:Откуда узнали][U:Звiдки взнали]</td><td>" + data.oSource + "</td></tr>";
  html += _T("<tr><td>[R:Комментарии][U:Коментар]</td><td>") + data.oComments + "</td></tr>";
  html += "</table>";
  var htmlEmail = _T("<h3>[R:Спасибо за заказ!<br>Его номер][U:Дякуємо за замовлення!<br> Його номер] ") + id + "</h3>" + html;
  var html = _T("<h3>[R:Спасибо за заказ! <br>Его номер][U:Дякуємо за замовлення!<br> Його номер] ") + id + "</h3>" + html;

  html = _T(html);
  htmlEmail = _T(htmlEmail);
  //http://tuba-duba.com

  data = {
    id: id,
    name: data.oName + " " + data.oLastName,
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
    body: htmlEmail
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
    if (data.phone.indexOf("+") == 0 && data.phone.length == 13) {
      phoneOK = true;
    }
    if (!phoneOK) {
      orderInProgress = false;
      alert(_T("[R:Проверьте, пожалуйста, телефон. Он, похоже, неверный.][U:Перевiрте телефон, будь-ласка.]"));
      return;
    }
  }

  if (!singleClickPhone) {
    $("button#proceedOrder").css({
      opacity: 0.7
    }).val("В процессе...");
  }
  $.LoadingOverlay("show");
  var jqxhr = $.post("/sender/sendorder.php", data, function(response) {
    $("button#proceedOrder").css({
      opacity: 1
    }).val(_T("[R:Оформить заказ][U:Оформити замовлення]"));

    if (window.fbq) fbq('track', 'Purchase', {
      value: '100',
      currency: 'UAH'
    });
    if (response.indexOf("1") >= 0) {
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
    } else {
      orderInProgress = false;
      alert("Произошла какая-то ошибка :( Позвоните, пожалуйста, в поддержку.");
    }
  });
  jqxhr.fail(function() {
    orderInProgress = false;
    alert("Произошла какая-то ошибка :( Позвоните, пожалуйста, в поддержку.");
  })
  jqxhr.always(function() {
    $.LoadingOverlay("hide");
    orderInProgress = false;
  });

}

function okQuick() {
  cart = [];
  saveCart();
  var res = "";
  res += _T("[R:Спасибо! Наш менеджер скоро свяжется с вами. <br>Если вы получили SMS, значит, все точно хорошо.][U:Дякуємо! Наш менеджер наразi зв'яжеться з вами. <br>Якщо ви отримали SMS, це означає що все добре.] ");
  $("#checkoutDialog").html(res);
  var titleForBtn = _T("[R:Продолжить][U:Продовжити]");
  var buttons = {};
  buttons[titleForBtn] = function() {
    $("#checkoutDialog").dialog("close");
  };
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
    'title': _T('[R:Заказ отправлен][U:Замовлення вiдправлено]'),
    buttons: buttons
  });

  $("#checkoutDialog").dialog("open");
}

function checkoutInit() {
  saveCart();
  prefillOrder();
  if ($("#orderDetails").length == 0) return;
  if (window.ga) ga('send', 'event', 'Checkout', 'start', '');
  if (window.fbq) fbq('track', 'InitiateCheckout');
  $("#orderDetails").show('slow');
  drawCart();
}

function onSwitchToCart() {
  document.location = "/checkout";
}



function saveCart() {
  window.localStorage['cart'] = JSON.stringify(cart);
  if (cart.length > 0) {
    $(".checkout-text").html(cart.length);
    $(".checkout-text").show('bounce');
    $('.cart-contents .count').show();
  } else {
    $(".checkout-text").hide();
    $('.cart-contents .count').hide();
  }
  $('.cart-contents .count').html(cart.length);
  $('.cart-contents').click(function() {
    //document.location = '/checkout';
    onSwitchToCart();
  })
  if (cart.length == 0) {
    $('.shopping_cart-dropdown-wrap').html(_T("[R:Ваша корзина пока пуста][U:Кошик поки що пустий]"));
  } else {
    var i = `<li class="woocommerce-mini-cart-item mini_cart_item">
      <span class='title'>TITLE</span><span class="amount">PRICE</span>
      </li>`;
    var carthtml = '';
    var sum = 0;
    cart.forEach(function(item) {
      sum += parseInt(item.item.price);
      carthtml += i.replace(/TITLE/, item.item.title).replace(/PRICE/, item.item.pricediscount ? item.item.pricediscount : item.item.price)
    })
    var html = _T(`<div class='widget'><div class='woocommerce'><div class='widget_shopping_cart'><h4>[R:Моя корзина][U:Мiй кошик]</h4><div class='widget_shopping_cart_content'><ul class="woocommerce-mini-cart cart_list product_list_widget ">
              `) + carthtml + _T(`
            </ul>

  <p class="woocommerce-mini-cart__total total"><strong>[R:Итого][U:Разом]:</strong> <span class="woocommerce-Price-amount amount">TOTAL<span class="woocommerce-Price-currencySymbol"> грн</span></span></p>


  <p class="woocommerce-mini-cart__buttons buttons"><a href="/checkout/" class="button checkout wc-forward">[R:Оформить][U:Оформити]</a></p></div></div></div></div>
  `);
    html = html.replace(/TOTAL/, sum);
    $('.shopping_cart-dropdown-wrap').html(html);
  }
}

function drawCart(calcOnly, plain) {
  saveCart();
  if (!calcOnly) {
    if (cart.length == 0) {
      $("#orderItems").html(_T("[R:Ваша корзина пока пуста][U:Кошик поки що пустий]") + " :(<br><br>");
      $("#orderForm").hide('slow');
      return;
    }
    $("#orderForm").show('slow');
  }

  var templateTotal = _T(`<div class='woocommerce'><div id="order_review" class="woocommerce-checkout-review-order">
    <table class="shop_table shop_table_responsive woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name" colspan="2">Товар</th>
      <th class="product-quantity">[R:Размер][U:Розмiр]</th>
      <th class="product-quantity">[R:Цвет][U:Колiр]</th>
      <th class="product-total">[R:Цена][U:Цiна]</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

                ITEMS

            </tbody>
  <tfoot>
    <tr class="order-total">
      <th colspan="4">Итого</th>
      <td style='text-align:center'><strong><span class="woocommerce-Price-amount amount">TOTAL<span class="woocommerce-Price-currencySymbol"> грн</span></span></strong> </td>
      <td></td>
    </tr>
  </tfoot>
</table>
  </div></div>`);
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
                  <span class="woocommerce-Price-amount amount">PRICE<span class="woocommerce-Price-currencySymbol"> грн</span></span>           </td>
                <td><a href='javascript:void(0)' onclick='removeFromCart("INDEX");return false;'><i class='fa fa-remove'></i></a></td>
                </tr>`;

  var html = _T("<table class='table'><tr><th>[R:Ткань/цвет][U:Тканина/колiр]</th><th>[R:Ширина/размер][U:Ширина/розмiр]</th><th>[R:Длина][U:Довжина]</th><th>[R:Цена][U:Цiна]</th><th>[R:Всего][U:Разом]</th><th>&nbsp;&nbsp;&nbsp;</th></tr>");
  if (plain) html = "";
  var sum = 0;
  var hasFabrics = false;
  var hasReady = false;
  console.log("CART", cart);
  cart.forEach(function(c, index) {
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
      "<td><a href='javascript:void(0)' onclick='removeFromCart(" + index + ");return false;'><img src='/img/DeleteRed.png' width=16 height=16></a></td></tr>";
    if (plain) {
      template = c.color.title + "/" + c.width.width + "/" + c.len + "/" + (parseInt(parseFloat(c.len) * c.width.price)) + " -- ";
    }
    html += template;
  });
  if (!plain) html += "</table>";
  if (!hasFabrics) html = "";
  if (hasReady) {
    if (!plain) html += _T("<table class='table'><tr><th>Товар</th><th>[R:Цвет][U:Колiр]</th><th>[R:Размер][U:Розмiр]</th><th>[R:Цена][U:Цiна]</th><th>&nbsp;&nbsp;&nbsp;</th></tr>");
    cart.forEach(function(c, index) {
      if (!c.item) return;
      console.log(c.item);
      sum += parseInt(c.price);
      var template = "<tr><td>" + c.item.title +
        //"</td><td>" + (c.width.thick?c.width.thick:"средняя") +
        "</td><td>" + (c.color ? c.color.id : '') +
        "</td><td>" + (c.size ? c.size : "") +
        "</td><td>" + c.price +
        "<td><a href='javascript:void(0)' onclick='removeFromCart(" + index + ");return false;'><img src='/img/DeleteRed.png' width=16 height=16></a></td></tr>";
      if (plain) {
        template = c.item.title + "/" + (c.color ? c.color.id : '') + "/" + (c.size ? c.size : "") + "/" + c.price + " -- ";
      }
      html += template;
    });
    if (!plain) html += "</table>";
  }

  if ($("#oGift:checked").length > 0) {}

  /*    if ($("#giftCarton:checked").length >0) {
        html += plain ? " + картонная упаковка" : "<p> + картонная упаковка на подарок (30 грн)</p>";
        sum += 30;
      }
      if ($("#giftBox:checked").length >0) {
        html += plain ? " + деревянная упаковка" : "<p> + деревянная упаковка на подарок (100 грн)</p>";
        sum += 100;
      }*/

  var itemsHtml = "";
  cart.forEach(function(c, index) {
    if (!c.item) return;

    var itemHTML = itemTemplate.replace(/TITLE/, c.item.title);
    itemHTML = itemHTML.replace(/COLOR/, c.color.id);
    itemHTML = itemHTML.replace(/URL/g, generateHash({
      id: c.item.id
    }));
    itemHTML = itemHTML.replace(/IMAGE/, c.item.images.length ? c.item.images[0].path : '');
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
