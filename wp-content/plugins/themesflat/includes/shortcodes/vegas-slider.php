<?php
/**
 * Register filter for append custom class name
 * that generated from visual-composer
 */

/**
 * Register shortcode into Visual Composer
 */
add_action( 'vc_before_init', 'themesflat_vegas_shortcode_params' );

// Content Box
add_action( 'vc_before_init', function() {
    class WPBakeryShortCode_vegas_slider extends WPBakeryShortCodesContainer {}
} );

/**
 * Register parameters for iconbox shortcode
 * 
 * @return  void
 */
function themesflat_vegas_shortcode_params() {
	vc_map( array(
		'name' => esc_html__('Themesflat: Vegas Slider', 'redbiz'),
        'description' => esc_html__('Vegas Slider.', 'redbiz'),
        'base' => 'vegas_slider',
		'weight'	=>	180,
		'icon'        => THEMESFLAT_ICON,
		'as_parent' => array('except' => 'vegas'),
		'controls' => 'full',
		'show_settings_on_create' => true,
		'category' => esc_html__('redbiz', 'redbiz'),
		'params' => array(
			// General
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Vegas Layout', 'redbiz' ),
				'param_name' => 'vegas_height',
				'value'      => array(
					'Full Height' => 'full-height',
					'Custom Height' => 'custom-height',
				),
				'std'		=> 'full-height',
			),
            array(
				'type' => 'textfield',
				'heading' => esc_html__('Vegas Custom Height', 'redbiz'),
				'param_name' => 'vegas_custom_height',
				'value' => '',
				'description'	=> esc_html__('Ex: 600px.', 'redbiz'),
				'dependency' => array( 'element' => 'vegas_height', 'value' => 'custom-height' ),
            ),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Slider Type', 'redbiz' ),
				'param_name' => 'slider_type',
				'value'      => array(
					'Background Slideshow' => 'slideshow',
					'Background Video' => 'video',
				),
				'std'		=> 'slideshow',
			),
			array(
				'type' => 'attach_images',
				'heading' => esc_html__('Background Images', 'redbiz'),
				'param_name' => 'images',
				'value' => '',
				'description' => esc_html__('Choose multi-images for background slideshow.', 'redbiz'),
				'dependency' => array( 'element' => 'slider_type', 'value' => 'slideshow' ),
			),

			// Seting for vegas slider
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Transitions', 'redbiz' ),
				'param_name' => 'trasitions',
				'description'=> esc_html__(' You can see all transition at <a href="https://vegas.jaysalvat.com/documentation/transitions/">here</a>','redbiz'),
				'group'		 => esc_html__('Setting','redbiz'),
				'value'      => array(
					'fade' => 'fade',
					'fade2' => 'fade2',
					'slideLeft' => 'slideLeft',
					'slideLeft2' => 'slideLeft2',
					'slideRight' => 'slideRight',
					'slideRight2' => 'slideRight2',
					'slideUp' => 'slideUp',
					'slideDown' => 'slideDown',
					'slideDown2' => 'slideDown2',
					'zoomIn' => 'zoomIn',
					'zoomIn2' => 'zoomIn2',
					'zoomOut' => 'zoomOut',
					'zoomOut2' => 'zoomOut2',
					'swirlLeft' => 'swirlLeft',
					'swirlLeft2' => 'swirlLeft2',
					'swirlRight' => 'swirlRight',
					'swirlRight2' => 'swirlRight2',
					'burn' => 'burn',
					'burn2' => 'burn2',
					'blur' => 'blur',
					'blur2' => 'blur2',
					'flash' => 'flash',
					'flash2' => 'flash2'
				),
				'std'		=> 'fade',
				'dependency' => array( 'element' => 'showcase', 'value' => 'slideshow' ),
			),
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> esc_html__('Animations','redbiz'),
				'param_name'	=> 'animations',
				'description'   => esc_html__('You can see all animations at here','redbiz'),
				'group'		 => esc_html__('Setting','redbiz'),
				'value'			=> array(
					'kenburns'			=> 'kenburns',
					'kenburnsUp'		=> 'kenburnsUp',
					'kenburnsDown'		=> 'kenburnsDown',
					'kenburnsRight'		=> 'kenburnsRight',
					'kenburnsLeft'		=> 'kenburnsLeft',
					'kenburnsUpLeft'	=> 'kenburnsUpLeft',
					'kenburnsUpRight'	=> 'kenburnsUpRight',
					'kenburnsDownLeft'	=> 'kenburnsDownLeft',
					'kenburnsDownRight'	=> 'kenburnsDownRight'
				),
				'std'					=> 'kenburns',
			),
            array(
				'type' => 'textfield',
				'heading' => esc_html__('Youtube link (URL)', 'redbiz'),
				'param_name' => 'video_link',
				'value' => '',
				'description' => esc_html__('Youtube link or ID. Ex: https://www.youtube.com/watch?v=bwihz25YA3E', 'redbiz'),
				'dependency' => array( 'element' => 'showcase', 'value' => 'video' ),
            ),

			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Pattern Overlays', 'redbiz' ),
				'param_name' => 'pattern_overlay',
				'group'		 => esc_html__('Setting','redbiz'),
				'description'=> esc_html__('Overlays are repeated dot pattern that can be applied to reduce artefact effects on scaled backgrounds.','redbiz'),
				'value'      => array(
					'No Parttern' => '',
					'Style 1' => THEMESFLAT_URL.'assets/img/overlays/01.png',
					'Style 2' => THEMESFLAT_URL.'assets/img/overlays/02.png',
					'Style 3' => THEMESFLAT_URL.'assets/img/overlays/03.png',
					'Style 4' => THEMESFLAT_URL.'assets/img/overlays/04.png',
					'Style 5' => THEMESFLAT_URL.'assets/img/overlays/05.png',
					'Style 6' => THEMESFLAT_URL.'assets/img/overlays/06.png',
					'Style 7' => THEMESFLAT_URL.'assets/img/overlays/07.png',
					'Style 8' => THEMESFLAT_URL.'assets/img/overlays/08.png',
					'Style 9' => THEMESFLAT_URL.'assets/img/overlays/09.png',
				),
				'std'		=> THEMESFLAT_URL.'assets/img/overlay/01.png',
			),
            array(
				'type' => 'colorpicker',
				'heading' => esc_html__('Color Overlay', 'redbiz'),
				'param_name' => 'background_overlay',
				'group'		 => esc_html__('Setting','redbiz'),
				'value' => '',
            ),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Content Alignment', 'redbiz' ),
				'param_name' => 'alignment',
				'value'      => array(
					'Left' => 'text-left',
					'Center' => 'text-center',
					'Right' => 'text-right',
				),
				'std'		=> 'text-center',
			),
            array(
				'type' => 'textfield',
				'heading' => esc_html__('offset top if use this does not use Margin Bottom', 'redbiz'),
				'param_name' => 'content_top',
				'value' => '',
				'description'	=> esc_html__('Ex: 100px. Adjusted above', 'redbiz'),
            ),

            array(
				'type' => 'textfield',
				'heading' => esc_html__('offset Bottom if use this does not use Margin Top', 'redbiz'),
				'param_name' => 'content_bottom',
				'value' => '',
				'description'	=> esc_html__('Ex: 100px. Adjusted bottom', 'redbiz'),
            ),
            array(
            	'type'		=> 'checkbox',
            	'heading'	=> 'Display/hide timer bar.',
            	'param_name'=> 'timebar',
            	'value'		=> array(esc_html__('Yes, hide timer bar') =>'yes' ),
            	'group'		=> esc_html__('Setting','redbiz')
            ),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Content area into Grid?', 'redbiz' ),
				'param_name' => 'grid',
				'value'      => array( esc_html__( 'Yes, please.', 'redbiz' ) => 'yes' ),
			),
			// Arrow
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Show arrow?', 'redbiz' ),
				'param_name' => 'scroll',
				'value'      => array( esc_html__( 'Yes, please.', 'redbiz' ) => 'yes' ),
				'group' => esc_html__( 'Arrow', 'redbiz' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Arrow Style', 'redbiz' ),
				'param_name' => 'arrow_style',
				'value'      => array(
					'Style 1' => 'style-1',
					'Style 2' => 'style-2',
				),
				'std'		=> 'style-1',
				'group' => esc_html__( 'Arrow', 'redbiz' ),
				'dependency' => array( 'element' => 'scroll', 'value' => 'yes' ),
			),
            array(
				'type' => 'textfield',
				'heading' => esc_html__('Scroll to Row (ID)', 'redbiz'),
				'param_name' => 'scroll_id',
				'value' => '',
				'description' => esc_html__('Enter the anchor ID you assigned to the row.', 'redbiz'),
				'group' => esc_html__( 'Arrow', 'redbiz' ),
				'dependency' => array( 'element' => 'scroll', 'value' => 'yes' ),
            ),
		),
		'js_view' => 'VcColumnView',
	) );
}

