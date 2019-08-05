<?php
/*
Template Name: Liên hệ
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
	<div class="pattern-pink on-show"><div class="pattern-top"></div></div>
	<!--CONTACT-CONTENT-->
	<div class="contact-content">
		<div class="contact-wrap">
			<div class="contact-map fadeinup" style="animation-delay: 82.4696ms;">
				<h3>Charm Beauty</h3>
				<p><strong>Trụ sở chính:</strong> 62-64, Đường 3 Tháng 2, Phường 12, Quận 10, Tp. Hồ Chí Minh</p><p><br></p><div class="google-map">
				<div class="googlemap">
					<div class="touch-m"></div>
					<div class="close-map"></div>
					<div class="zoom-control">
						<a href="#" id="zoom-in">+</a>
						<a href="#" id="zoom-out">-</a>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-info" >
			<h3>Charm Beauty</h3>
			<p><span style="font-weight: bold;">Chi nhánh 02: </span>339A Nguyễn Đình Chiểu, Phường 5, Quận 3 , TP.HCM</p><p><br></p><div class="info-txt">
			<p>Hotline: <span style="font-weight: bold;">1800 6318</span></p><p>Miễn phí Cuộc gọi</p><p>Miễn phí Tư vấn Sắc đẹp</p><hr><p><span style="line-height: 1.42857;">Bác sĩ: </span><span style="line-height: 1.42857; font-weight: bold;">Trường Phạm</span><br></p><p>Mail: bacsi@thammyviencharm.vn</p><p>CSKH: cskh@thammyviencharm.vn</p><p>Giấy phép KD: 0312163169</p><p>Giấy phép HĐ: 01281/SYT- GPHĐ</p></div>
		</div>
		<div class="contact-form" >
			<?= do_shortcode('[contact-form-7 id="21" title="Liên hệ"]') ?>
		</div>
	</div>
</div>
<!--CONTACT-CONTENT-->
</div>
	
<!--CONTENT-PAGE-->	
</div>	
<!--map-->
<div class="infobox-name class-hidden">Charm Beauty</div>
<div class="infobox-hotline-text class-hidden">Hotline:</div>
<div class="infobox-address class-hidden">62-64, Đường 3 Tháng 2, Phường 12, Quận 10, Tp. Hồ Chí Minh</div>
<div class="infobox-hotline class-hidden"> 0914165960</div>
<div class="infobox-image class-hidden">http://charmbeauty.vn/pictures/catalog/logo/logo.png</div>
<div class="infobox-location-lat class-hidden">10.776572999999988</div>
<div class="infobox-location-lng class-hidden"> 106.68049754232788</div>
<div class="infobox-googlemap class-hidden">https://goo.gl/maps/qe4qGmCVdow</div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="http://charmbeauty.vn/catalog/view/theme/default/js/infobox.js"></script>	
<?php get_footer(); ?>