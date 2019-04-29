<?php
// Here you can initialize variables that will be available to your tests
use Codeception\Configuration;
use Codeception\Util\Autoload;

$support = Configuration::supportDir();

include_once codecept_data_dir( 'classes/WP_Screen.php' );
include_once  $support . 'utils.php';

tests_add_filter( 'tribe_common_log_to_wpcli', '__return_false' );

