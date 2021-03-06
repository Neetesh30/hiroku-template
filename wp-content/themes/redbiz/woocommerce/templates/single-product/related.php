<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$product_style = themesflat_get_opt( 'product_style' );
$styles = '';
if( isset( $_GET['styles'] ) ){
	$styles = trim( $_GET['styles'] );
	if( $styles == '1' ){
		$product_style = 'product-style1';
	}elseif( $styles == '2' ){
		$product_style = 'product-style2';
	}
}

$columns_related = themesflat_get_opt('woo_products_related_columns');

if ( $related_products ) : ?>
	
	<section class="related products themesflat-related <?php echo esc_attr($columns_related); ?> <?php echo esc_attr($product_style) ?>">

		<h2 class="title"><?php esc_html_e( 'Related Products', 'redbiz' ); ?></h2>

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

				<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'templates/content', 'product' ); ?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>

<?php endif;

wp_reset_postdata();


