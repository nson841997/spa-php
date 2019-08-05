<?php 
get_header(); ?>
<!--CONTAINER-->

<div class="container" id="news-list-page">
	<?php echo do_shortcode('[hotlineBlock]') ?>
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
		<div class="title-page"><h2>Tin tức</h2><span class="logo-title"></span></div>
	</div>
	<!--SLIDER-->

<div class="content-page" style="min-height: 172.5px;">
	<div class="pattern-pink on-show"><div class="pattern-top"></div></div>

	<div class="slide-item-details" >
		<div class="item-list" style="margin-top: 15px">
			<div class="grid swipedown columne selected" id="grid-01">
				<?php if ( have_posts() ) : 
				while ( have_posts() ) : the_post();
				?>
				<div class="item-content-box">
					<div class="col-top">
						<?php the_post_thumbnail()?>
						<div class="item-top-box">
							
							<h3><?php the_title()?></h3>
						</div>
					</div>
					<div class="col-bottom">
						<?php the_excerpt() ?>
					</div>
					<a class="view-topic" href="<?php the_permalink()?>">xem chi tiết<span></span></a>
					<div class="curtain"></div>
				</div>
				<?php
				endwhile;
				else :
					get_template_part( 'content', 'none' );

				endif;
				?>
			</div>
		</div>
	</div>
</div>
	
<!--CONTENT-PAGE-->	
</div>	
	
<?php get_footer(); ?>








