<?php
/**
* The template for displaying the header
*
* Displays all of the head element and everything up until the "site-content" div.
*
* @package WordPress
* @subpackage Twenty_Fifteen
* @since Twenty Fifteen 1.0
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--LOAD-PAGE-->
		<div id="contact-loader"><span class="cycle"></span></div>
		<!--LOAD-PAGE-->
		<div class="load-all-item"></div><div class="nav-click"></div>
		 <?php
                  $image_id = cs_get_option('logo');
                  $logo = wp_get_attachment_image_src( $image_id, 'full' );
                ?>
		<div class="logo vi fadein" style="background-image:url(<?php echo $logo[0] ?>);"><a href="<?= home_url()?>"></a></div>
		<div class="header">
			<div class="navigation fadein">
				<div class="right">
					<!--SEARCH-->
					<a href="javascript:void(0);" class="search">Tìm kiếm...</a>
					<div class="search-form">
						<div class="form-row-search">
							<form action="<?=home_url()?>" id="search" method="get">
								<input id="qsearch" name="s" type="text" class="search-field" value="Tìm kiếm..." placeholder="" data-default="Tìm kiếm...">
							</form>
						</div>
					</div>
					<!--SEARCH-->
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'rmm style menu-header' ) ); ?>



				</div>
		</div>		