<?php
add_shortcode( 'themesflat_maps', 'themesflat_shortcode_maps' );

// Map render
function themesflat_shortcode_maps( $atts, $content = null ) {
	$atts = vc_map_get_attributes( 'themesflat_maps', $atts );
	extract (apply_filters( 'themesflat/shortcode/themesflat_maps_atts',$atts));

	$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

	$img = "";
	if ( wp_get_attachment_url($image) ) {
		$img = wp_get_attachment_url($image);
	}

	$img_layout_address = "";
	if ( wp_get_attachment_url($image_layout_address) ) {
		$img_layout_address = wp_get_attachment_url($image_layout_address);
	}
	
	wp_enqueue_script('themesflat-google');
	wp_enqueue_script('themesflat-gmap3');

	$return = '<div class="themesflat-maps" data-address="' . esc_attr( $address ) . '" data-height="' . intval($height). '" data-images="' . esc_attr( $img ) . '" data-name="' . esc_attr( $name ) . '" data-images_layout_address="' . esc_attr( $img_layout_address ) . '" data-address_x="' . esc_attr( $layout_address_x ) . '" data-address_y="' . esc_attr( $layout_address_y ) . '">
        <div id="map"></div>
    	</div><!-- /.themesflat-maps -->';
	return $return;
}


if ( function_exists( 'vc_map' ) ) {
	add_action( 'vc_before_init', 'themesflat_shortcode_maps_vc' );

	function themesflat_shortcode_maps_vc() {
		vc_map( array(			
			'name'                    => esc_html__( 'Themesflat: Google Maps', 'redbiz' ),
			'base'                    => 'themesflat_maps',	
			'icon'        => THEMESFLAT_ICON,		
			'content_element'         => true,			
			'category'                => esc_html__( 'redbiz', 'redbiz' ),
			'params'                  => array(	

				array(
					"type" => "textfield",
					"holder" => "h3",
					"heading" => esc_html__("name", 'redbiz'),
					"param_name" => "name",
					"value" => esc_html__("Themesflat Map", 'redbiz'),
					"description" => esc_html__("Name Display On Map.", 'redbiz'),
				),

                array(
					"type" => "textfield",
					"holder" => "h3",
					"heading" => esc_html__("address", 'redbiz'),
					"param_name" => "address",
					"value" => esc_html__("Harvard St, Cambridge, Massachusetts, Hoa Kỳ", 'redbiz'),
					"description" => esc_html__("Address For Map.", 'redbiz'),
				),

              	array(
					"type" => "attach_image",
					"holder" => "img",
					"heading" => esc_html__("Icon Marker", 'redbiz'),
					"param_name" => "image",
					"value" => '',
					"description" => esc_html__("Choose a image icon marker display on map", 'redbiz')
              	),

              	array(
					"type" => "attach_image",
					"holder" => "img_layout_address",
					"heading" => esc_html__("Image Layout Address", 'redbiz'),
					"param_name" => "image_layout_address",
					"value" => '',
					"description" => esc_html__("Choose a image layout address display on map", 'redbiz')
              	),

              	array(
					"type" => "textfield",
					"holder" => "h3",
					"heading" => esc_html__("Layout Address X", 'redbiz'),
					"param_name" => "layout_address_x",
					"value" => esc_html__("34", 'redbiz'),
				),

				array(
					"type" => "textfield",
					"holder" => "h3",
					"heading" => esc_html__("Layout Address Y", 'redbiz'),
					"param_name" => "layout_address_y",
					"value" => esc_html__("-186", 'redbiz'),
				),
              	
              	array(
					"type" => "textfield",
					"holder" => "h3",
					"heading" => esc_html__("height", 'redbiz'),
					"param_name" => "height",
					"value" => esc_html__("350px", 'redbiz'),
					"description" => esc_html__("Set height for section map", 'redbiz'),
				),				
			)
		) );
	}
}