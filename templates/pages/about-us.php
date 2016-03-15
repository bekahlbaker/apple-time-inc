<div class="about-us">
 <div class="container">
				<div class="title_image">
			<?php
				if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); }
			?>
		</div>
		<div class="about">
			<?php the_content(); ?>
		</div>
	</div>
</div>