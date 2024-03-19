<?php
wp_footer();
$logo = get_template_directory_uri() . "/asset/images/logo.png";
$bg_footer = get_template_directory_uri() . "/asset/images/bg-footer.jpg";

?>

<footer class="footer-distributed">

	<div class="footer-left">

		<h3><img width="200" src="<?php echo $logo ?>" /></h3>

		<p class="footer-links">
			<a href="#" class="link-1">Home</a>

			<a href="#">Blog</a>

			<a href="#">Pricing</a>

			<a href="#">About</a>

			<a href="#">Faq</a>

			<a href="#">Contact</a>
		</p>

		<p class="footer-company-name">Company Name © 2015</p>
	</div>

	<div class="footer-center">

		<div>
			<i class="fa fa-map-marker"></i>
			<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>+1.555.555.5555</p>
		</div>

		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="mailto:support@company.com">support@company.com</a></p>
		</div>

	</div>

	<div class="footer-right">

		<p class="footer-company-about">
			<span>About the company</span>
			Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
		</p>

		<div class="footer-icons">

			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
		</div>

	</div>

</footer>

<!-- Bootstrap Javascript -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/main.js"></script> -->

</body>

</html>