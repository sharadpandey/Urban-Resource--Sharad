<?php
/**
	* The template for displaying the footer
	*
	* Contains the closing of the #content div and all content after.
	*
	* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	*
	* @package WordPress
	* @subpackage Twenty_Seventeen
	* @since 1.0
	* @version 1.2
*/
	
?>
<footer>
	<div class="top_ftr">
		<div class="container">
		<input type="hidden" id="site_url" value="<?php echo site_url();?>" name="site_url" class="cls_site_url sr-only">
			<div class="row">
				<div class="col-sm-4 ftr_bx1">
					<?php the_field('footer_about_us_description','options');?>
				</div>
				<div class="col-sm-2 ftr_bx1 ftr_bx2">
					<h6>Useful Link</h6>
					<ul>
							<!--START CODE USE FOR GETTING FOOTER MENU-->
							<?php

								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'Header_menu',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'walker'          => ''
								);

								wp_nav_menu( $defaults );
							?>
							<!--END OF CODE USE FOR GETTING FOOTER MENU-->
						</ul>
				</div>
				<div class="col-sm-4 ftr_bx1 ftr_bx3">
					<div class="map">
					<?php 
						$location=get_field("footer_map","options");
		 
						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>
					</div>
				    <style type="text/css">
						.acf-map {
							border: 1px solid #ccc;
							height: 427px;
							margin: 0;
						}
						/* fixes potential theme css conflict */
						
						.acf-map img {
							max-width: inherit !important;
						}
					</style>
				</div>
				<div class="col-sm-2 ftr_bx1 ftr_bx4">
					<a href="<?php echo site_url();?>" title="" class="ftr_logo">
						<img src="<?php the_field('footer_logo','options');?>" alt="ftr_logo">
					</a>
					<div class="follow_sec">
						<h6>Follow Us</h6>
						<ul>
							<li><a href="<?php the_field('facebook','options');?>" title="facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="<?php the_field('twitter','options');?>" title="twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="<?php the_field('google-plus','options');?>" title="googlelus" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i>
							</a></li>
							<li><a href="<?php the_field('instagram','options');?>" title="instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
							</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--top_ftr end-->
	<div class="btm_ftr">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p>© Copyright 2017 Urban Resources | Website By <a href="http://tradesignaus.com.au/" target="_blank" title="">Tradesign </a> </p>
				</div>
			</div>
		</div>
	</div>
	<!--btm_ftr end-->
</footer>
<!--footer end -->

<?php wp_footer(); ?>

</body>
</html>
