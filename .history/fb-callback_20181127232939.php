<?php
require_once "config.php";

try{
$accessToken = $helper -> getAccessToken();
} catch (\facebook\Exceptions\FacebookResponseException $e){
    echo "response exce".$e->getMessage();
    exit();
}catch (\facebook\Exceptions\FacebookSDKException $e){
echo "sdk exce".$e->getMessage();
exit();
}