
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
