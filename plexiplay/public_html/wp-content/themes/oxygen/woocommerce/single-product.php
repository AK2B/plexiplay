<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
		
		<div class="product-single">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="row<?php echo SHOPSINGLESIDEBAR && SHOPSINGLESIDEBARALIGN == 'left' ? ' shop-single-left-sidebar' : ''; ?>">
				
				<div class="col-md-<?php echo SHOPSINGLESIDEBAR ? 9 : 12; ?> product-info-env">
					
					<?php wc_get_template_part( 'content', 'single-product' ); ?>
					
				</div>
				
				<?php if(SHOPSINGLESIDEBAR): ?>
				<div class="col-md-3 sidebar-env">
					
					<div class="blog shop_sidebar">
						<?php dynamic_sidebar('shop_sidebar'); ?>
					</div>
					
				</div>
				<?php endif; ?>
				
			</div>

		<?php endwhile; // end of the loop. ?>
		
		</div>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		#do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>