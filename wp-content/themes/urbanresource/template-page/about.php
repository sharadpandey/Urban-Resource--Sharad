<?php 
/* Template Name: About Us
*/ 
get_header();
	
/*Getting  About Us Banner Image */
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
					/*Getting  about_us_section_image */
					$about_us_section_image=get_post_meta($post->ID,"about_us_section_image",true);
					$about_us_section = wp_get_attachment_image_src($about_us_section_image, 'full');	

					if(!empty($about_us_section))
					{
					?>
						<img src="<?php echo $about_us_section[0]?>" alt="about_descp">
					<?php 
					}
					else
					{
					?>		
						<img src="http://placehold.it/365x347&amp;text=No image found" alt="about_descp">
					<?php	
					}
					?>

				</figure>
				
				<div class="about_sec_cntnt">
					<?php the_field('about_us_section_description',$post->ID);?>
					<a href="<?php the_permalink(12);?>" title="" class="med_btn">Contact Us</a> </div>
			</div>
		</div>
	</div>
</section>
<!--about_section end-->
<section class="about_history">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="history_bx">
					<?php
					/*Getting  our_history_bg_image */
					$our_history_bg_image=get_post_meta($post->ID,"our_history_bg_image",true);
					$our_history_bg = wp_get_attachment_image_src($our_history_bg_image, 'full');	

					if(!empty($our_history_bg))
					{
					?>
						<div class="abt_history_top" style="background:url(<?php echo $our_history_bg[0];?>) no-repeat;">
					<?php 
					}
					else
					{
					?>		
						<div class="abt_history_top" style="background:url(http://placehold.it/365x347&amp;text=No image found) no-repeat;">
					<?php	
					}
					?>
					
						<div class="history_bg"> 
							<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/doc.svg" alt="doc"> 
								<h6><?php the_field('our_history_title',$post->ID);?></h6> 
						</div>
					</div>
					<!--abt_history_top end -->
					<div class="abt_history_btm">
						<figure>
							<?php
							/*Getting  our_history_leftside_image */
							$our_history_leftside_image=get_post_meta($post->ID,"our_history_leftside_image",true);
							$our_history_leftside = wp_get_attachment_image_src($our_history_leftside_image, 'full');	

							if(!empty($our_history_leftside))
							{
							?>
								<img src="<?php echo $our_history_leftside[0];?>" alt="our_history">
							<?php 
							}
							else
							{
							?>		
								<img src="http://placehold.it/365x347&amp;text=No image found" alt="our_history">
							<?php	
							}
							?>

						</figure>
						<div class="history_cntnt">
							<div class="history_scroll">
								<?php the_field('our_history_leftside_description',$post->ID);?>
							</div>
						</div>
					</div>
				</div>
				<!--history_bx end-->
			</div>
			<div class="col-sm-6">
				<div class="history_bx">
			
					<?php
					/*Getting  our_capabilities_bg_image */
					$our_capabilities_bg_image=get_post_meta($post->ID,"our_capabilities_bg_image",true);
					$our_capabilities_bg = wp_get_attachment_image_src($our_capabilities_bg_image, 'full');	

					if(!empty($our_capabilities_bg))
					{
					?>
						<div class="abt_history_top" style="background:url(<?php echo $our_capabilities_bg[0];?>) no-repeat;">
					<?php 
					}
					else
					{
					?>		
						<div class="abt_history_top" style="background:url(http://placehold.it/365x347&amp;text=No image found) no-repeat;">
					<?php	
					}
					?>
					
						<div class="history_bg"> 
							<img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/doc.svg" alt="doc"> 
								<h6><?php the_field('our_capabilities_title',$post->ID);?></h6>
						</div>
					</div>
					<!--abt_history_top end -->
					<div class="abt_history_btm">
						<figure>
							<?php
							/*Getting  our_capabilities_rightside_image */
							$our_capabilities_rightside_image=get_post_meta($post->ID,"our_capabilities_rightside_image",true);
							$our_capabilities_rightside = wp_get_attachment_image_src($our_capabilities_rightside_image, 'full');	

							if(!empty($our_capabilities_rightside))
							{
							?>
								<img src="<?php echo $our_capabilities_rightside[0];?>" alt="our_history">
							<?php 
							}
							else
							{
							?>		
								<img src="http://placehold.it/365x347&amp;text=No image found" alt="our_history">
							<?php	
							}
							?>

						</figure>
						<div class="history_cntnt">
							<div class="history_scroll">
								<?php the_field('our_capabilities_rightside_description',$post->ID);?>
							</div>
						</div>
					</div>
					
					
				</div>
				<!--history_bx end-->
			</div>
		</div>
	</div>
</section>
<!--about_history end-->
<section class="home_capability">
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