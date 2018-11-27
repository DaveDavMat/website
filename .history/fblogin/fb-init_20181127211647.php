<?php
session_start();

require ('./vendor/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '346429972573830',
    'app_secret' => '●●●●●●●●',
    'default_graph_version' => 'v2.7',
]);