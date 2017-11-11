<section class="home_gallery">
	<ul>
	<?php 
	$k=1;
	if( have_rows('gallery_repeater', 8) ):

		while ( have_rows('gallery_repeater', 8) ) : the_row();
		//getting all field from repeater

			$gallery_image = get_sub_field('gallery_image',8);
	?>
			<li>
				<figure><img src="<?php echo $gallery_image[url];?>" alt="<?php echo 'gallery-'.$k;?>"></figure>
			</li>
			
	<?php 
		$i++;
		endwhile;
		wp_reset_query();
	endif;
	?>

	</ul>
</section>
<!-- home_gallery end -->