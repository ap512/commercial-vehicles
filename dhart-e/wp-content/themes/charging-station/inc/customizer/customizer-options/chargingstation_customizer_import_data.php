<?php
class chargingstation_import_dummy_data {

	private static $instance;

	public static function init( ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof chargingstation_import_dummy_data ) ) {
			self::$instance = new chargingstation_import_dummy_data;
			self::$instance->chargingstation_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */
	

	/**
	 * Setup the actions used for this class.
	 */
	public function chargingstation_setup_actions() {

		// Enqueue scripts
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'chargingstation_import_customize_scripts' ), 0 );

	}
	
	

	public function chargingstation_import_customize_scripts() {

	wp_enqueue_script( 'chargingstation-import-customizer-js', CHARGINGSTATION_PARENT_INC_URI . '/customizer/customizer-notify/js/chargingstation-import-customizer-options.js', array( 'customize-controls' ) );
	}
}

$chargingstation_import_customizers = array(

		'import_data' => array(
			'recommended' => true,
			
		),
);
chargingstation_import_dummy_data::init( apply_filters( 'chargingstation_import_customizer', $chargingstation_import_customizers ) );