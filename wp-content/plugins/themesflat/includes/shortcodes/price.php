<?php
/**
 * Extended class to integrate testimonial slider with
 * visual composer
 */
 
/**
 * Register filter for append custom class name
 * that generated from visual-composer
 */
add_action( 'vc_before_init', 'themesflat_price_shortcode_params' );

function themesflat_price_css($atts) {
	$style[] = $atts['css'];
	$vcclass = themesflat_get_class_for_custom($atts['css'],$atts['default_id']);
	$style[] = sprintf('
		.%1$s.themesflat_price .price-price {
			font-size: %2$spx;
		}',$vcclass,str_replace('px','',$atts['price-font-size']));
	$style[] = sprintf('
		.%1$s.themesflat_price .price-subprice {
			font-size: %2$spx;
		}',$vcclass,str_replace('px','',$atts['subprice-font-size']));
	$style[] = sprintf('
		.%1$s.themesflat_price .price-image img,.%1$s.themesflat_price .price-image:after {
			border-radius: %2$spx;
		}',$vcclass,str_replace('px','',$atts['image_radius']));
	return implode(' ', $style);
}

function themesflat_price_shortcode_params() {	
	/**
	 * Map the single price item
	 */
	$icons_params = themesflat_map_icons('icon','Icon for Box');
	vc_map( array(
		'base'        => 'themesflat_price',
		'name'        => esc_html__( 'Themesflat: Table Price', 'redbiz' ),
		'icon'        => THEMESFLAT_ICON,
		'category'    => esc_html__( 'redbiz', 'redbiz' ),
		'params'      => array_merge($icons_params,array(

			// icon font size
			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Icon Font Size', 'redbiz' ),
				'description'    => esc_html__( '( Enter your Icon Font Size Ex: 35px ).', 'redbiz' ),
				'param_name'       => 'icon_font_size',
			),

			// icon size
			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Icon Size', 'redbiz' ),
				'description'    => esc_html__( '( Enter your Icon Size Ex: 80px ).', 'redbiz' ),
				'param_name'       => 'icon_size',
			),

			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Icon Style', 'redbiz' ),
				'param_name' => 'icon_style',
				'value' => array(
					esc_html__('Default','redbiz') => '',
					esc_html__('Cricle Outline','redbiz') => 'cricle-outline',
					esc_html__('Square Outline','redbiz') => 'square-outline'
					),
				'description' => esc_html__( 'Margin item for slide', 'redbiz' )
			),

			array(
				'type' => 'colorpicker',
				'heading'    => esc_html__( 'Icon Color', 'redbiz' ),
				'param_name' => 'icon_color',
				'std' => '#d21e2b',
				),

			array(
				'type'       => 'attach_image',
				'heading'    => esc_html__( 'Image', 'redbiz' ),
				'param_name' => 'image'
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Image Size', 'redbiz' ),
				'description'    => esc_html__( '( Enter your image size Ex: medium,small,... Default: Full ). Alternatively enter size in pixels (Example: 270x150 (Width x Height)).', 'redbiz' ),
				'param_name' => 'image_size',
				'std'		 => 'full'
			),					

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Image Radius', 'redbiz' ),
				'description'    => esc_html__( '( Image Radius In Px. Ex: 20 )', 'redbiz' ),
				'param_name' => 'image_radius',
			),

			// Title
			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Title', 'redbiz' ),
				'description'    => esc_html__( '( Enter your Title ).', 'redbiz' ),
				'param_name'       => 'title',
				'std'				=> 'Starter Plan'
			),

			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Status', 'redbiz' ),
				'description'    => esc_html__( '( Enter your Status ).', 'redbiz' ),
				'param_name'       => 'status',
				'std'				=> 'New'
			),

			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Currency', 'redbiz' ),
				'description'    => esc_html__( '( Enter your Currency Ex: $ ).', 'redbiz' ),
				'param_name'       => 'currency',
				'std'				=> '$'
			),

			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Price', 'redbiz' ),
				'description'    => esc_html__( '( Enter your Price Ex: 70 ).', 'redbiz' ),
				'param_name'       => 'price',
				'std'				=> '35'
			),

			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Time', 'redbiz' ),
				'description'    => esc_html__( '( Enter your Time Ex: /Month, /Year ).', 'redbiz' ),
				'param_name'       => 'subprice',
				'std'				=> '/month'
			),

			array(
				'type'       => 'textarea_html',
				'heading'    => esc_html__( 'Description', 'redbiz' ),
				'param_name' => 'content'
			),				

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Price Font Size', 'redbiz' ),
				'description'    => esc_html__( '(Custom price font size Ex: 18  )', 'redbiz' ),
				'param_name' => 'price-font-size',
				'std'				=> '48px'
			),	

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Time Font Size', 'redbiz' ),
				'description'    => esc_html__( '( Time font size Ex: 16 )', 'redbiz' ),
				'param_name' => 'subprice-font-size',
				'std'	=> '14px'
			),	

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Show Readmore buton', 'redbiz' ),
				'param_name' => 'show_readmore',
				'value' => array( esc_html__( 'Yes, please', 'redbiz' ) => 'yes' ),
				'std'	=> 'yes'
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Link', 'redbiz' ),
				'param_name' => 'link',
				'value' => esc_html__("#",'redbiz'),
				'dependency' => array(
					'element' => 'show_readmore',
					'value'	=> 'yes'
					)
			),

			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Button Text', 'redbiz' ),
				'param_name'       => 'button_text',
				'value'			   => esc_html__('BUY NOW','redbiz'),
				'dependency' => array(
					'element' => 'show_readmore',
					'value'	=> 'yes'
					)
			)), array(
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Style', 'redbiz' ),
				'param_name' => 'style',
				'value' => array(
					esc_html__('Style 1','redbiz') => 'style1',
					esc_html__('Style 2','redbiz') => 'style2',
					esc_html__('Style 3','redbiz') => 'style3'
					),
				'description' => esc_html__( 'Margin item for slide', 'redbiz' )
			),						

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Extra Class', 'redbiz' ),
				'param_name' => 'class'
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => esc_html__( 'Design Options', 'redbiz' )
			),
			themesflat_shortcode_default_id()
		))
	) );
}


