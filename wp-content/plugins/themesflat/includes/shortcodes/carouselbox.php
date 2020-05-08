<?php
/**
 * Register filter for append custom class name
 * that generated from visual-composer
 */
// Carousel Box
add_action( 'vc_before_init', function() {
    class WPBakeryShortCode_carouselbox extends WPBakeryShortCodesContainer {}
} );

add_action( 'vc_before_init', 'themesflat_carouselbox_shortcode_params' );
function themesflat_carouselbox_shortcode_params() {
	vc_map( array(
		'name' => esc_html__('Themesflat: Carousel Box', 'redbiz'),
		'description' => esc_html__('Scrolling anything.', 'redbiz'),
		'base' => 'carouselbox',
		'weight'	=>	180,
		'icon'        => THEMESFLAT_ICON,
		'as_parent' => array('except' => 'all'),
		'controls' => 'full',
		'show_settings_on_create' => true,
		'category' => esc_html__('redbiz', 'redbiz'),		
		'params' => array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Item: Auto Scroll?', 'redbiz' ),
				'param_name' => 'auto_scroll',
				'value'      => array(
					'No' => 'false',
					'Yes' => 'true',
				),
				'std'		=> 'false',
				'group' => esc_html__( 'Query', 'redbiz' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Item: Infinity Loop?', 'redbiz' ),
				'param_name' => 'loop',
				'value'      => array(
					'No' => 'false',
					'Yes' => 'true',
				),
				'std'		=> 'false',
				'group' => esc_html__( 'Query', 'redbiz' ),
				'description'	=> esc_html__('Duplicate last and first items to get loop illusion.', 'redbiz'),
			),
	        array(
				'type' => 'textfield',
				'heading' => esc_html__('Item: Spacing Between', 'redbiz'),
				'param_name' => 'gap',
				'value' => '30',
				'group' => esc_html__( 'Query', 'redbiz' ),
	        ),
	        // Controls
			array(
				'type' => 'headings',
				'text' => esc_html__('Bullets', 'redbiz'),
				'param_name' => 'bullets_heading',
				'group' => esc_html__( 'Controls', 'redbiz' ),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Show Bullets?', 'redbiz' ),
				'param_name' => 'show_bullets',
				'group' => esc_html__( 'Controls', 'redbiz' ),
				'value'      => array( esc_html__( 'Yes, please.', 'redbiz' ) => 'yes' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Space between Bullets & Elements', 'redbiz' ),
				'param_name' => 'bullet_between',
				'value'      => array(
					'50px' => '50',
					'45px' => '45',
					'40px' => '40',
					'35px' => '35',
					'30px' => '30',
					'25px' => '25',
					'20px' => '20',
					'15px' => '15',
					'10px' => '10',
				),
				'std'		=> '50',
				'dependency' => array( 'element' => 'show_bullets', 'value' => 'yes' ),
				'group' => esc_html__( 'Controls', 'redbiz' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Bullets Show', 'redbiz' ),
				'param_name' => 'bullet_show',
				'group' => esc_html__( 'Controls', 'redbiz' ),
				'value'      => array(
					'Square' => 'bullet-square',
					'Circle' => 'bullet-circle',
				),
				'std'		=> 'bullet-square',
				'dependency' => array( 'element' => 'show_bullets', 'value' => 'yes' ),
			),
			array(
				'type' => 'headings',
				'text' => esc_html__('Arrows', 'redbiz'),
				'param_name' => 'arrows_heading',
				'group' => esc_html__( 'Controls', 'redbiz' ),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Show Arrows?', 'redbiz' ),
				'param_name' => 'show_arrows',
				'group' => esc_html__( 'Controls', 'redbiz' ),
				'value'      => array( esc_html__( 'Yes, please.', 'redbiz' ) => 'yes' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Arrows Offset: Horizontal', 'redbiz' ),
				'param_name' => 'arrow_offset',
				'group' => esc_html__( 'Controls', 'redbiz' ),
				'value'      => array(
					'-40' => '-40',
					'-35' => '-35',
					'-30' => '-30',
					'-25' => '-25',
					'-20' => '-20',
					'-15' => '-15',
					'-10' => '-10',
					'0 - IN' => '0i',
					'Center' => 'center',
					'0 - OUT' => '0o',
					'10' => '10',
					'15' => '15',
					'20' => '20',
					'25' => '25',
					'30' => '30',
					'35' => '35',
					'40' => '40',
				),
				'std'		=> 'center',
				'dependency' => array( 'element' => 'show_arrows', 'value' => 'yes' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Arrows Offset: Vertical', 'redbiz' ),
				'param_name' => 'arrow_offset_v',
				'group' => esc_html__( 'Controls', 'redbiz' ),
				'value'      => array(
					'-120' => '-120',
					'-110' => '-110',
					'-100' => '-100',
					'-90' => '-90',
					'-80' => '-80',
					'-70' => '-70',
					'-60' => '-60',
					'-50' => '-50',
					'-40' => '-40',
					'-30' => '-30',
					'-20' => '-20',
					'0' => '0',
					'20' => '20',
					'30' => '30',
					'40' => '40',
					'50' => '50',
					'60' => '60',
					'70' => '70',
					'80' => '80',
					'90' => '90',
					'100' => '100',
					'110' => '110',
					'120' => '120',
				),
				'std'		=> '0',
				'dependency' => array( 'element' => 'show_arrows', 'value' => 'yes' ),
			),
			// Column
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Screen > 1000px', 'redbiz' ),
				'param_name' => 'column',
				'group'      => esc_html__( 'Columns', 'redbiz' ),
				'value'      => array(
					'1 Column' => '1c',
					'2 Columns' => '2c',
					'3 Columns' => '3c',
					'4 Columns' => '4c',
					'5 Columns' => '5c',
					'6 Columns' => '6c',
					'7 Columns' => '7c',
				),
				'std'		=> '3c',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Screen from 600px to 1000px', 'redbiz' ),
				'param_name' => 'column2',
				'group'      => esc_html__( 'Columns', 'redbiz' ),
				'value'      => array(
					'1 Column' => '1c',
					'2 Columns' => '2c',
					'3 Columns' => '3c',
					'4 Columns' => '4c',
					'5 Columns' => '5c',
				),
				'std'		=> '2c',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Screen < 600px', 'redbiz' ),
				'param_name' => 'column3',
				'group'      => esc_html__( 'Columns', 'redbiz' ),
				'value'      => array(
					'1 Column' => '1c',
					'2 Columns' => '2c',
					'3 Columns' => '3c',
					'4 Columns' => '4c',
				),
				'std'		=> '1c',
			),
        ),
		'js_view' => 'VcColumnView',
    ) );
}

add_shortcode( 'carouselbox', 'themesflat_shortcode_carouselbox' );

/**
 * Iconbox shortcode handle
 * 
 * @param   array  $atts  Shortcode attributes
 * @return  void
 */
function themesflat_shortcode_carouselbox( $atts, $content = null ) {
	$atts = vc_map_get_attributes( 'carouselbox', $atts );
	$content = wpb_js_remove_wpautop($content, true);

	extract( shortcode_atts( array(
	    'auto_scroll' => 'false',
	    'loop' => 'false',
	    'gap' => '30',
	    'show_bullets' => '',
	    'show_arrows' => '',
	    'arrow_between' => '50',
	    'bullet_show' => 'bullet-square',
	    'bullet_between' => '50',
	    'arrow_offset' => 'center',
	    'arrow_offset_v' => '0',
	    'column'        => '3c',
	    'column2'       => '2c',
	    'column3'       => '1c',
	), $atts ) );
	$content = wpb_js_remove_wpautop($content, true);

	$column = intval( $column );
	$column2 = intval( $column2 );
	$column3 = intval( $column3 );
	$gap = intval( $gap );

	$cls = 'arrow-center '. $bullet_show .' offset'. $arrow_offset .' offset-v'. $arrow_offset_v;
	if ( $show_bullets ) $cls .= ' has-bullets'; 
	if ( $show_arrows ) $cls .= ' has-arrows';

	if ( $bullet_between == '45' ) $cls .= ' bullet45';
	if ( $bullet_between == '40' ) $cls .= ' bullet40';
	if ( $bullet_between == '35' ) $cls .= ' bullet35';
	if ( $bullet_between == '30' ) $cls .= ' bullet30';
	if ( $bullet_between == '25' ) $cls .= ' bullet25';
	if ( $bullet_between == '20' ) $cls .= ' bullet20';
	if ( $bullet_between == '15' ) $cls .= ' bullet15';
	if ( $bullet_between == '10' ) $cls .= ' bullet10';

	wp_enqueue_script( 'themesflat-carousel' );
	return sprintf('<div class="themesflat_sc_vc-carousel-box %8$s" data-auto="%5$s" data-loop="%6$s" data-gap="%7$s" data-column="%2$s" data-column2="%3$s" data-column3="%4$s">
	        <div class="owl-carousel owl-theme">%1$s</div>
		</div>',
		do_shortcode($content),
	    $column,
	    $column2,
	    $column3,
	    $auto_scroll,
	    $loop,
	    $gap,
	    $cls
	);
	
}