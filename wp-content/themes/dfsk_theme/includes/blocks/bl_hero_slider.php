
<div class="hero-slider container">
	<ul class="full-slider">
	<?php if(have_posts()): while(have_posts()): the_post(); 

		while(have_rows('cont_slider')):the_row();
	?>
		
		<li>
			<img src="<?php the_sub_field('f_imagen'); ?>" alt="<?php the_title(); ?>">
			<div class="full-slider--txt">
			<?php the_sub_field('f_texto')?>
			</div>
		</li>
	<?php endwhile; ?>
	<?php endwhile; wp_reset_query(); endif; ?>
	</ul>
</div>