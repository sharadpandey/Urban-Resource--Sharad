<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link rel="icon" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/favicon.png" type="image/x-icon">

<?php wp_head(); ?>
</head>

<body>
<!-- Preloader Start -->
<!--preloader-->
<div class="preloader"> <span><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/preloader.gif" alt="preloader"></span></div>

<!--preloader-->
<header>
	<div class="top_header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="logo">
						<a href="<?php echo site_url();?>" title=""><img src="<?php the_field('logo','options');?>" alt="logo"></a>
					</div>
					<!--logo end-->
					<div class="header_mid dsp_display">
						<h4><?php the_field('header_title','options');?></h4> </div>
					<!--header_mid end-->
					<div class="header_contact">
						<p><i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:<?php $string=get_field("header_phone_number","options"); echo $string = str_replace(str_split('(-) '), '', $string);?>"><?php the_field('header_phone_number','options');?></a></p>
						<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php the_field('header_email','options');?>" title=""><?php the_field('header_email','options');?></a></p>
					</div>
					<!--header-contact end-->
				</div>
			</div>
		</div>
	</div>
	<!--top_header end-->
	<div class="btm_header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
                    <div class="header_mid tab_dsp">
						<h4><?php the_field('header_title','options');?></h4> </div>
                    <?php echo do_shortcode('[responsive_menu]'); ?>
					<nav>
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
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--btm_header end-->
</header>
<!--header end-->

