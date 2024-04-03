<?php
wp_footer();
$rootURL = '/wordpress';
$logo = get_template_directory_uri() . "/asset/images/footer-logo.png";
$footer1 = get_template_directory_uri() . "/asset/images/footer1.png";
?>

<footer>
	<div class="footer-top bg-blue-active">
		<div class="py-4 container d-flex flex-row justify-content-between">
			<a href="<?php echo $rootURL; ?>"><img width="175" src="<?php echo $logo ?>" /></a>
			<div class="px-5">
				<p class="text-white font-weight-bold text-uppercase">Công ty cổ phần quốc tế hòa bình</p>
				<p class="text-white"><span class="font-weight-bold">Địa chỉ: </span><span>Số 15, hẻm 7, ngách 73, ngõ 1194 đường Láng, Phường Láng Thượng, Quận Đống Đa, Thành phố Hà Nội, Việt Nam</span></p>
				<p class="text-white"><span class="font-weight-bold">Hotline: </span><span>0999 999 999</span></p>
				<p class="text-white"><span class="font-weight-bold">Email: </span><span>hoabinhcompany@gmail.com</span></p>
			</div>
			<div>
				<img width="200" src="<?php echo $footer1 ?>" />
			</div>
		</div>
	</div>
	<div class="footer-bottom bg-blue py-2 text-center">
		<span class="text-white">© Copyright 2024 - </span>
		<span class="text-white text-uppercase">Công ty cổ phần Quốc tế Hoà Bình</span>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</body>

</html>