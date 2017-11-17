<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Organica
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta property="og:title" content="Туба-дуба: пространство легкости и красоты">
<meta property="og:description" content="Одежда, которая обнимает...">
<meta property="og:image" content="http://tuba-duba.com/wp-content/uploads/2016/08/13932973_1088930401199199_138885520_n.jpg">
<meta name="p:domain_verify" content="f80bef3d9d034afebf0911637637190e"/>

  	<script   src="/img/jq.js"  ></script>
  	<script   src="/wp-content/themes/organica/assets/js/js-combined.js?ver=2.3.1"  ></script>
  	<script   src="/i/jqui/jquery-ui.min.js"  ></script>
	<script type="text/javascript" src="/wp-content/themes/organica/order-config.php"></script>
	<script   src="/wp-content/themes/organica/assets/js/jssor.slider.mini.js?ver=1.0.0"  ></script>
	<script   src="/wp-content/themes/organica/assets/js/jquery.magnific-popup.min.js?ver=1.0.1"  ></script>
	<script   src="/wp-content/themes/organica/assets/js/easyzoom.js?ver=2.3.1"  ></script>
	<script type="text/javascript" src="/wp-content/themes/organica/store2.php"></script>

	<link rel='stylesheet' id='magnific-popup-css'  href='/wp-content/themes/organica/assets/css/magnific-popup.min.css?ver=1.0.1' type='text/css' media='all' />
	<link rel='stylesheet' id='magnific-popup-css'  href='/i/jqui/jquery-ui.min.css' type='text/css' media='all' />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php organica_get_page_preloader(); ?>


<div id="checkoutDialog" style="display:none;">
</div>
<div id="sizeDialog" style="display:none;" title="Таблица размеров">
  <table border="1" cellpadding="1" cellspacing="1" class="des" style="width: 700px;">
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

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'organica' ); ?></a>
	<header id="masthead" <?php organica_header_class(); ?>>
		<?php get_template_part( 'template-parts/header/top-panel' ); ?>
		<div class="header-container">
			<div <?php echo organica_get_container_classes( array( 'header-container_wrap' ) ); ?>>
				<?php get_template_part( 'template-parts/header/layout', get_theme_mod( 'header_layout_type' ) ); ?>
			</div>
		</div><!-- .header-container -->
	</header><!-- #masthead -->
	<?php do_action( 'organica_render_widget_area', 'full-width-header-area' ); ?>
	<div id="content" <?php organica_content_class(); ?>>
