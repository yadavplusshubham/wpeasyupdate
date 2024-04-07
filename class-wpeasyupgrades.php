<?php

class WPEasyUpgrades {
    protected static $_instance = null;

    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        $this->init_hooks();
    }

    private function init_hooks() {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
    }

    public function add_plugin_page() {
        // Add your admin page initialization code here
    }

    // Further implementation as per your plugin's functionality
}
