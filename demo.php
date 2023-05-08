<?php

require_once './vendor/autoload.php';

use DoWake\Request;

$options = [
    'url' => 'https://www.baidu.com',
    'ua' => 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Mobile Safari/537.36'
];

$re = Request::singleCurl($options);

header('content-type:text/plain');
print_r($re);