add_shortcode( 'vegas_slider', 'themesflat_shortcode_vegas_slider' );

/**
 * Iconbox shortcode handle
 * 
 * @param   array  $atts  Shortcode attributes
 * @return  void
 */
function themesflat_shortcode_vegas_slider( $atts, $content = null ) {
	$atts = vc_map_get_attributes( 'vegas_slider', $atts );
	$content = wpb_js_remove_wpautop($content, true);

	$count = $img_str = '';
	if ( ! empty( $atts['images'] ) ) {
		$imgs = explode( ',', trim( $atts['images'] ) );
		
		$slider_item = 0;
		$slider_item = count( $imgs );
		
		for ( $i=0; $i<$slider_item; $i++ ) {
			$img_str .= wp_get_attachment_image_src( $imgs[$i], 'full' )[0] .',';
		}
		$img_str = substr( $img_str, 0, -1 );
	}

	$vegas_select_height = "full-height";
	
	if ( $atts['vegas_height'] == 'custom-height' ) {
		$vegas_select_height = intval ( $atts['vegas_custom_height'] );
	} 

	//echo "<br>";
	//echo "Style Height: ".$vegas_select_height;


	
	if ( $atts['slider_type'] == 'slideshow') {
		if ( $atts['timebar'] == 'yes' ) {
			$atts['timebar'] = 'false';
		} else {
			$atts['timebar'] = 'true';
		}
		
		wp_enqueue_script( 'vegas-slider' );
		printf('<div class="vegas-slider slideshow text-center" data-height="%7$s" data-slider_item="%5$s" data-content="%10$s" data-content-bottom="%11$s" data-image="%2$s" data-trasition="%3$s" data-animations="%4$s" data-overlay-style="%6$s" data-timebar="%8$s" data-poverlay="" data-background-color="%9$s">
			<div class="vegas-inner">%1$s</div>
			</div>',
	        do_shortcode($content),
	        $img_str,
	        $atts['trasitions'],
	        $atts['animations'],
	        $slider_item,
	        $atts['pattern_overlay'],
	        $vegas_select_height,
	        $atts['timebar'],
	        $atts['background_overlay'],
	        $atts['content_top'],
	        $atts['content_bottom']
    	);
	}

	if ( $atts['slider_type'] == 'video') {
		wp_enqueue_script( 'ytplayer' );
		$video_link = $atts['video_link'];
		$pattern_overlay = $atts['pattern_overlay'];

		$property = "{videoURL:'$video_link',containment:'.player', showControls:false, autoPlay:true, loop:true, mute:false, startAt:0, opacity:1, addRaster:'$pattern_overlay', quality:'default'}";

		printf(
			'<div class="vegas-slider video player %3$s" data-property="%1$s" data-overlay="%2$s" data-content="%5$s" data-content-bottom="%7$s" data-height="%6$s">
				<div class="vegas-inner">%4$s</div>
		    </div>',
			$property,
			$atts['background_overlay'],
			$atts['alignment'],
			do_shortcode($content),
			//$atts['arrow_html'],
			$atts['content_top'],
			$vegas_select_height,
	        $atts['content_bottom']
		);
	}
}