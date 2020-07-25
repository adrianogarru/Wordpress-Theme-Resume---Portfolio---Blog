<hr>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<h3 class="font-weight-bolder ml-2"><a class="customclass-link-no-color" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p class="ml-2"><?php the_date(); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"> 
<?php the_author(); ?></a>
<p> <?php if(has_post_thumbnail()) : ?>
<div class="customclass-post-thumb"><?php the_post_thumbnail(); ?></div>
<?php endif; ?>
</p>  
</P>
<p class="font-weight-normal">
<?php the_excerpt(); ?>
<a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More</a>
</p>
<?php endwhile; ?>
<?php else : ?>
<p><?php __("No Posts Found") ?></p>
<?php endif; ?>
<br>
<!--Pagination code-->
<div class="d-flex justify-content-center">
<div class="text-primary font-weight-bold"><?php next_posts_link(); ?></div> 
<div class="text-primary font-weight-bold"><?php previous_posts_link(); ?></div>
</div>
<br>