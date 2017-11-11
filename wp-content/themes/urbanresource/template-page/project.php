<?php 
	/* Template Name: Projects 
	*/ 
	get_header();
	
	/*Getting  Projects Banner Image */
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
	
	
	<!-- project_search end -->
	<section class="project_search">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="project_search_bx">
						<ul class="nav nav-tabs" role="tablist">
							 <li role="presentation" class="active">
								<a href="#all" aria-controls="all" role="tab" data-toggle="tab" class="scrll"><span>All</span></a>
							</li>
						
							<?php 
								
								$args = array(
								'type'                     => 'project',
								'taxonomy'                 => 'project_category',
								'order'                    => 'DESC',
								);
								
								$i=1;
								
								$categories = get_categories( $args );
					
								foreach ( $categories as $category ) {
									
									$name = $category->name; 
									$slug = $category->slug;	
								?>
								
								<li role="presentation" class="<?php //if($i==1){echo 'active';}?>">
									
									<a href="#<?php echo $slug; ?>" aria-controls="<?php echo $slug; ?>" role="tab" data-toggle="tab" class="scrll"><span><?php echo $name; ?></span></a>
									
								</li>
								
								<?php $i++;
									
								}
								
							?>
						
						</ul>
					</div>
					<div class="tab-content">
					
					<div role="tabpanel" class="tab-pane active" id="all">
						<div class="project_result">
							<ul>
								<?php 
								query_posts( array ( 'post_type' =>'project', 'posts_per_page' => 12,'order' => 'DESC')  ); 

								while ( have_posts() ) : the_post();?>

									<li>
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
										<div class="project_ovrlay">
											<h3><?php the_title();?></h3><a href="<?php the_permalink();?>" title="" class="view_more view_static">View More</a>
										</div>
										
									</li>
								<?php  
								endwhile; 
								wp_reset_query();
								?>

								
							</ul>
						</div>
					</div>
					
					
						<?php
							
							$a=1;		
							
							$args = array (
							
							'taxonomy' => 'project_category',
							
							);
							
							$categories = get_terms ( $args );
							
							foreach ( $categories as $category ) 
							{   
								
								$args = array (
								
									'post_type' => 'project',
									
									'posts_per_page' => -1,
									
									'tax_query' => array(
									
										array(
										
										'taxonomy' => 'project_category',
										
										'field' => 'slug',
										
										'order' =>  'DESC',
										
										'terms' => $category->slug
										
										)
								
									)
								
								);
								
								$slug = $category->slug;
								
								$query = new WP_Query( $args );
								
								if ( $query->have_posts() ) 
								{
									
								?>
								
								<div role="tabpanel" class="tab-pane <?php //if($a==1){echo 'active';}?>" id="<?php echo $slug;?>">

									<div class="project_result">
										<ul>
										<?php while($query->have_posts()) : $query->the_post();?>
											<li>
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
												<div class="project_ovrlay">
													<h3><?php the_title();?></h3><a href="<?php the_permalink();?>" title="" class="view_more view_static">View More</a>
												</div>
												
											</li>
										<?php	
											endwhile;
											wp_reset_query();
										?>	
											
										</ul>
									</div>
									
								</div>
							
								<?php	
								}
								$a++;
							}	
						?>    
						
					</div>
				
				</div>
			</div>
		</div>
	</section>
		
		<?php get_sidebar('testimonials'); ?>
		<!--testimonial end -->
		
		<?php get_sidebar('gallery'); ?>
		<!-- home_gallery end -->
		
<?php get_footer();?>