<?php
defined( 'WPINC' ) or die;

class {%= classPrefix %}_Plugin extends WP_Stack_Plugin2 {

	protected static $instance;

	/**
	 * Constructs the object, hooks in to 'plugins_loaded'
	 */
	protected function __construct() {
		$this->hook( 'plugins_loaded', 'add_hooks' );
	}

	/**
	 * Adds hooks
	 */
	public function add_hooks() {
		$this->hook( 'init' );
		// Add your hooks here
	}

	/**
	 * Initializes the plugin, registers textdomain, etc
	 */
	public function init() {
		$this->load_textdomain( '{%= prefixDashed %}', '/languages' );
	}
}
