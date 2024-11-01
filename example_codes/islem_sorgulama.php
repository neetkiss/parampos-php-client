<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\IslemSorgulama\IslemSorgulama;
use Param\PhpSdk\Features\Config;

Config::set([
    'URL' => 'https://test-dmz.param.com.tr:4443/turkpos.ws/service_turkpos_test.asmx?WSDL',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$islemSorgulama = new IslemSorgulama();
$islemSorgulama->setDekont_ID("3007260486");
$islemSorgulama->setSiparis_ID("TTP_WMD_UCD3D00349"); // Bu alan zorunlu değildir.
$islemSorgulama->setIslem_ID("");  // Bu alan zorunlu değildir.

$result = $islemSorgulama->send();
print_r($result);
die;
