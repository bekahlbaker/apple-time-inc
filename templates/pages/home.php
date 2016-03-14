<div class="home">
	<div class="marquee container">
		<h3><marquee>Welcome to AppleTimeInc.</marquee></h3>
		</div>
	</div>
	<div class="container">
		<hr>
	</div>
	<div class="product-categories content-block container">
		<div class="product-categories-card col-sm-12 col-md-2">
			<div class="container"><img src="<?php the_field('categories_copy'); ?>"></div>
			<a href="/shop" class="button product-categories-button"><?php the_field('categories_button_text'); ?></a>
		</div>
		<div class="category-carousel col-sm-12 col-md-10">	
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
			       	echo '<li><a href="' . get_term_link( $product_category ) . '"><div class="col-xs-12" style="height: 150px; background: url(\'' . $cat_thumb_url . '\'); background-repeat: no-repeat; background-size: cover;"></div><h3 class="col-xs-12 category-name">' . $product_category->name . '</h3><a class="button category-link" href="'. get_term_link( $product_category ) .'">Learn More</a></li>';
			        
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
					<img src="<?php the_field('artwork_image'); ?>">
				</div>
				<a href="artwork-and-logos" class="button">Learn More</a>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="copy-container">
					<img src="<?php the_field('contact_us_image'); ?>">
				</div>
				<a href="contact-us" class="button">Learn More</a>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="copy-container">
					<img src="<?php the_field('careers_image'); ?>">
				</div>
				<a href="careers" class="button">Learn More</a>
			</div>
		</div>
	</div>
</div>