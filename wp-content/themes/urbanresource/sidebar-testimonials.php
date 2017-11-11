<?php
/*Getting  About Urban Image */
$testimonial_bg_image=get_post_meta(8,"testimonial_bg_image",true);
$testimonial_bg = wp_get_attachment_image_src($testimonial_bg_image, 'full');	

if(!empty($testimonial_bg))
{
?>
	<section class="testimonial" style="background:url(<?php echo $testimonial_bg[0];?>) no-repeat;">
<?php 
}
else
{
?>		
	<section class="testimonial" style="background:url(http://placehold.it/1920x766&amp;text=No image found) no-repeat;">
<?php	
}
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="heading_sec">
				<h2>Testimonials </h2> <span class="line_efct">|</span> </div>
				<!--heading_sec end-->
				<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
					<?php 
						$j=0;
						if( have_rows('testimonials_repeater', 8) ):

							while ( have_rows('testimonials_repeater', 8) ) : the_row();
							//getting all field from repeater

						?>
							<li data-target="#carousel-example-generic1" data-slide-to="<?php echo $j;?>" class="<?php if($j==0){ echo 'active';}?>"></li>
						<?php 
						$j++;
							endwhile;
							wp_reset_query();
						endif;
						?>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php 
						$j=0;
						if( have_rows('testimonials_repeater', 8) ):

						  while ( have_rows('testimonials_repeater', 8) ) : the_row();
						  //getting all field from repeater
						  
						   $posted_by = get_sub_field('posted_by',8);
						   
						   $testimonial_description = get_sub_field('testimonial_description',8);
						?>
								<div class="item <?php if($j==0){ echo 'active';}?>">
									<div class="container">
										<div class="row">
											<div class="col-sm-12">
												<div class="testimonial_bx">
													<?php echo $testimonial_description;?>
													<h6><?php echo $posted_by;?></h6> 
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
						 <?php 
						 $j++;
						 endwhile;
						 wp_reset_query();
						 endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--testimonial end -->