add_shortcode( 'themesflat_price', 'themesflat_shortcode_price' );

/**
 * Price shortcode handle
 * 
 * @param   array  $atts  Shortcode attributes
 * @return  void
 */
add_filter( 'themesflat/shortcode/price_atts', 'themesflat_price_shortcode_atts' );
add_filter( 'themesflat/shortcode/themesflat_price_class', 'themesflat_price_shortcode_class' );

function themesflat_price_shortcode_atts( $atts ) {
	$atts['icon_position'] = 'top';
	$atts['icon_style']    = 'transparent';	
	$icons_params = themesflat_available_icons('icon');
	$atts = array_merge($atts,$icons_params);
	return $atts;
}

function themesflat_price_shortcode_class(  $atts) {
	$classes[] = 'themesflat_price';
	$classes[] = $atts['class'];
	$classes[] = $atts['style'];
	$classes[] = $atts['icon_style'];
	$vcclass = themesflat_get_class_for_custom($atts['css'],$atts['default_id']);
	$classes[] =$vcclass;
	return $classes;
}


function themesflat_shortcode_price( $atts, $content = null ) {
	$atts = vc_map_get_attributes( 'themesflat_price', $atts );
	extract (apply_filters( 'themesflat/shortcode/themesflat_price_atts',$atts));
	ob_start();
	$icon_name = themesflat_shortcode_icon_name('icon_',$icon_type);
	$icon_value = !empty($icon_name) ? $atts[$icon_name] : '';
	// Preparing the shortcode attributes	
	$button_text = empty( $button_text ) ? esc_html__( 'Continue', 'redbiz' ) : $button_text;

	// Build the element classes
	$classes = apply_filters('themesflat/shortcode/themesflat_price_class',$atts);
	$style = 'style1';
	$button_class = array(
		'style1' => 'no-background'
		);
	add_action('wp_head', 'themesflat_price_css');

	$box_readmore = '';	
	if ( $show_readmore == 'yes' && ! empty( $link ) && ! empty( $button_text ) ) {
		$box_readmore = sprintf( '
				<a class="themesflat-button %3$s" href="%1$s">%2$s</a>',
				 esc_url( $link ),  
				 esc_attr($button_text),
				 esc_attr($button_class[$style]));
	}

	$_status = '';
	if (!empty($status)) {
		$_status = '<div class="status">'.$status.'</div>';
	}

	// Preparing image for the box
	if ( is_numeric( $atts['image'] ) && $atts['image'] != '') {
		  $image = wpb_getImageBySize( array( 'attach_id' => $atts['image'], 'thumb_size' => $atts['image_size'] ) );
		  $image = $image['thumbnail'];
	}
	elseif ( filter_var( $atts['image'], FILTER_VALIDATE_URL ) ) {
	  	$image = sprintf( '<img src="%s" />', esc_url( $atts['image'] ) );
	}

	?>
	<div class="<?php echo esc_attr( join( ' ', $classes ) ) ?>">
		<div class="price-wrapper">
			<?php if ( ! empty( $image ) ): ?>
			<div class="price-image" style = "border-top-left-radius:<?php echo str_replace("px",'',$atts['image_radius']);?>px; border-top-right-radius:<?php echo str_replace("px",'',$atts['image_radius']);?>px;">
				<?php
					printf( '<a href="%s" >%s</a>',esc_url( $link ), $image );										
				?>
			</div>
			<?php
			else:
				print( $image );
			endif; ?>

			<?php if ( $icon_value ){
				printf('<div class="price-icon" style="font-size:%2$s;width:%3$s;height:%3$s;line-height:%3$s;color:%4$s;border-color:%4$s;"><i class="%1$s"></i></div>', esc_attr($icon_value), $icon_font_size, $icon_size,$icon_color);
			}?>

			<div class="content-post">
				<?php echo $_status; ?>
				<div class="price-header">
					<h5 class="title"><?php echo wp_kses_post( $atts['title'] ) ?></h5>				

					<div class="price-number" style="font-size: <?php echo esc_attr(str_replace("px",'',$atts['price-font-size']));?>px; line-height: <?php echo esc_attr(str_replace("px",'',$atts['price-font-size']));?>px;">
						<a href="<?php echo esc_url( $link ) ?>">
							<span class="currency"><?php echo wp_kses_post( $atts['currency'] ) ?></span><?php echo wp_kses_post( $atts['price'] ) ?>
						</a>	
					</div>

					<?php if ( ! empty( $atts['subprice'] ) ): ?>
						<div class="price-subprice"  style="font-size: <?php echo esc_attr(str_replace("px",'',$atts['subprice-font-size']));?>px"><?php echo wp_kses_post( $atts['subprice'] ) ?></div>
					<?php endif ?>
				</div>

				<div class="price-content">
					<?php if ( ! empty( $content ) ): ?>
						<div class="price-desc">
							<?php echo wpb_js_remove_wpautop( $content, true );?>
						</div>
					<?php endif ?>					
						<?php echo wp_kses_post($box_readmore);?>
				</div>
			</div><!-- ./content-post -->
		</div><!-- ./price-wrapper -->
	</div>	
<?php 
return ob_get_clean();
}



