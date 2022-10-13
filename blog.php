<section class="ftco-section" id="blog-section">
	<div class="container">
	<div class="row justify-content-center mb-5 pb-5">
		<div class="col-md-7 heading-section text-center ftco-animate">
		<h1 class="big big-2">Blog</h1>
		<h2 class="mb-4">Blog</h2>
		</div>
	</div>
	<div class="row d-flex">
	<?php
		$blogPosts = new WP_Query(array(
			'posts_per_page' => 3,
			'post_type' => 'post',
		));

		while($blogPosts->have_posts()) {
			$blogPosts->the_post();
			?>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
					<a href="<?php the_permalink() ?>" class="block-20" style="background-image: url(<?php the_post_thumbnail_url() ?>);">
					</a>
					<div class="text mt-3 float-right d-block">
					<h3 class="heading"><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
					<div class="d-flex align-items-center mb-3 meta">
						<p class="mb-0">
							<span class="mr-2"><?php the_time('j F Y'); ?></span>
							<!-- <a href="<?php the_permalink() ?>" class="mr-2">Admin</a>
							<a href="<?php the_permalink() ?>" class="meta-chat"><span class="icon-chat"></span> 3</a> -->
						</p>
					</div>
					<p><?php the_excerpt() ?>.</p>
					</div>
				</div>
			</div>
			<?php
		}
	?>
	</div>
	</div>
</section>