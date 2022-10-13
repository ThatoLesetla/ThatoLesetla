<?php
	get_header();

    while(have_posts()) {
      the_post();
    ?>
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-10 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<h1 class="mb-3 bread"><?php the_title() ?></h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="<?php echo get_site_url('/blog'); ?>">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo get_the_category_list(' | ') ?> <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <?php the_content() ?>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>
            


            <div class="pt-5 mt-5">
              <h3 class="mb-5"><?= $currentPost->comment_count; ?> Comments</h3>
              <ul class="comment-list">
                <?php
                  $comments = get_comments();

                  foreach ($comments as $comment) {

                    ?>
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta">Sept. 12, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                      </li>
                    <?php
                  }
                ?>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading-sidebar">Categories</h3>
              <ul class="categories">
                <?php 
                  $categories = get_categories();

                  foreach($categories as $category) {
                    ?>
                      <li><a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?><span>(12)</span></a></li>
                    <?php
                  }
                ?>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Recent Blog</h3>
              <?php
                $posts = get_posts();

                foreach ($posts as $post) {
                  ?>
                    <div class="block-21 mb-4 d-flex">
                      <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                      <div class="text">
                        <h3 class="heading"><a href="#"><?= $post->post_title ?></a></h3>
                        <div class="meta">
                          <div><a href="#"><span class="icon-calendar"></span> <?= $post->post_date ?></a></div>
                          <div><a href="#"><span class="icon-person"></span> <?= $post->post_author ?></a></div>
                          <div><a href="#"><span class="icon-chat"></span> <?= $post->comment_count ?></a></div>
                        </div>
                      </div>
                    </div>
                  <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- .section -->
        <?php
    }
  get_footer();
?>