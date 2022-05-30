<?php
define('LIB_DIR', dirname(__DIR__));
define('LIB_TEST_DIR', __DIR__);
include_once(LIB_DIR . '/vendor/autoload.php');

use robertsaupe\Json\Json;

$json = new Json();
print_r($json->decodeFile(LIB_DIR . '/composer.json'));
?>