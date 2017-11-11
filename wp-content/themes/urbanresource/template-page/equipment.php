<?php 
/* Template Name: Equipment
*/ 
get_header();
	
/*Getting  Equipment Banner Image */
$banner_image=get_post_meta($post->ID,"banner_image",true);
$banner_img = wp_get_attachment_image_src($banner_image, 'full');	

if(!empty($banner_img))
{
?>
	<section class="banner about_banner" style="background:url(<?php echo $banner_img[0];?>) no-repeat;">
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

<section class="about_section equipment_page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<figure>
				<?php
						/*Getting  about_equipment_image */
						$about_equipment_image=get_post_meta($post->ID,"about_equipment_image",true);
						$about_equipment = wp_get_attachment_image_src($about_equipment_image, 'full');	

						if(!empty($about_equipment))
						{
						?>
							<img src="<?php echo $about_equipment[0];?>" alt="equipment_sideimg">
						<?php 
						}
						else
						{
						?>		
							<img src="http://placehold.it/365x347&amp;text=No image found" alt="equipment_sideimg">
						<?php	
						}
						?>

					</figure>
				
				<div class="about_sec_cntnt">
					<?php the_field('about_equipment_description',$post->ID);?>
					<a href="<?php the_permalink(12);?>" title="" class="med_btn">Contact Us</a> 
				</div>
			</div>
		</div>
	</div>
</section>
<!--about_section end-->
<section class="about_history equipment_list">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<?php
			$i=1;
				if( have_rows('equipment_services_repeater', $post->ID) ):

					while ( have_rows('equipment_services_repeater', $post->ID) ) : the_row();
					//getting all field from repeater
				  
						$equipment_services_title = get_sub_field('equipment_services_title',$post->ID);
				   
						$equipment_services_image = get_sub_field('equipment_services_image',$post->ID);

						$equipment_services_description = get_sub_field('equipment_services_description',$post->ID);
				?>		
						
						
						<div class="abt_history_btm">
							<figure>
								<img src="<?php echo $equipment_services_image[url];?>" alt="equipment1" alt="<?php echo 'equipment-'.$i;?>">
								<h2> <?php echo $equipment_services_title;?> </h2>
							</figure>
							<div class="history_cntnt">
								<div class="history_scroll">
									<?php echo $equipment_services_description;?>
								</div> <a href="<?php the_permalink(12);?>" title="" class="view_more">Enquire Now</a> 
							</div>
						</div><!--abt_histoiyr_btm end -->
						
						
				<?php 
				$i++;
				endwhile;
				wp_reset_query();
				endif;
				?>
			
			
				
			</div>
		</div>
	</div>
</section>
<!--equipment_list end-->


<?php get_sidebar('testimonials'); ?>
<!--testimonial end -->

<?php get_sidebar('gallery'); ?>
<!-- home_gallery end -->

<?php get_footer();?>