<?php get_header(); ?>

<div id="hero">
    
    <video autoplay loop muted playsinline>
        
        <source src="https://cdn.shopify.com/s/files/1/2265/1077/files/adults_20sec_cut_optimized.mp4" type="video/mp4">
        
        Your browser does not support the video tag.
    
    </video>

        <div class="hero-content">
            
            <img src="<?php bloginfo('template_directory');?>/Images/logo_type_condensed_white.svg" class="img-fluid logo-type">

            <button type="button" class="btn btn-light btn-small"><span>Shop Now</span></button>
        
        </div>

</div>

        <?php get_template_part('includes/section', 'content');?>

<?php get_footer(); ?>