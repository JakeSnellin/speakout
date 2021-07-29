<?php get_header(); ?>

<?php if(has_post_thumbnail()):?>

    <img src="<?php the_post_thumbnail_url('large-thumb');?>" alt="<?php the_title();?>" class="img-fluid">

    <?php endif;?>

<h3><?php the_title();?></h3>

<?php get_template_part('includes/section', 'blogcontent');?>


<?php get_footer(); ?>