<?php if(have_posts()): while(have_posts()): the_post();?>

        <p><?php echo get_the_date('F,Y');?></p>

        <?php the_content()?>

        <?php
        $tags = get_the_tags();
        foreach($tags as $tag):?>
            <a href="<?php echo get_tag_link($tag->term_id);?>">
                <?php echo $tag->name;?>
            </a>
        <?php endforeach;?>



<?php endwhile; else: endif;?>