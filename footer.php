
<!--if you make any changes here, 
also change code in 'woocommerce/templates/content-single-product.php'-->



<div class="footer">
<div class="container"><hr></div>
		<div class="container site-map">
		
		
				<div class="row">

					<div class="col-md-3">
						<a href="<?php bloginfo('url'); ?>/product-category/apparel"><h4>Apparel</h4></a>
						<a href="<?php bloginfo('url'); ?>/product-category/bags"><h4>Bags</h4></a>
						<a href="<?php bloginfo('url'); ?>/product-category/drinkware"><h4>Drinkware</h4></a>
					</div>

					<div class="col-md-3">
						<a href="<?php bloginfo('url'); ?>/product-category/educational"><h4>Educational</h4></a>
						<a href="<?php bloginfo('url'); ?>/product-category/health_and_safety"><h4>Health and Safety</h4></a>
						<a href="<?php bloginfo('url'); ?>/product-category/kid_stuff"><h4>Kid Stuff</h4></a>
					</div>

					<div class="col-md-3">
						<a href="<?php bloginfo('url'); ?>/product-category/mood_products"><h4>Mood Products</h4></a>
						<a href="<?php bloginfo('url'); ?>/product-category/office_products"><h4>Office Products</h4></a>
						<a href="<?php bloginfo('url'); ?>/product-category/sports_items"><h4>Sports Items</h4></a>
					</div>
					

					<div class="col-md-3">
						<a href="<?php bloginfo('url'); ?>/product-category/supplies"><h4>Supplies</h4></a>
						<a href="<?php bloginfo('url'); ?>/product-category/technology"><h4>Technology</h4></a>
						<a href="<?php bloginfo('url'); ?>/product-category/writing_instruments"><h4>Writing Instruments</h4></a>
					</div>
				</div>
		</div>
	
<div class="container"><hr></div>	

<div class="container-fluid bottom">
	<div class="row">
			<div class="col-md-6">
					<div class="help">
					<h2>Need Help?</h2>
					</div>
						<div class="info">
							<?php if(have_rows('footer_info', 'option') ) : ?>
								<ul>
									<?php while(have_rows('footer_info', 'option')) : the_row(); ?>
										<li><?php the_sub_field('address'); ?></li>
										<li><?php the_sub_field('phone_number'); ?></li>
										<li><?php the_sub_field('toll_free'); ?></li>
										<li><?php the_sub_field('email'); ?></li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>
			</div>
			<div class="col-md-6">
						<div class="menu">
							<a href="home"><li>Home</li></a>
							<a href="my-account"><li>My Account</li></a>
							<a href="quotelist"><li>Request A Quote</li></a>
							<a href="about-us"><li>About Us</li></a>
							<a href="artwork-and-logos"><li>Artwork & Logos</li></a>
							<a href="careers"><li>Careers</li></a>
						</div>
			</div>
	</div>
	<div class="copyright">
							&copy; Copyright 2001-<?php echo date("Y"); ?> all right reserved Appletimeinc.com
						</div>
</div>

</div>
<?php wp_footer(); ?>
</body>
</html>
