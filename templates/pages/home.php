<div class="home">
	<div class="hero-container">
		<div class="hero content-block">
			<?php if(have_rows('hero_slider')) : ?>
				<ul id="homeHeroSlider" class="col-xs-12">
					<?php while(have_rows('hero_slider')) : the_row(); ?>
						<li>
							<div class="slider-image" style="background: url('<?php the_sub_field('image'); ?>'); background-size: cover; background-repeat: no-repeat;" alt=""></div>
							<div class="row">
								<h1><?php the_sub_field('copy'); ?></h1>
								<div class="col-sm-4 col-sm-offset-4">
									<a href="<?php the_sub_field('button_link'); ?>" class="button hero-cta">Learn More</a>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
	<div class="container">
		<hr>
	</div>
	<div class="product-categories content-block container">
		<div class="product-categories-card col-xs-12 col-md-4">
			<h3 class="headline"><?php the_field('categories_headline'); ?></h>
			<p class="copy"><?php the_field('categories_copy'); ?></p>
			<a href="" class="button"><?php the_field('categories_button_text'); ?></a>
		</div>
		<div class="category-carousel col-xs-12 col-md-8">	
			<?php 
			$args = array(
			    'number'     => $number,
			    'orderby'    => $orderby,
			    'order'      => $order,
			    'hide_empty' => $hide_empty,
			    'include'    => $ids,
			    'parent'     => '0'
			);

			$product_categories = get_terms( 'product_cat', $args );

			$count = count($product_categories);
			 if ( $count > 0 ){
			    echo "<ul id=\"categorySlider\">";
			    foreach ( $product_categories as $product_category ) {
			    	$cat_thumb_id = get_woocommerce_term_meta( $product_category->term_id, 'thumbnail_id', true );
					$cat_thumb_url = wp_get_attachment_thumb_url( $cat_thumb_id );
			       	echo '<li><a href="' . get_term_link( $product_category ) . '"><div class="col-xs-12" style="height: 150px; background: url(\'' . $cat_thumb_url . '\'); background-repeat: no-repeat; background-size: cover;"></div><h3 class="col-xs-12 category-name">' . $product_category->name . '</h3><p class="col-xs-12 category-description">' . $product_category->description . '</p><a class="button category-link" href="'. get_term_link( $product_category ) .'">Learn More</a></li>';
			        
			     }
			     echo "</ul>";
			 }
			 ?>
		</div>
	</div>
	<div class="container">
		<hr>
	</div>
	<div class="other-links content-block">
		<div class="container">
			<div class="col-xs-12 col-sm-4">
				<div class="copy-container">
					<h2>Artwork</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem nulla vel ad adipisci! Incidunt, cumque?</p>
				</div>
				<a href="artwork-and-logos" class="button">Learn More</a>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="copy-container">
					<h2>Contact Us</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis optio modi ab minus veritatis nesciunt eos, vitae error.</p>
				</div>
				<a href="contact-us" class="button">Learn More</a>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="copy-container">
					<h2>Careers</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, iste, assumenda? Rem magnam et.</p>
				</div>
				<a href="careers" class="button">Learn More</a>
			</div>
		</div>
	</div>
</div>