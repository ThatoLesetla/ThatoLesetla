<?php
	get_header();
?>
<section class="hero-wrap js-fullheight">
	<div class="overlay"></div>
	<div class="container">
	<div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
		<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
		<div class="text text-center">
			<span class="subheading">Hey! I am</span>
					<h1>Thato Lesetla</h1>
						<h2>I'm a 
								<span
									class="txt-rotate"
									data-period="2000"
									data-rotate='[ "Full-Stack Software Engineer.", "Cloud Engineer.", "Techie.", "Graphic Designer.", "Blogger" ]'></span>
							</h2>
						</div>
		</div>
		</div>
	</div>
	</div>
	<div class="mouse">
			<a href="#" class="mouse-icon">
				<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
			</a>
		</div>
</section>

<?php 
	require get_theme_file_path('/about.php');
	require get_theme_file_path('/education.php');
	require get_theme_file_path('/projects.php');
	require get_theme_file_path('/blog.php');
	require get_theme_file_path('/contact.php');

	get_footer();
?>