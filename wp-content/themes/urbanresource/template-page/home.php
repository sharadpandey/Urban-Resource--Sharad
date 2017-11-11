<?php 
/* Template Name: Home 
*/ 
get_header();
global $post;
?>
<section class="banner">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		<?php 
			$i=1;
			if( have_rows('banner_repeater', $post->ID) ):

				while ( have_rows('banner_repeater', $post->ID) ) : the_row();
				//getting all field from repeater

					$banner_image = get_sub_field('banner_image',$post->ID);

					$banner_text = get_sub_field('banner_text',$post->ID);
			?>
					
					<div class="item <?php if($i==1){ echo 'active';}?>" style="background:url(<?php echo $banner_image[url];?>) no-repeat;" alt="<?php echo 'banner-'.$i;?>">
						<div class="container">
							<div class="row">
								<div class="col-sm-6"> </div>
								<div class="col-sm-6 bnr_rght">
									<div class="banner_cntnt">
									<h1><?php echo $banner_text;?></h1> <a href="<?php the_permalink(12);?>" title="" class="contact_btn">Contact Us</a> </div>
								</div>
							</div>
						</div>
					</div>
					
			<?php 
			$i++;
			endwhile;
				wp_reset_query();
				endif;
			?>
			
		</div>
	</div>
</section>
<!--banner end-->
<section class="home_abt">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php the_field('banner_bottom_content',$post->ID);?>
			</div>
		</div>
	</div>
</section>
<!--home_abt end-->
<section class="home_capability">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="heading_sec">
				<h2>Our Capabilities </h2> <span class="line_efct">|</span></div>
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
										<h5><?php the_title();?></h5>
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

<?php
/*Getting  About Urban Image */
	$about_urban_resources_bg_image=get_post_meta($post->ID,"about_urban_resources_bg_image",true);
	$about_urban_bg_image = wp_get_attachment_image_src($about_urban_resources_bg_image, 'full');	

	if(!empty($about_urban_bg_image))
	{
?>
		<section class="home_abt_detail" style="background:url(<?php echo $about_urban_bg_image[0];?>) no-repeat;">
<?php 
	}
	else
	{
?>		
		<section class="home_abt_detail" style="background:url('http://placehold.it/1920x766&amp;text=No image found') no-repeat;">
<?php	
	}
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 home_abt_lft">
				<?php the_field('about_urban_resources_description',$post->ID);?>
			</div>
			<div class="col-sm-4 home_abt_rght">
				
				<?php
				/*Getting  view_our_projects_image */
					$view_our_projects_image=get_post_meta($post->ID,"view_our_projects_image",true);
					$view_our_img = wp_get_attachment_image_src($view_our_projects_image, 'full');	

					if(!empty($view_our_img))
					{
				?>
						<div class="view_pro" style="background:url(<?php echo $view_our_img[0];?>) no-repeat;"> 
				<?php 
					}
					else
					{
				?>		
						<div class="view_pro" style="background:url('http://placehold.it/360x147&amp;text=No image found') no-repeat;"> 
				<?php	
					}
				?>
				
						<a href="<?php the_permalink(10);?>" title="">View Our Projects</a> 
				
					</div>
				
				
				<div class="home_contact">
					<h3>Contact Us</h3>
					<!--<form>
						<p>
						<input placeholder="Name" class="form_control1" type="text"> </p>
						<p>
						<input placeholder="Email" class="form_control1" type="email"> </p>
						<p>
						<input placeholder="Phone" class="form_control1" type="text"> </p>
						<p>
							<textarea placeholder="Message" class="form_control1"></textarea>
						</p>
						<p class="sbmt_btn">
						<input value="Send" class="view_more view_static" type="submit"> </p>
					</form>-->
					
					<?php echo do_shortcode('[contact-form-7 id="79" title="About Urban Contact form"]'); ?>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!--home_abt_detail end-->

<section class="home_project">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="heading_sec">
				<h2>Some Of Our Projects </h2> <span class="line_efct">|</span> </div>
				<!--heading_sec end-->
				<div class="project_sec">
					<?php 
					query_posts( array ( 'post_type' =>'project', 'posts_per_page' => 2, 'order' => 'DESC')  ); 

					while ( have_posts() ) : the_post();?>

						<div class="project_bx">
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
									<img src="http://placehold.it/504x434&amp;text=No image found" alt="<?php the_title(); ?>" 
									class="img-responsive" />
								<?php 
								} 
								?>
							</figure>
							<div class="project_bx_ovrlay">
								<div class="display-table">
									<div class="display-table-cell">
									<h3><a href="<?php the_permalink();?>" title=""><?php the_title();?></a></h3></div>
								</div>
							</div>
						</div>
					<?php  
					endwhile; 
					wp_reset_query();
					?>
				
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- home_project end -->

<?php get_sidebar('testimonials'); ?>
<?php get_sidebar('gallery'); ?>




<?php get_footer();?>