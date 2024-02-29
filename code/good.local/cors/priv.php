<?php
declare(strict_types=1);

$logStr = date('H:i:s') . ': ';
$logStr .= ($_SERVER['REQUEST_METHOD'] ?? '-') . ', ';
$logStr .= (apache_request_headers()['Origin']  ?? '-') . ', ';
$logStr .= json_encode($_REQUEST) . ', ';
$logStr .= "\n";

file_put_contents(
    __DIR__.'/log.txt',
    $logStr,
    FILE_APPEND,
);



//header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Origin: http://example.local');


if ('OPTIONS' === strtoupper($_SERVER['REQUEST_METHOD'] ?? '-')) {
//header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: *');
//header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Access-Control-Max-Age: 1');

return;
}



echo "all ok!";
