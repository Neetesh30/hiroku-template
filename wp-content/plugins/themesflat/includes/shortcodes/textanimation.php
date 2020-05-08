<?php
/**
 * Register filter for append custom class name
 * that generated from visual-composer
 */
add_action( 'vc_before_init', 'themesflat_textanimation_shortcode_params' );
vc_add_shortcode_param( 'number', 'themesflat_param_number' );
function themesflat_param_number( $settings, $value ) {
	$dependency = '';
	$param_name = isset($settings['param_name']) ? $settings['param_name'] : '';
	$type = isset($settings['type']) ? $settings['type'] : '';
	$suffix = isset($settings['suffix']) ? $settings['suffix'] : '';
	$class = isset($settings['class']) ? $settings['class'] : '';
	$output = '<input type="number" class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '" value="'. $value.'" style="max-width:100px; margin-right: 10px;" />'. $suffix;
	return $output;
}

/**
 * Register parameters for iconbox shortcode
 * 
 * @return  void
 */
function themesflat_textanimation_shortcode_params() {
	vc_map( array(
        'name' => esc_html__('Themesflat: Animation Text', 'redbiz'),
        'description' => esc_html__('Awesome Animation Text.', 'redbiz'),
        'base' => 'textanimation',
		'weight'	=>	180,
        'icon'        => THEMESFLAT_ICON,
        'category' => esc_html__('redbiz', 'redbiz'),
        'params' => array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Text Alignment', 'redbiz' ),
				'param_name' => 'alignment',
				'value'      => array(
					'Left' => '',
					'Center' => 'text-center',
					'Right' => 'text-right',
				),
				'std'		=> 'text-center',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Animation', 'redbiz' ),
				'param_name' => 'animation',
				'value'      => array(					
					'Type' => 'type',
					'Scale' => 'scale',
					'Rotate 1' => 'rotate-1',
					'Rotate 2' => 'rotate-2',
					'Rotate 3' => 'rotate-3',
					'Loading Bar' => 'loading-bar',
					'Slide' => 'slide',
					'Clip' => 'clip',
					'Zoom' => 'zoom',
					'Push' => 'push',
				),
				'std'		=> 'type',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'heading' => esc_html__( 'Text 1 (Optional)', 'redbiz' ),
				'param_name' => 'text1',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'heading' => esc_html__( 'Text 2 (Optional)', 'redbiz' ),
				'param_name' => 'text2',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'heading' => esc_html__( 'Text 3 (Optional)', 'redbiz' ),
				'param_name' => 'text3',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'heading' => esc_html__( 'Text 4 (Optional)', 'redbiz' ),
				'param_name' => 'text4',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'heading' => esc_html__( 'Text 5 (Optional)', 'redbiz' ),
				'param_name' => 'text5',
			),			
            array(
				'type' => 'colorpicker',
				'heading' => esc_html__('Text Color', 'redbiz'),
				'param_name' => 'text_color',
				'value' => '',
            ),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'heading' => esc_html__( 'Prefix Text (Optional)', 'redbiz' ),
				'param_name' => 'prefix_text',
				'group' => esc_html__( 'Prefix & Suffix', 'redbiz' )
			),			
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'heading' => esc_html__( 'Suffix Text (Optional)', 'redbiz' ),
				'param_name' => 'suffix_text',
				'group' => esc_html__( 'Prefix & Suffix', 'redbiz' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Style Inline or Block', 'redbiz' ),
				'param_name' => 'style_inline_block',
				'value'      => array(
					'Block' => 'block',
					'Inline' => 'inline',					
				),
				'group' => esc_html__( 'Prefix & Suffix', 'redbiz' ),
			),
            array(
				'type' => 'colorpicker',
				'heading' => esc_html__('Prefix Text Color', 'redbiz'),
				'param_name' => 'prefix_color',
				'value' => '',
				'group' => esc_html__( 'Prefix & Suffix', 'redbiz' ),
            ),
            array(
				'type' => 'colorpicker',
				'heading' => esc_html__('Suffix Text Color', 'redbiz'),
				'param_name' => 'suffix_color',
				'value' => '',
				'group' => esc_html__( 'Prefix & Suffix', 'redbiz' ),
            ),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Font Weight', 'redbiz' ),
				'param_name' => 'font_weight',
				'value'      => array(
					'Default'		=> 'Default',
					'300' => '300',
					'400' => '400',
					'500' => '500',
					'600' => '600',
					'700' => '700',
					'800' => '800',
					'900' => '900',
				),
				'std'		=> 'Default',
				'group' => esc_html__( 'Typography', 'redbiz' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Font Style', 'redbiz' ),
				'param_name' => 'font_style',
				'value'      => array(
					'Normal' => 'normal',
					'Italic' => 'italic',
				),
				'std'		=> 'normal',
				'group' => esc_html__( 'Typography', 'redbiz' ),
			),
			array(
				'type' => 'number',
				'heading' => esc_html__( 'Font Size: Max', 'redbiz' ),
				'param_name' => 'font_max',
				'value' => 70,
				'suffix' => 'px',
				'group' => esc_html__( 'Typography', 'redbiz' ),
				'description'	=> esc_html__('Important! This size only appear exactly on the full-width grid, 65px max-size on the 1170 grid and 32px max-size on the 570px grid.', 'redbiz'),
		  	),
		  	array(
				'type' => 'number',
				'heading' => esc_html__( 'Font Size: Min', 'redbiz' ),
				'param_name' => 'font_min',
				'value' => 22,
				'suffix' => 'px',
				'group' => esc_html__( 'Typography', 'redbiz' ),
		  	),
        )
    ) );
}

