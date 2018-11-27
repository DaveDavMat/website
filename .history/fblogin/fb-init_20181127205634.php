<?php
session_start();

require ('./vendor/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '',
    'app_secret' => '',
    'default_graph_version' => 'v2.7',
]);