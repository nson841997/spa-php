<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<!--CONTAINER-->

<div class="container" id="news-page">
	<!--SLOGAN-->
	<div class="slogan sub ">
		<div class="slogan-text">
			<h2 class="slogan-note">đánh thức</h2>
			<h2>sự quyến rũ</h2>
			<a class="slogan-cal" href="tel:0914165960">0914165960</a>
		</div>
		<span class="slogan-dot N1"><span></span></span>
		<span class="slogan-dot N2"><span></span></span>
		<span class="slogan-dot N3"><span></span></span>
		<span class="slogan-dot N4"><span></span></span>
		<span class="slogan-dot N5"><span></span></span>
		<span class="slogan-dot N6"><span></span></span>
		<span class="slogan-dot N7"><span></span></span>
		<span class="slogan-dot N8"><span></span></span>
		<span class="slogan-dot N9"><span></span></span>
		<span class="slogan-dot N10"><span></span></span>
		<span class="slogan-dot N11"><span></span></span>
		<span class="slogan-dot N12"><span></span></span>
		<span class="slogan-dot N13"><span></span></span>
		<span class="slogan-dot N14"><span></span></span>
		<span class="slogan-dot N15"><span></span></span>
		<span class="slogan-dot N16"><span></span></span>
		<div class="bg-slogan">
			<span class="flat-01"></span>
			<span class="flat-02"></span>
			<span class="flat-03"></span>
			<span class="flat-04"></span>
			<span class="flat-05"></span>
			<span class="flat-06"></span>
		</div>
	</div>
	<!--SLOGAN-->
	<!--SLIDER-->
	<div class="slider-inner" data-time="5000">
		<div class="slide-banner">
			<div class="slide-bg-inner">
				<div class="bg-inner" style="background-image:url(http://charmbeauty.vn/pictures/catalog/background/bg7.jpg)"><span></span></div>
				<div class="model" style="background-image:url(http://charmbeauty.vn/pictures/catalog/background/model3.png)"></div>
			</div>
			<div class="slide-bg-inner">
				<div class="bg-inner" style="background-image:url(http://charmbeauty.vn/pictures/catalog/background/bg8.jpg)"><span></span></div>
				<div class="model" style="background-image:url(http://charmbeauty.vn/pictures/catalog/background/model4.png)"></div>
			</div>
		</div>
		<div class="title-page"><h2>Tin Tức</h2><span class="logo-title"></span></div>
	</div>
	<!--SLIDER-->
	<div class="content-page">
		<div class="page-overflow fadeinup">
			<div class="colum-content">
				<div class="colum-box active" id="01">
					<div class="news-load select">
						<div class="detail-news fadeinup">
							<div class="news-text">
								<h3><?php the_title() ?></h3>
								<div>
									<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; ?>
							<?php endif; ?>
								</div>
							</div>
							<?php

								$categories = get_the_category(get_the_ID());
								if ($categories){
								    echo '<div class="relatedcat">';
								    $category_ids = array();
								    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
								    $args=array(
								        'category__in' => $category_ids,
								        'post__not_in' => array(get_the_ID()),
								        'posts_per_page' => 4, // So bai viet dc hien thi
								    );
								    $my_query = new wp_query($args);
								    if( $my_query->have_posts() ):
								        echo '<h3>Tin liên quan</h3><div class="related">';
								        while ($my_query->have_posts()):$my_query->the_post();
								            ?>
								            <div div class="related-col">
								            	<a href="<?php the_permalink() ?>">
												<?php the_post_thumbnail() ?>
												</a>
								            	<a class="title" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								            </div>
								            <?php
								        endwhile;
								        echo '</div>';
								    endif; wp_reset_query();
								    echo '</div>';
								}
								?>


						</div>
					</div>
					
				</div>
	
			</div>

		</div>


	</div>
	<div class="contact-content">		
		<div class="services-detail" style=" opacity: 1;padding-top:10px;"> 
			<div class="services-txt" style="height: 400px;max-height: 400px;
				overflow-y: auto;">

				<div class="services-result"> 
					<div class="fb-comments" data-href="<?php the_permalink( ) ?>"  data-numposts="5" data-width="100%"></div>
					
				</div>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
