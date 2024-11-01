<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\PosOranlari\PosOranlari;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://test-dmz.param.com.tr:4443/turkpos.ws/service_turkpos_test.asmx?WSDL',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$posOranlari = new PosOranlari();
/**
 * SanalPOS_ID değerini almak için öncelikle BIN sorgusunu çalıştırmanız gerekmektedir. Orada dönen SanalPOS_ID değeriyle taksit/komisyon oranlarını öğrenebilirsiniz.
 * 
 * SanalPos_ID değerini boş gönderirseniz TÜM oranlar döner. -> $posOranlari->setSanalPOS_ID("");
 * SanalPos_ID değerinin içerisinde veri gönderirseniz SADECE o SanalPos_ID'e ait oranlar döner. -> $posOranlari->setSanalPOS_ID("1052");
 * Eğer geçersiz veya olmayan bir SanalPos_ID değeri gönderirseniz tekrardan TÜM oranlar döner. -> $posOranlari->setSanalPOS_ID("GeçersizDeğer");
 */
$posOranlari->setSanalPOS_ID("1052"); // Bu alan zorunlu değildir.

$result = $posOranlari->send();
print_r($result);
die;
