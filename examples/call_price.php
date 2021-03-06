<?php

include_once 'include.php';

$params = array(
    'number' => '48721000000',
    'caller_id' => '49100000000' // optional
);

$zd = new \Zadarma_API\Client(KEY, SECRET);
$answer = $zd->call('/v1/info/price/', $params);

$answerObject = json_decode($answer);

if ($answerObject->status == 'success') {
    echo 'Price - ' . $answerObject->info->price;
    echo '<h4>Full info</h4>';
    print_r($answerObject->info);
}
