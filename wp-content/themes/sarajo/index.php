<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<ul>
			<?php
				$prod_categories = get_terms( 'product_cat', array(
					'orderby'    => 'name',
					'order'      => 'ASC',
					'hide_empty' => 1,
					'parent' => 0
				));
				foreach( $prod_categories as $prod_cat ) :
					if($categoria->parent == 0){
						$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
						$cat_thumb_url = wp_get_attachment_thumb_url( $cat_thumb_id );
					
				?>
				<li><a href="<?php echo get_category_link( $prod_cat->term_id ); ?>"><img src="<?php echo $cat_thumb_url; ?>" alt="<?php echo $prod_cat->name; ?>" /></a></li>
					<?php } endforeach; 
			wp_reset_query(); ?></ul>
			
			<ul class="products">
				<?php
					$args = array( 
						'post_type' => 'product', 
						'posts_per_page' => 2,  
						'meta_key' => '_featured',
						'meta_value' => 'yes',
						'product_cat' => 'new', 
						'orderby' => 'rand' 
						);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

						<h2>new</h2>

							<li class="product">    

								<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

									<?php woocommerce_show_product_sale_flash( $post, $product ); ?>

									<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

									<h3><?php the_title(); ?></h3>

									<span class="price"><?php echo $product->get_price_html(); ?></span>                    

								</a>

								<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

							</li>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul><!--/.products-->
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
