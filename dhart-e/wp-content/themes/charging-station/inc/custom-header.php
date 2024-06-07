<?php
function chargingstation_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'chargingstation_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'chargingstation_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'chargingstation_custom_header_setup' );

if ( ! function_exists( 'chargingstation_header_style' ) ) :

function chargingstation_header_style() {
	$header_text_color = get_header_textcolor();

	$topheader_logowidth = get_theme_mod('topheader_logowidth','100');
	$topheader_bgcol = get_theme_mod('topheader_bgcol','#ffffff');

	$topheader_sitetitlecol = esc_attr(get_theme_mod('topheader_sitetitlecol','#646464'));
	$topheader_sitetitleborcol = esc_attr(get_theme_mod('topheader_sitetitleborcol','#b6d434'));
	$topheader_taglinecol = esc_attr(get_theme_mod('topheader_taglinecol','#fff'));

	$slider_title_color = esc_attr(get_theme_mod('slider_title_color','#becb01'));
	$slider_description_color = esc_attr(get_theme_mod('slider_description_color','#979b9d'));
	$slider_btntext_color = esc_attr(get_theme_mod('slider_btntext_color','#fff'));
	$slider_Buttonbg_color = esc_attr(get_theme_mod('slider_Buttonbg_color','#becb01'));
	$slider_btnbghover_color = esc_attr(get_theme_mod('slider_btnbghover_color','#58b43e'));


	?>
	<style type="text/css">

		<?php 
		
		?>

		h4.site-title {
			color: <?php echo apply_filters('chargingstation_topheader', $topheader_sitetitlecol); ?> !important;

		}

		.navbar .logo a {
			color: <?php echo apply_filters('chargingstation_topheader', $topheader_sitetitleborcol); ?> !important;

		}

		p.site-description {
			color: <?php echo apply_filters('chargingstation_topheader', $topheader_taglinecol); ?>;

		}



		.custom-logo {
			width: <?php echo apply_filters('chargingstation_topheader', $topheader_logowidth); ?>%;
			height: 70%;
		}

		.main-header {
			background: <?php echo apply_filters('chargingstation_topheader', $topheader_bgcol); ?>;
		}

		.main-header.header-fixed {
			background: <?php echo apply_filters('chargingstation_topheader', $topheader_bgcol); ?>;
		}



		.hero-style .slide-title h2 {
			color: <?php echo apply_filters('chargingstation_slider', $slider_title_color); ?>;
		}

		.hero-style .slide-text p {
			color: <?php echo apply_filters('chargingstation_slider', $slider_description_color); ?>;
		}

		.hero-style a.ReadMore {
			color: <?php echo apply_filters('chargingstation_slider', $slider_btntext_color); ?> !important;
		}

		.hero-style a.ReadMore {
			background: <?php echo apply_filters('chargingstation_slider', $slider_Buttonbg_color); ?> !important;
		}

		.hero-style a.ReadMore:hover {
			background: <?php echo apply_filters('chargingstation_slider', $slider_btnbghover_color); ?> !important;
		}

		<?php  ?>
	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;
