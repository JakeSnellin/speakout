<?php get_header(); ?>

<div class="blog-hero-container">

    <div class="caption">

        <div class="blog-hero-logo">
            <img src="<?php bloginfo('template_directory');?>/Images/logo_type_condensed_white.svg" class="img-fluid">
        </div>
        
        <h1>Magazine</h1>

        <h2>Latest music and fashion news</h2>

    </div>
    
        
    <img src="https://cdn.shopify.com/s/files/1/2265/1077/files/unspecified-6_72053b90-41d4-4898-90ba-bcfb3a3697ae_1920x1280.jpg?v=1561415800%22" class="blog-hero-img"> 

</div>


<div class="heading-block">
    <h4>Recent Posts</h4>
</div>

<?php get_template_part('includes/section', 'archive');?>

<div class="pagination-links">
    <?php previous_posts_link();?> 
    <?php next_posts_link();?>
</div>

<?php get_template_part('includes/section', 'music');?>

<?php get_footer(); ?>