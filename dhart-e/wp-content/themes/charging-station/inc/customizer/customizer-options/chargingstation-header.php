<?php
function chargingstation_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'charging-station'),
		) 
	);

	
	/*=========================================
	Charging Station Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','charging-station'),
			'panel'  		=> 'header_section',
		)
    );


	// topheader Logo Width
	$topheaderlogowidth = esc_html__('100', 'charging-station' );
	$wp_customize->add_setting(
    	'topheader_logowidth',
    	array(
			'default' => $topheaderlogowidth,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'topheader_logowidth',
		array(
		    'label'   		=> __('Logo Width','charging-station'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'range',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader Logo Width
    $wp_customize->add_setting('topheader_logowidth',array(
        'default' => 100,
        'sanitize_callback' => 'chargingstation_sanitize_float'
    ));
    $wp_customize->add_control(new chargingstation_Custom_Control( $wp_customize, 'topheader_logowidth',array(
	    'label' => __('Logo Width','charging-station'),
	    'section' => 'title_tagline',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ),
    )));


    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#646464', 'charging-station' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','charging-station'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// top header Site Title Color
	$topheadersitetitleborcol = esc_html__('#b6d434', 'charging-station' );
	$wp_customize->add_setting(
    	'topheader_sitetitleborcol',
    	array(
			'default' => $topheadersitetitleborcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitleborcol',
		array(
		    'label'   		=> __('Site Title Border Color','charging-station'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#fff', 'charging-station' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','charging-station'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);




	/*=========================================
	Charging Station header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','charging-station'),
			'panel'  		=> 'header_section',
		)
    );	


	$wp_customize->add_setting('chargingstation_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new chargingstation_Reset_Custom_Control($wp_customize, 'chargingstation_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'charging-station'),
	  'description' => 'chargingstation_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('chargingstation_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new chargingstation_Tab_Control($wp_customize, 'chargingstation_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'charging-station'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
            	'topheader_btntxt',
            	'topheader_btnlink'

            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'charging-station'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'topheader_bgcol',
            	'topheader_btnlinktextcolor',
            	'topheader_btngradientcolor1',
            	'topheader_btngradientcolor2'
            ),
         )
	    
    	),
	)));



   	// General setting


   	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'chargingstation_switch_sanitization'
   	) );
   	$wp_customize->add_control( new chargingstation_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','charging-station' ),
        'section' => 'top_header'
   	)));


	// topheader Button Text
	$topheaderbtntxt = esc_html__('Contact Us', 'charging-station' );
	$wp_customize->add_setting(
    	'topheader_btntxt',
    	array(
			'default' => $topheaderbtntxt,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntxt',
		array(
		    'label'   		=> __('Button Text','charging-station'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader Button Link
	$topheaderbtnlink = esc_html__('#', 'charging-station' );
	$wp_customize->add_setting(
    	'topheader_btnlink',
    	array(
			'default' => $topheaderbtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btnlink',
		array(
		    'label'   		=> __('Button Link','charging-station'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Style Setting

	// topheader Background color
	$topheaderbgcol = esc_html__('#ffffff', 'charging-station' );
	$wp_customize->add_setting(
    	'topheader_bgcol',
    	array(
			'default' => $topheaderbgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_bgcol',
		array(
		    'label'   		=> __('Background Color','charging-station'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);	

	// topheader Button Text Color
	$topheaderbtnlinktextcolor = esc_html__('#f6f7f4', 'charging-station' );
	$wp_customize->add_setting(
    	'topheader_btnlinktextcolor',
    	array(
			'default' => $topheaderbtnlinktextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btnlinktextcolor',
		array(
		    'label'   		=> __('Button Text Color','charging-station'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);	


	// topheader Button gradient color 1
	$topheaderbtngradientcolor1 = esc_html__('#509e39', 'charging-station' );
	$wp_customize->add_setting(
    	'topheader_btngradientcolor1',
    	array(
			'default' => $topheaderbtngradientcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btngradientcolor1',
		array(
		    'label'   		=> __('Button Color','charging-station'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);	

	// topheader Button gradient color 2
	$topheaderbtngradientcolor2 = esc_html__('#283524', 'charging-station' );
	$wp_customize->add_setting(
    	'topheader_btngradientcolor2',
    	array(
			'default' => $topheaderbtngradientcolor2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 8,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btngradientcolor2',
		array(
		    'label'   		=> __('Button Color','charging-station'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);	



	$wp_customize->register_control_type('chargingstation_Tab_Control');



}
add_action( 'customize_register', 'chargingstation_header_settings' );


