<?php

include_once 'include.php';

$params = array(
    'start' => '2015-01-01 00:00:00',
    'end' => '2015-31-01 00:00:00',
    /*'sip' => 'YOURSIP',*/
    /*'cost_only' => true,*/
    /*'type' => 'toll'*/
);

$zd = new \Zadarma_API\Client(KEY, SECRET);
$answer = $zd->call('/v1/statistics/', $params);

$answerObject = json_decode($answer);

if ($answerObject->status == 'success') {
    print_r($answerObject->stats);
} else {
    echo $answerObject->message;
}