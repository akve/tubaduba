<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page header div.
 *
 * @package Neve
 * @since   1.0.0
 */

$header_classes = apply_filters( 'nv_header_classes', 'header' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

    <meta property="og:title" content="Туба-дуба: пространство легкости и красоты">
    <meta property="og:description" content="Одежда, которая обнимает...">
    <meta property="description" content="Волшебная одежда, созданная с легкостью и любовью для Вас. Проект, объединяющий творческих людей. С радостью ответим на ваши вопросы: 38 050 068 66 72">
    <meta property="og:image" content="http://tuba-duba.com/wp-content/uploads/2016/08/13932973_1088930401199199_138885520_n.jpg">
    <meta name="p:domain_verify" content="f80bef3d9d034afebf0911637637190e"/>
    <script   src="/app/assets/js/jq.js"  ></script>
    <script   src="/app/assets/js/vendor/js-combined.js?ver=2.3.6"  ></script>
    <script   src="/app/assets/js/jqui2/jquery-ui.min.js"  ></script>
    <script   src="/app/assets/js/vendor/jssor.slider.mini.js?ver=1.0.0"  ></script>
    <script   src="/app/assets/js/vendor/easyzoom.js"  ></script>
    <script   src="/app/assets/js/vendor/jquery.magnific-popup.min.js?ver=1.0.1"  ></script>
    <script   src="/app/assets/js/vendor/loadingoverlay.js?ver=2.3.6"  ></script>

    <script src="/app/assets/js/vendor/swiper/package/js/swiper.min.js"></script>

    <script type="text/javascript" src="/app/store_init.js?ver=2.5.5"></script>
    <script type="text/javascript" src="/app/store.js?ver=2.5.5"></script>
    <script type="text/javascript" src="/app/store_generatefeatured.js?ver=2.5.5"></script>
    <script type="text/javascript" src="/app/store_listing.js?ver=2.5.5"></script>
    <script type="text/javascript" src="/app/store_order.js?ver=2.5.5"></script>

      <link rel='stylesheet' id='magnific-popup-css'  href='/app/assets/js/vendor/swiper/package/css/swiper.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='magnific-popup-css'  href='/app/assets/css/magnific-popup.min.css?ver=1.0.1' type='text/css' media='all' />
      <link rel='stylesheet' id='magnific-popup-css'  href='/app/assets/css/custom.css?ver=1.0.1' type='text/css' media='all' />
      <link rel='stylesheet' id='magnific-popup-css'  href='/app/assets/js/jqui2/jquery-ui.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='magnific-popup-css'  href='/app/assets/css/app.css?ver=1.0.1' type='text/css' media='all' />
      <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84542153-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-84542153-1');
    </script>
</head>

<body <?php body_class(); ?> <?php echo wp_kses( apply_filters( 'neve_body_data_attrs', '' ), array( '[class]' => true ) ); ?>>
<?php wp_body_open(); ?>

<div id="checkoutDialog" style="display:none;">
</div>
<div id="sizeDialog" style="display:none;" title="Таблица размеров">
  <table border="1" cellpadding="1" cellspacing="1" class="des" style="width: 690px;">
  <tbody>
    <tr>
      <th>
        Размер</th>
      <td>
        S</td>
      <td>
        M</td>
      <td>
        L</td>
      <td>
        XL</td>
      <td>
        2XL</td>
      <td>
        3XL</td>
      <td>
        4XL</td>
      <td>
        5XL</td>
    </tr>
    <tr>
      <th>
        Размер Украинский</th>
      <td>
        44</td>
      <td>
        46</td>
      <td>
        48</td>
      <td>
        50</td>
      <td>
        52</td>
      <td>
        54</td>
      <td>
        56</td>
      <td>
        58</td>
    </tr>
    <tr>
      <th>
        Обхват груди (см)</th>
      <td>
        86</td>
      <td>
        92</td>
      <td>
        98</td>
      <td>
        104</td>
      <td>
        110</td>
      <td>
        116</td>
      <td>
        122</td>
      <td>
        128</td>
    </tr>
    <tr>
      <th>
        Обхват талии&nbsp;(см)</th>
      <td>
        68</td>
      <td>
        74</td>
      <td>
        80</td>
      <td>
        86</td>
      <td>
        92</td>
      <td>
        98</td>
      <td>
        106</td>
      <td>
        112</td>
    </tr>
    <tr>
      <th>
        Обхват бедер&nbsp;(см)</th>
      <td>
        92</td>
      <td>
        98</td>
      <td>
        106</td>
      <td>
        112</td>
      <td>
        118</td>
      <td>
        124</td>
      <td>
        130</td>
      <td>
        136</td>
    </tr>
  </tbody>
</table>
</div>

<div class="wrapper">
	<header class="<?php echo esc_attr( $header_classes ); ?>" role="banner">
		<a class="neve-skip-link show-on-focus" href="#content" tabindex="0">
			<?php echo __( 'Skip to content', 'neve' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</a>
		<?php
		neve_before_header_trigger();
		if ( apply_filters( 'neve_filter_toggle_content_parts', true, 'header' ) === true ) {
			do_action( 'neve_do_header' );
		}
		neve_after_header_trigger();
		?>
	</header>
	<?php do_action( 'neve_before_primary' ); ?>

	<main id="content" class="neve-main" role="main">

<?php
do_action( 'neve_after_primary_start' );

