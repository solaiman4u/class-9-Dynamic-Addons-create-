<?php 

//Section Title ShortCode
function industry_section_title_shortcode($atts){
    extract( shortcode_atts( array(
        'sub_title' => '',
        'title' => '',
        'description' => '',
    ), $atts) );

	$industry_section_title_markup ='<div class="industry_section_title">';

	if(!empty($sub_title)){
		$industry_section_title_markup .= '<h4>'.esc_html( $sub_title ).'</h4>';
	}

	if(!empty($title)){
		$industry_section_title_markup .= '<h2>'.esc_html( $title ).'</h2>';
	}
	
	if(!empty($description)){
		$industry_section_title_markup .= ''.wpautop( esc_html( $description ) ).'';
	}

	$industry_section_title_markup .= '</div>';
   




    return $industry_section_title_markup;
   
}
add_shortcode('industry_section_title', 'industry_section_title_shortcode'); 


//Service Box ShortCode
function industry_service_box_shortcode($atts){
    extract( shortcode_atts( array(
        'icon_type' => 1,
        'fa_icon' => 'fa fa-star',
        'img_icon' => '',
        'title' => '',
        'description' => '',
    ), $atts) );

    $industry_service_box_markup ='<div class="industry_service_box">';

    if($icon_type == 1){
        $industry_service_box_markup .= '<div class="service-icon">
            <i class="'.esc_attr( $fa_icon ).'"></i>
        </div>';
    }else{
        $service_icon_img_array = wp_get_attachment_image_src( $img_icon, 'thumbnail' );
        $industry_service_box_markup .= '<div class="service-img-icon">
            <img src="'.esc_url( $service_icon_img_array[0] ).'" alt="'.esc_html( $title ).'"/>
        </div>';
    }


    if(!empty($title)){
        $industry_service_box_markup .= '<h2>'.esc_html( $title ).'</h2>';
    }
    
    if(!empty($description)){
        $industry_service_box_markup .= ''.wpautop( esc_html( $description ) ).'';
    }

    $industry_service_box_markup .= '</div>';
   




    return $industry_service_box_markup;
   
}
add_shortcode('industry_service_box', 'industry_service_box_shortcode');  

