<?php
define('LIB_DIR', dirname(__DIR__));
define('LIB_TEST_DIR', __DIR__);
include_once(LIB_DIR . '/vendor/autoload.php');

use robertsaupe\Json\Jsonc;

$jsonc = new Jsonc();
print_r($jsonc->decodeFile(LIB_TEST_DIR . '/test.jsonc'));
?>