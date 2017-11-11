<?php 
/* Template Name: Contact Us
*/ 
get_header();
	
/*Getting  Contact Us Banner Image */
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

<section class="contact_page">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<div class="home_contact">
					<h3>Contact Us</h3>
					<?php echo do_shortcode('[contact-form-7 id="151" title="Contact Us Contact form"]'); ?>
					<!--<form>
						<p>
						<input placeholder="First Name" class="form_control1" type="text"> </p>
						<p>
						<input placeholder="Last Name" class="form_control1" type="text"> </p>
						<p>
						<input placeholder="Email" class="form_control1" type="email"> </p>
						<p>
						<input placeholder="Phone" class="form_control1" type="text"> </p>
						<p class="full_txtarea">
							<textarea placeholder="Message" class="form_control1"></textarea>
						</p>
						<p class="sbmt_btn">
						<input value="Submit" class="med_btn" type="submit"> </p>
					</form>-->
				</div>
			</div>
			<div class="col-sm-5 contact_form_rght">
				<ul>
					<li>
						<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/mobile.svg" alt="mobile"></figure>
						<p><a href="tel:<?php $string=get_field("header_phone_number","options"); echo $string = str_replace(str_split('(-) '), '', $string);?>"><?php the_field('header_phone_number','options');?></a></p>
					</li>
					<!--<li>
						<figure><img src="<?php //echo esc_url(get_template_directory_uri());?>/assets/images/fax.svg" alt="fax"></figure>
						<p><?php //the_field('fax_number',$post->ID);?></p>
					</li>-->
					<li>
						<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/mail.svg" alt="mail"></figure>
						<p><a href="mailto:<?php the_field('header_email','options');?>" title=""><?php the_field('header_email','options');?></a></p>
					</li>
					<li>
						<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/pin.svg" alt="pin"></figure>
						<p><?php the_field('address',$post->ID);?></p>
					</li>
					<li>
						<figure><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/facebook.svg" alt="facebook"></figure>
						<p><a href="#" title=""><?php the_field('facebook_address',$post->ID);?></a></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- contact_page end -->
<?php get_sidebar('testimonials'); ?>
<!--testimonial end -->

<?php get_sidebar('gallery'); ?>
<!-- home_gallery end -->

<?php get_footer();?>											