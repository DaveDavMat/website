<?php
session_start();

require ('./vendor/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '346429972573830',
    'app_secret' => 'a50b3eda25564d64254d7133116739bf',
    'default_graph_version' => 'v2.7',
]);

$helper=$fb->getRedirectLoginHelper();