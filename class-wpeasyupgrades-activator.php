<?php

class WPEasyUpgradesActivator {
    public static function activate() {
        // Activation code here, e.g., check for minimum PHP or WordPress version
    }
}
register_activation_hook( __FILE__, array( 'WPEasyUpgradesActivator', 'activate' ) );
