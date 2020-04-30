<!--Get Header-->
<?php get_header(); ?>
    <!--Get Content blog-->
<div class="row">
<hr>
  <div class="col-md-8">
    <?php get_template_part('content') ?>
</div>
    <div class="col-md-4 customclass-sidebar-right">
    <?php dynamic_sidebar('sidebar1'); ?>
    </div>
</div>
     <!--Get Footer-->
<?php get_footer();?>