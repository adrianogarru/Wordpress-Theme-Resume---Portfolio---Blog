<?php get_header(); ?>
<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="page-wrapper">
                <div class="page-content">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/error404.png" alt="Error Img 404" width="100%" height="100%">
                    <br>
                    <h2><?php echo( 'This is somewhat embarrassing, isn’t it?'); ?></h2>
                    <p><?php echo( 'It looks like nothing was found at this location. Maybe try a search?'); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->
        </div><!-- #content -->
    </div><!-- #primary -->
    <br>
    <?php get_footer(); ?>
