<?php
/*
Template Name: Giới thiệu
*/
get_header(); ?>
<!--CONTAINER-->

<div class="container" id="about-page">
	<!--SLOGAN-->
	<?php echo do_shortcode('[hotlineBlock]') ?>
	<!--SLOGAN-->
	<!--SLIDER-->
	<div class="slider-inner" data-time="5000">
		<div class="slide-banner">
			<div class="slide-bg-inner">
				<div class="bg-inner" style="background-image:url(http://charmbeauty.vn/pictures/catalog/background/bg5.jpg)"><span></span></div>
				<div class="model" style="background-image:url(http://charmbeauty.vn/pictures/catalog/background/model1.png)"></div>
			</div>
			<div class="slide-bg-inner">
				<div class="bg-inner" style="background-image:url(http://charmbeauty.vn/pictures/catalog/background/bg6.jpg)"><span></span></div>
				<div class="model" style="background-image:url(http://charmbeauty.vn/pictures/catalog/background/model2.png)"></div>
			</div>
		</div>
		<div class="title-page"><h2><?php the_title()?></h2><span class="logo-title"></span></div>
	</div>
	<!--SLIDER-->

<div class="content-page" style="min-height: 172.5px;">
	<!--LOAD CONTENT-->
	<div class="load-content" style="opacity: 1">
		<div class="introduction-section on-show">
			<div class="introduction-title">
				<div class="pattern-top"></div>
				<h3><strong><?php the_title()?></strong></h3>
			</div>
			<div class="introduction-detail">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					the_content();


				// End the loop.
				endwhile;
				?>
			</div>
		</div>
	</div>

<!--LOAD CONTENT-->

</div>
	
<!--CONTENT-PAGE-->	
</div>	
	
<?php get_footer(); ?>