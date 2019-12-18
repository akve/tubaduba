function generateFeatured(fromItemId, fromItemGroup) {
  if (!$(".shopFrontPage") && !fromItemId) return;

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

            <!--<div class="block_product_thumbnail"><a href="LINK" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
            SALE
          <img width="1" height="1" src="IMAGE" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt=""></a></div>--><a href="LINK" class="woocommerce-loop-product__title">TITLE</a>
            <span class="price">PRICEDISCOUNT<ins><span class="woocommerce-Price-amount amount">PRICE<span class="woocommerce-Price-currencySymbol"> грн</span></span></ins></span>

          </div>`;

  var r = "";



  tStore.layer1.forEach(function(item) {
    if (!item.featured && !fromItemId) return;
    if (fromItemId && (item.group != fromItemGroup || item.id == fromItemId)) return;
    var slide = "" + template;
    slide = slide.replace(/SALE/g, "");
    slide = slide.replace(/LINK/g, generateHash({
      id: item.id
    }));
    slide = slide.replace(/IMAGE/g, item.images[0].path);
    slide = slide.replace(/TITLE/g, item.title);
    //slide = slide.replace(/PRICEDISCOUNT/g, "");
    var price = item.price;
    if (item.pricediscount) {
      slide = slide.replace(/PRICEDISCOUNT/g, '<del><span class="woocommerce-Price-amount amount">' + parseInt(item.price) + '<span class="woocommerce-Price-currencySymbol"> грн</span></span></del>');
      slide = slide.replace(/PRICE/g, parseInt(item.pricediscount));
    } else {
      slide = slide.replace(/PRICEDISCOUNT/g, "");
      slide = slide.replace(/PRICE/g, parseInt(item.price));
    }


    r += slide;
    //
    //<span class="onsale">Sale</span>
  })
  res = res.replace("SLIDES", r);
  if (fromItemId) {
    //res = res.replace("swiper-container","swiper-item-container");
    $(".additional-items").html(res);
    var mySwiper = new Swiper('.swiper-container', {
      "slidesPerView": 4,
      "slidesPerGroup": 1,
      "slidesPerColumn": 1,
      "spaceBetween": 50,
      "speed": 500,
      "loop": false,
      "freeMode": false,
      "grabCursor": true,
      "mousewheelControl": false,
      "paginationClickable": true,
      "nextButton": "#swiper-carousel-5a08913f6b0a9-next",
      "prevButton": "#swiper-carousel-5a08913f6b0a9-prev",
      "pagination": "#swiper-carousel-5a08911ab4c92-pagination",
      "breakpoints": {
        "480": {
          "slidesPerView": 2,
          "spaceBetween": 8
        },
        "768": {
          "slidesPerView": 2,
          "spaceBetween": 12
        },
        "992": {
          "slidesPerView": 3,
          "spaceBetween": 15
        }
      }
    });

  } else {
    $(".shopFrontPage").html(res);
    var mySwiper = new Swiper('.swiper-container', {
      "slidesPerView": 4,
      "slidesPerGroup": 1,
      "slidesPerColumn": 1,
      "spaceBetween": 100,
      "speed": 500,
      "loop": false,
      "freeMode": false,
      "grabCursor": true,
      "mousewheelControl": false,
      "paginationClickable": true,
      "nextButton": "#swiper-carousel-5a08913f6b0a9-next",
      "prevButton": "#swiper-carousel-5a08913f6b0a9-prev",
      "pagination": "#swiper-carousel-5a08911ab4c92-pagination",
      "breakpoints": {
        "480": {
          "slidesPerView": 2,
          "spaceBetween": 8
        },
        "768": {
          "slidesPerView": 2,
          "spaceBetween": 15
        },
        "992": {
          "slidesPerView": 3,
          "spaceBetween": 23
        }
      }
    });
  }
}
