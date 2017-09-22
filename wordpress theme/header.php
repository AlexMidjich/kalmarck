<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kalmarck
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport'>
	<link rel="profile" href="http://gmpg.org/xfn/11">

		<!-- Core CSS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

		<!-- Font awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kalmarck' ); ?></a>

	<header id="masthead" class="site-header">

			<div id='navbar'>
				<?php
					wp_nav_menu( array(


					'menu'				=> 'primary',
					'menu_class' => 'menulinks close'
					) );
				?>

				<a href="https://www.facebook.com/Kalmar-cykelklubb-175016142544675/?fref=ts" target="_blank"><i class="fa fa-facebook-official socialheader_facebook" style="font-size:36px;"></i></a>
				<div id="menubtn"><i class="fa fa-bars" aria-hidden="true" style="font-size: 24px; color: #ffffff;"></i></div>
				<a href='http://kalmarcykelklubb.se/157-2/'><button id="blimedlem">Bli medlem</button></a>
			</div>
