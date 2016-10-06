<?php
get_header(); ?>
	<div class="content-wrapper">
		<?php 
			if(is_product_category()){
				?>
				<div class="category-container">
				 <?php woocommerce_content();?>
					<section id="recent" class="container">
						<h3>Latest Products</h3>
						<ul class="latest-products">
							<?php
							$i;
								$args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
										<li class="product <?php if ($i==3){ echo 'last';}?>">    
											<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
												<h5><?php the_title(); ?></h5>
												<a href="<?php echo get_permalink();?>" class='details'>Details<span class='arrow'>&#8594;</span></a>
												   <span class="price"><?php echo $product->get_price_html(); ?></span>
											</a>
											<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
										</li><!-- /span3 -->
							<?php $i++; 
								if($i == 4){ $i = 0;}
							endwhile; ?>
							<?php wp_reset_query(); ?>
						</ul><!-- /row-fluid -->
					</section><!-- /recent -->
				 </div>
			<?php } else{
				?>
				<div class="container">
			  <?php 
				 woocommerce_content();
				?>
			</div>
			<?php }?>
		
	</div>
<?php get_footer(); ?>