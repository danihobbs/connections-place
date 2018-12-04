<!-- =================================================
================= Footer Area =============
=========================================================-->

<footer id="footer" class="footer-area">
	<div class="container clearfix">
		<div class="row">
			<div class="col-md-12 col-12">				
				<!-- Sign Up Form  -->
                <div class="signup-form">
                    <h3>Sign up to recieve our newsletter</h3>
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]')?>
                </div>
			</div>

		</div>
		<div class="row">
			<div class="col-12">				
				<!-- Footer Social Links -->
				<div class="social-links">
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>

					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>

					<a href="#" class="envelope"><i class="fa fa-envelope"></i></a>
				</div>

			</div>

		</div>
	</div>
</footer>

		<!-- =================================================
================= Copyright Area =============
=========================================================-->

<section class="copyright-area">
	<div class="container clearfix">
		<div class="row">
			<div class="col-12">				
				<!-- copyright text -->
				<p>Copyright &copy; 2018 <span>Connections Place</span> Victoria B.C. </p>

			</div>

		</div>
	</div>
</section>

</body>
<?php wp_footer(); ?>

</html>