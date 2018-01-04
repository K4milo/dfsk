<?php
/*
Vehiculo simple Posts Loop
=====================
*/
?> 
<div class="single-rows">
    <div class="backwards"></div>
    <div class="container">
        <?php 

            $args = array(
                'post_type' => 'vehiculo',
                'posts_per_page' => -1
            );

            $consulta = new WP_Query($args);

            if($consulta->have_posts()): while($consulta->have_posts()): $consulta->the_post(); ?>
            <article id="post_<?php the_ID()?>" class="single-rows--video-post col-md-4">
                <figure class="the_thumb"><?php the_post_thumbnail('full'); ?></figure>
                <h3><?php the_title(); ?></h3>
                <div class="txt"><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
        <?php else: get_template_part('includes/loops/content', 'none'); ?>
        <?php endif; ?>
    </div>
</div>