add_shortcode( 'textanimation', 'themesflat_shortcode_textanimation' );

/**
 * Iconbox shortcode handle
 * 
 * @param   array  $atts  Shortcode attributes
 * @return  void
 */
function themesflat_shortcode_textanimation( $atts, $content = null ) {
	ob_start();
	extract( shortcode_atts( array(
	    'alignment' => 'text-center',
	    'animation' => 'type',
	    'text1' => '',
	    'text2' => '',
	    'text3' => '',
	    'text4' => '',
	    'text5' => '',
	    'prefix_text' => '',
	    'style_inline_block' => 'block',
	    'suffix_text' => '',
	    'font_min' => '22',
	    'font_max' => '70',
	    'text_color' => '',
	    'prefix_color' => '',
	    'suffix_color' => '',
	    'font_family' => 'Default',
	    'font_weight' => 'Default',
	    'font_style'  => 'normal'
	), $atts ) );
	$content = wpb_js_remove_wpautop($content, true);
	wp_enqueue_script( 'textanimation' );

	$text_css = $prefix_css = $suffix_css = '';
	$fancy_html = $fancy_wrap_css = $fancy_css = $fancy_text = '';
	$min = $max = '';

	if ( $font_min ) $min = $font_min .'px';
	if ( $font_max ) {
		$max = $font_max .'px';
		$height_max = $font_max + 10 .'px';
		$fancy_css = 'font-size:'. $max .';height:'. $height_max .';line-height:'. $height_max .';';
		$fancy_wrap_css = 'height:'. $height_max .';';

		$prefix_css .= 'font-size:'. $max .';height:'. $height_max .';line-height:'. $height_max .';';
		$suffix_css .= 'font-size:'. $max .';height:'. $height_max .';line-height:'. $height_max .';';
	}

	if ( $text_color ) {
		$text_css .= 'color:'. $text_color .';';
		$fancy_css .= 'color:'. $text_color .';';
	}

	if ( $prefix_color ) $prefix_css .= 'color:'. $prefix_color .';';
	if ( $style_inline_block ) $prefix_css .= 'display:'. $style_inline_block .';';
	if ( $suffix_color )$suffix_css .= 'color:'. $suffix_color .';';
	if ( $style_inline_block ) $suffix_css .= 'display:'. $style_inline_block .';';
	if ( $style_inline_block ) $style_inline_block_text .= 'display:'. $style_inline_block .';';

	if ( $font_weight != 'Default' ){
		$fancy_css .= 'font-weight:'. $font_weight .';';
		$prefix_css .= 'font-weight:'. $font_weight .';';
		$suffix_css .= 'font-weight:'. $font_weight .';';
	}

	if ( $font_style == 'normal' ){
		$font_style_css = 'font-style-normal';		
	}
	if ($font_style) {
		$prefix_css .= 'font-style:'. $font_style .';';
		$suffix_css .= 'font-style:'. $font_style .';';
	}

	if ( $animation == 'type' || $animation == 'rotate-2' || $animation == 'rotate-3' || $animation == 'scale' ) {
		if ( $text1 ) $fancy_text = '<h2 class="heading is-visible" style="'. $fancy_css .'">'. $text1 .'</h2>';
		if ( $text2 ) $fancy_text .= '<h2 style="'. $fancy_css .'">'. $text2 .'</h2>';
		if ( $text3 ) $fancy_text .= '<h2 style="'. $fancy_css .'">'. $text3 .'</h2>';
		if ( $text4 ) $fancy_text .= '<h2 style="'. $fancy_css .'">'. $text4 .'</h2>';
		if ( $text5 ) $fancy_text .= '<h2 style="'. $fancy_css .'">'. $text5 .'</h2>';
		$fancy_text = substr( $fancy_text, 0, -1 );

		if ( $prefix_text ) $prefix_text = '<div class="prefix-text" style="'. $prefix_css .'">'. $prefix_text .'</div>';
		if ( $suffix_text ) $suffix_text = '<div class="suffix-text" style="'. $suffix_css .'">'. $suffix_text .'</div>';

		$out_put = printf(
			'<div class="wrap-animation-text">
			%4$s
			<div class="animationtext letters %8$s %6$s %7$s" style="%9$s" data-min="%2$s" data-max="%3$s">				
		        <span class="cd-words-wrapper %6$s">%1$s</span>		        
		    </div>
		    %5$s
		    </div>',
			$fancy_text,
			$min,
			$max,
			$prefix_text,
			$suffix_text,
			$alignment,
			$font_style_css,
			$animation,
			$style_inline_block_text
		);
		$out_put = ob_get_clean();
	    return $out_put;
	}else {
		if ( $text1 ) $fancy_text = '<h2 class="heading is-visible" style="'. $fancy_css .'">'. $text1 .'</h2>';
		if ( $text2 ) $fancy_text .= '<h2 style="'. $fancy_css .'">'. $text2 .'</h2>';
		if ( $text3 ) $fancy_text .= '<h2 style="'. $fancy_css .'">'. $text3 .'</h2>';
		if ( $text4 ) $fancy_text .= '<h2 style="'. $fancy_css .'">'. $text4 .'</h2>';
		if ( $text5 ) $fancy_text .= '<h2 style="'. $fancy_css .'">'. $text5 .'</h2>';
		$fancy_text = substr( $fancy_text, 0, -1 );

		if ( $prefix_text ) $prefix_text = '<div class="prefix-text" style="'. $prefix_css .'">'. $prefix_text .'</div>';
		if ( $suffix_text ) $suffix_text = '<div class="suffix-text" style="'. $suffix_css .'">'. $suffix_text .'</div>';

		$out_put = printf(
			'<div class="wrap-animation-text">
			%4$s
			<div class="animationtext %8$s %6$s %7$s" style="%9$s" data-min="%2$s" data-max="%3$s">				
		        <span class="cd-words-wrapper %6$s">%1$s</span>		        
		    </div>
		    %5$s
		    </div>',
			$fancy_text,
			$min,
			$max,
			$prefix_text,
			$suffix_text,
			$alignment,
			$font_style_css,
			$animation,
			$style_inline_block_text
		);
		$out_put = ob_get_clean();
	    return $out_put;
	}
}