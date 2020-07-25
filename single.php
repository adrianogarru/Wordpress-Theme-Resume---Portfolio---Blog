<?php get_header(); ?>
    <!--Start Main Content-->
<div class="row">
  <div class="col-md-8">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <hr>
    <h2 class="ml-2 mt-2"><?php the_title(); ?></h2>
    <p class="ml-2 mt-1"><?php the_date(); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"> 
     <?php the_author(); ?></a>
    <p> <?php if(has_post_thumbnail()) : ?>
    <div class="customclass-post-thumb"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
    </p>  
    </P>
    <p>
    <?php the_content(); ?>
    <hr>
    <button type="button" class="btn btn-primary btn-sm" onclick="history.back();">Back to Main Page </button>
    <br>
    <?php comments_template(); ?>
    </p>
    <?php endwhile; ?>
    <?php else : ?>
    <p><?php __("No Posts Found") ?></p>
    <?php endif; ?>
    </div>
    <div class="col-md-4">
    <h3></h3>
    <!-- php is_active_sidebar('sidebar1'): -->
    <?php dynamic_sidebar('sidebar1'); ?>
    <!-- ?php endif; ?> -->
    </div>
</div>
<?php get_footer();?>