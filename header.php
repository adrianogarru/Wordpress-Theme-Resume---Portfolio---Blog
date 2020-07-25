<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="Adriano Garruba">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo('name'); ?> - 
         <?php is_front_page() ? bloginfo("description") : wp_title(); ?>
   </title>
  <!-- Bootstrap CSS -->
  <link href="<?php bloginfo('template_url'); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font-Awesome -->
  <link href="<?php bloginfo('template_url'); ?>/assets/fontawesome/css/all.css" rel="stylesheet">
    <!--Font-Awesome load all styles -->
  <script defer src="<?php bloginfo('template_url'); ?>/assets/fontawesome/js/all.js"></script>
  <link href="<?php bloginfo('template_url'); ?>/assets/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/fontawesome/css/brands.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/fontawesome/css/solid.css" rel="stylesheet">
  <!-- Custom CSS - all the classes start with: customclass are not Bootstrap classes but customized-->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body class="customclass-body">
  <!-- Start Header -->
  <div class="container shadow p-3 mb-5 bg-white">
    <div class="row">
      <div class="col-md-4 col-sm-5 text-center"><img class="customclass-foto" alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>"></div>
      <div class="col-md-6 col-sm-5">
        <h1 class="text-uppercase customclass-sm-center" ><?php bloginfo('name'); ?></h1>
        <!--Name Surname -->
        <h4 class="customclass-sm-center"><?php bloginfo('description'); ?></h4>
        <!--Profession -->
        <br>
        <div class="row">
          <ul class="list-group list-group-horizontal customclass-no-dots-list customclass-sm-center social-links">
        <!-- Placed via widget "social links" template link on the html file template social widget -->
          <?php dynamic_sidebar('social-links'); ?>
        </div>
      </div>
      <div class="col">
      </div>
    </div>
    <!-- End Header-->
    <br>
    <!-- Start Nav -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
		) );
        ?>
    </div>
</nav>
    <!--END Nav-->
<br>