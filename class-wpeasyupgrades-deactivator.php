<?php

class WPEasyUpgradesDeactivator {
    public static function deactivate() {
        // Deactivation code here, e.g., remove temporary data
    }
}
register_deactivation_hook( __FILE__, array( 'WPEasyUpgradesDeactivator', 'deactivate' ) );
