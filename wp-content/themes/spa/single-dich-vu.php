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
<div class="services-nav-icon">
<ul>
<li><a class="overview" href="javascript:void(0);" data-goto="1"><span>Mô tả</span></a></li>
<li><a class="advantage" href="javascript:void(0);" data-goto="2"><span>Ưu điểm</span></a></li>
<li><a class="process" href="javascript:void(0);" data-goto="3"><span>Quy trình</span></a></li>
</ul>
</div>



<div class="container" id="services-page">
	<?php echo do_shortcode('[hotlineBlock]') ?>
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
		<div class="pattern-pink"><div class="pattern-top"></div></div>
		<div class="leaf-top">
		<span class="leaf2"></span>
		<span class="leaf1"></span>
		</div>
		<div class="bg-white"></div>
		<div class="page-overflow">
			<div class="colum-content">				

				<div class="colum-box" id="01">
					<div class="menu-service select"></div>
					<div class="services-load">
						<div class="services-top fadeinup"><h2><?php the_title() ?></h2></div>
						<?php $meta = get_post_meta( get_the_ID(), '_custom_meta_options_dichvu', true ); ?>
						<div class="services-center">
							<div class="services-detail fadeinup" data-id="1">
								<h1><?php echo $meta['title_quy_trinh'] ?></h1>
								<div class="services-txt"><?php echo $meta['description'] ?></div>
							</div>
							<div class="services-detail fadeinup" data-id="2">
								<h1><?php echo $meta['title_uu_diem'] ?></h1>
								<div class="services-txt no-bg">
									<?php 
										$uuDiem = $meta['content_uu_diem_list']; 
										if(count($uuDiem) > 0):
									?>
									<div class="advantage-list">
										<?php for ($i = 1; $i <= count($uuDiem); $i++) { ?>
										<div class="advantage-item">
											<div class="advantage-number"><?php echo $i ?></div>
											<div class="advantage-txt">
												
												<p><?php echo $uuDiem[$i]['content_uu_diem'] ?></p>
											</div>
										</div>
										<?php } ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="services-detail fadeinup" data-id="3">
								<h1><?php echo $meta['title_quy_trinh'] ?></h1>
								<?php $quyTrinh = $meta['content_quytrinh'];  ?>
								<div class="services-txt no-bg">
									<?php if(count($quyTrinh) > 0): ?>
										<?php for ($i = 1 ; $i <= count($quyTrinh) ; $i++) { ?>
										<?php if(($i - 1) % 2 == 0 ) echo '<div class="step-row">'; ?>
											
												<div class="step-col">
													<div class="anh-dai-dien" style="margin-bottom: 15px">
														<?= wp_get_attachment_image($quyTrinh[$i]['content_quy_trinh_imgae'] ) ?>
													</div>
													<?= $quyTrinh[$i]['content_quy_trinh'] ?>
												</div>
												
										<?php if($i % 2 == 0 || count($quyTrinh) == $i) echo '</div>' ?>
											
											<?php } ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>
