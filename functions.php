<?php
    function portfolio_files() {
        wp_enqueue_script('main-portfolio-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
        wp_enqueue_style('custom-fonts', '//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
        wp_enqueue_style('open-iconic-stylesheet', get_theme_file_uri('/css/open-iconic-bootstrap.min.css'));
        wp_enqueue_style('animate-stylesheet', get_theme_file_uri('/css/animate.css'));
        wp_enqueue_style('carousel-stylesheet', get_theme_file_uri('/css/owl.carousel.min.css'));
        wp_enqueue_style('owl-theme-stylesheet', get_theme_file_uri('/css/owl.theme.default.min.css'));
        wp_enqueue_style('magnific-stylesheet', get_theme_file_uri('/css/magnific-popup.css'));
        wp_enqueue_style('aos-stylesheet', get_theme_file_uri('/css/aos.css'));
        wp_enqueue_style('ionicons-stylesheet', get_theme_file_uri('/css/ionicons.min.css'));
        wp_enqueue_style('flaticon-stylesheet', get_theme_file_uri('/css/flaticon.css'));
        wp_enqueue_style('icomoon-stylesheet', get_theme_file_uri('/css/icomoon.css'));
        wp_enqueue_style('style-stylesheet', get_theme_file_uri('/css/style.css'));
        wp_enqueue_script('jquery-js', get_theme_file_uri('/js/jquery.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('jquery-migrate-js', get_theme_file_uri('/js/jquery-migrate-3.0.1.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('popper-js', get_theme_file_uri('/js/popper.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('boostrap-js', get_theme_file_uri('/js/bootstrap.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('jquery-easing-js', get_theme_file_uri('/js/jquery.easing.1.3.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('jquery-waypoints-js', get_theme_file_uri('/js/jquery.waypoints.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('stellar-js', get_theme_file_uri('/js/jquery.stellar.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('carousel-js', get_theme_file_uri('/js/owl.carousel.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('jquery-magnific-js', get_theme_file_uri('/js/jquery.magnific-popup.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('aos-js', get_theme_file_uri('/js/aos.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('jquery-animateNumber-js', get_theme_file_uri('/js/jquery.animateNumber.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('scrollax-js', get_theme_file_uri('/js/scrollax.min.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), array('jquery'), '1.0', true);
    
        wp_localize_script('main-portfolio-js', 'portfolioData', array(
            'root_url' => get_site_url(),
            'nonce' => wp_create_nonce('wp_rest')               // generates random number for user session that can be access from source
        ));
    }

    add_action('wp_enqueue_scripts', 'portfolio_files');
?>