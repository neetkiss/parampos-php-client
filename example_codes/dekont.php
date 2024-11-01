<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\Dekont\Dekont;
use Param\PhpSdk\Features\Config;

Config::set([
    'URL' => 'https://test-dmz.param.com.tr:4443/turkpos.ws/service_turkpos_test.asmx?WSDL',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$dekont = new Dekont();
$dekont->setDekont_ID("3007260486");
$dekont->setE_Posta("jhon_doe@example.com");

$result = $dekont->send();
print_r($result);
die;

