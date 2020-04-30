<?php get_header(); ?>
    <!--Start Main Content-->
<div class="row">
  <div class="col-md-8">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_date(); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"> 
     <?php the_author(); ?></a>
    <p> <?php if(has_post_thumbnail()) : ?>
    <div class="customclass-post-thumb"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
    </p>  
    </P>
    <p>
    <?php the_excerpt(); ?>
    </p>
    <?php endwhile; ?>
    <?php else : ?>
    <p><?php __("No Posts Found") ?></p>
    <?php endif; ?>
  </div>
  <div class="col-md-4 border">
  <?php dynamic_sidebar('sidebar1'); ?>
  </div>
</div>
<?php get_footer();?> 