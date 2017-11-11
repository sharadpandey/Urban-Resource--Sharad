<?php 
/* Template Name: Services
*/ 
get_header();
	

/*Getting  Services Banner Image */
$banner_image=get_post_meta($post->ID,"banner_image",true);
$banner_img = wp_get_attachment_image_src($banner_image, 'full');	

if(!empty($banner_img))
{
?>
	<section class="banner about_banner" style="background:url(<?php echo $banner_img[0]?>) no-repeat;">
<?php 
}
else
{
?>		
	<section class="banner about_banner" style="background:url(http://placehold.it/1350x280&amp;text=No image found) no-repeat;">
<?php	
}
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="banner_cntnt">
					<h1><?php the_field('banner_text',$post->ID);?></h1> 
				</div>
			</div>
		</div>
	</div>
</section>
<!--banner end-->
<section class="about_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<figure>
				<?php
					/*Getting  service_about_image */
					$service_about_image=get_post_meta($post->ID,"service_about_image",true);
					$service_about = wp_get_attachment_image_src($service_about_image, 'full');	

					if(!empty($service_about))
					{
					?>
						<img src="<?php echo $service_about[0];?>" alt="service_side_img">
					<?php 
					}
					else
					{
					?>		
						<img src="http://placehold.it/365x303&amp;text=No image found" alt="service_side_img">
					<?php	
					}
					?>
					
					
				</figure>
				<div class="about_sec_cntnt">
					
					<?php the_field('service_about_description',$post->ID);?>
					
					<a href="<?php the_permalink(12);?>" title="" class="med_btn">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--about_section end-->

<section class="home_capability bg_light_grey">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="heading_sec">
				<h2>Our Services </h2> <span class="line_efct">|</span></div>
				<!--heading_sec end-->
				<ul>
				
					<?php 
					query_posts( array ( 'post_type' =>'service', 'posts_per_page' => -1, 'order' => 'DESC')  ); 

					while ( have_posts() ) : the_post();?>

						<li>
							<div class="capability_bx">
								<figure>
									<?php 
									if ( has_post_thumbnail() ) 
									{
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full' );
									 ?>
										<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
									<?php
									} 
									else 
									{
									?>
										<img src="http://placehold.it/365x230&amp;text=No image found" alt="<?php the_title(); ?>" 
										class="img-responsive" />
									<?php 
									} 
									?>
								</figure>
								<div class="capability_cntnt">
									<div class="capability_scroll">
										<h5><a href="<?php the_permalink();?>" title=""><?php the_title();?></a></h5>
											<?php the_content();?>
									</div>
										<a href="<?php the_permalink();?>" title="" class="view_more">View More</a>
								</div>
							</div>
						</li>
						
						
					<?php  
					endwhile; 
					wp_reset_query();
					?>

				</ul>
				
				
				
			</div>
		</div>
	</div>
</section>
<!--home_capability end-->

<?php get_sidebar('testimonials'); ?>
<!--testimonial end -->

<?php get_sidebar('gallery'); ?>
<!-- home_gallery end -->

<?php get_footer();?>