<div class="artwork-and-logos">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

		<?php if(have_rows('artwork_and_logos')) : ?>
			<ul class="gallery row">
				<?php while(have_rows('artwork_and_logos')) : the_row(); ?>
					<li class="col-xs-12 col-sm-6 col-md-3">
						<img src="<?php the_sub_field('image'); ?>">
						<h2><?php the_sub_field('title'); ?></h2>
						<p><?php the_sub_field('description'); ?></p>
					</li>	
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</div>