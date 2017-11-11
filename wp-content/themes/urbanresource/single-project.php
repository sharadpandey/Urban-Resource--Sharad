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

/*Getting  Project Banner Image */
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
<section class="about_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<figure>
					<?php 
					if ( has_post_thumbnail() ) 
					{
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
					?>
						<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive" />
					<?php
					} 
					else 
					{ 
					?>
						<img src="http://placehold.it/460x438&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive" />
					<?php 
					}
					?>
			
				</figure>
				<div class="about_sec_cntnt">
					<?php the_content();?>	
					<a href="<?php the_permalink(12);?>" title="" class="med_btn">Contact Us</a> 
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
