<?php
/**
	* The template for displaying all single posts
	*
	* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	*
	* @package WordPress
	* @subpackage Twenty_Seventeen
	* @since 1.0
	* @version 1.0
*/

get_header(); 
//get the current post name from the url//
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$link);

/* Start the Loop */
while ( have_posts() ) : the_post();

/*Getting  Post Banner Image */
	$single_banner_image=get_post_meta($post->ID,"single_banner_image",true);
	$single_banner = wp_get_attachment_image_src($single_banner_image, 'full');	

	if(!empty($single_banner))
	{
?>
		<section class="banner about_banner" style="background:url('<?php echo $single_banner[0];?>') no-repeat;">
<?php 
	}
	else
	{
?>	
		<section class="banner about_banner" style="background:url('http://placehold.it/1350x280&amp;text=No image found') no-repeat;">
<?php	
	}
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="banner_cntnt">
				<h1><?php the_title(); ?></h1> </div>
			</div>
		</div>
	</div>
</section>


<!--banner end-->
<section class="services_internal">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="service_list">
					<h3>Other Services</h3>
					<ul class="nav nav-tabs" role="tablist">
						<?php 
						$i=1;
						query_posts( array ( 'post_type' =>'service', 'posts_per_page' => -1,'order' => 'DESC')  ); 

						while ( have_posts() ) : the_post();
						
						$current_slug=basename(get_permalink());
						?>
						
							<li class="<?php if ($link_array[2]==$current_slug){echo 'active';}?>" role="presentation" >
								<a  title="" href="#tab<?php echo $i;?>" aria-controls="tab<?php echo $i;?>" role="tab" data-toggle="tab">
									<?php the_field('service_svg_icon_code',$post->ID);?>
									<span><?php the_title();?></span> 
								</a>
							</li>
							
						<?php  
						$i++;
						endwhile; 
						wp_reset_query();
						?>

					</ul>
				</div>
                <div class="tab-content">
					<?php 
					$i=1;
					query_posts( array ( 'post_type' =>'service', 'posts_per_page' => -1,'order' => 'DESC')  ); 
					
					while ( have_posts() ) : the_post();
					$current_slug=basename(get_permalink());
					?>
						<div role="tabpanel" class="tab-pane <?php if ($link_array[2]==$current_slug){echo 'active';}?>" id="tab<?php echo $i;?>">
			  
							<div class="service_descp">
								<?php the_content();?>
							</div>
							
						</div>
						
					<?php  
					$i++;
					endwhile; 
					wp_reset_query();
					?>
                       
                </div>
			</div>
         
			<div class="col-sm-4 home_abt_rght">
				<div class="service_fg_sec">
				<?php 
					/*Getting  Post Banner Image */
					$above_contact_form_image=get_post_meta($post->ID,"above_contact_form_image",true);
					$above_contact_form = wp_get_attachment_image_src($above_contact_form_image, 'full');	

					if(!empty($above_contact_form))
					{
				?>
						<figure><img src="<?php echo $above_contact_form[0];?>" alt="const"></figure>
				<?php 
					}
					else
					{
				?>	
						<figure><img src="http://placehold.it/460x287&amp;text=No image found" alt="const"></figure>
				<?php	
					}
				?>
					
				</div>
				<div class="home_contact">
					<h3>Contact Us</h3>
					<?php echo do_shortcode('[contact-form-7 id="151" title="Contact Us Contact form"]'); ?>
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
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_sidebar('testimonials'); ?>
<?php get_sidebar('gallery'); ?>
<?php
	endwhile; // End of the loop.
get_footer();?>