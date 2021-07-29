<?php if(have_posts()): while(have_posts()): the_post();?>

    <?php if(has_post_thumbnail()):?>

    <img src="<?php the_post_thumbnail_url('large-thumb');?>" alt="<?php the_title();?>" class="img-fluid">

    <?php endif;?>
    
    <div class="excerpt-container">

        <h4><?php the_title();?></h4>
        
        <?php the_excerpt()?>

        <a href="<?php the_permalink();?>">Read more</a>
    </div>

<?php endwhile; else: endif;?>