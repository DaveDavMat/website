<?php
session_start();

require ('./vendor/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '',
    'default_graph_version' => '',
]);