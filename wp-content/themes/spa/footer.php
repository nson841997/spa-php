<div class="bottom" style="background-image:url(<?= get_template_directory_uri()?>/images/bg-bottom.jpg)">
	<div class="bottom-logo"></div>
	<div class="bottom-slide">
		<div class="bottom-box">

			<div class="bottom-col">
				<h2>ĐỈNH CAO LASER FOTONA</h2>
				<p>Đỉnh Cao Laser FOTONA- Công nghệ hàng đầu Châu Âu điều trị các vấn đề về da.</p>
			</div>
			<div class="bottom-col">
				<h2>ĐIỀU TRỊ DA</h2>
				<p>Điều trị da với các vấn đề về da như sạm, nám, mụn, thâm, tàn nhang... khiến bạn đau đầu lo lắng sẽ được Thẩm mỹ viện Charm xóa bỏ hoàn toàn bằng công nghệ hiện đai. Hotline: 1800 6345.</p>
			</div>
			<div class="bottom-col">
				<h2>PHUN XĂM</h2>
				<p>Đường nét gương mặt thêm hoàn hảo nhờ công nghệ vi chạm môi, mày và mắt tại Charm.Giúp chị em đẹp đến từng centimet.</p>
			</div>
			<div class="bottom-col">
				<h2>THẪM MỸ KHÔNG PHẪU THUẬT</h2>
				<p>Với thao tác nhẹ  nhàng, không đau, không để lại sẹo và không biến chứng và ngày càng được nhiều khách hàng ưu ái lựa chọn.</p>
			</div>
			<div class="bottom-col">
				<h2>PHẪU THUẬT THẪM MỸ</h2>
				<p>Đánh thức sự quyến rũ nhờ PTTM đã không còn quá xa lạ khi hoán đổi “vịt bầu xấu xí” thành  “thiên nga” hiện đại, sang trọng, quý phái.</p>
			</div>
		</div>
	</div>
</div>
<div class="social">
	<span class="line-top"></span>
	<ul>
		<li><a class="google" target="_blank" href="<?= cs_get_option('goole') ?>">Google</a></li>
		<li><a class="facebook" target="_blank" href="<?= cs_get_option('facebook') ?>">Facebook</a></li>
		<li><a class="youtube" target="_blank" href="<?= cs_get_option('youtube') ?>">Youtube</a></li>
	</ul>
	<div class="hotline">
		<div class="hot-consulting"><p>Tư vấn dịch vụ & CSKH</p></div>
		<div class="hot-cal"><a href="tel:<?= cs_get_option('hotline') ?>"><?= cs_get_option('hotline') ?></a><p>miễn phí cuộc gọi</p></div>
	</div>
	<span class="line-bottom"></span>
</div>
<div class="copyright"><p>2019  ©  <strong>Doctor Spa</strong>.  All Rights Reserved.  <a href="http://www.btq.vn" target="_blank">DEVELOPED BY DoctorSpa</a></p></div>
<div class="overlay-menu"></div>
<div class="go-top"></div> 
<div class="scroll-down"></div>
<div class="httpserver class-hidden"><?= home_url();?>/</div>
<div class="httptemplate class-hidden"><?= home_url();?>/</div>
<?php wp_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=654623314742143&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
