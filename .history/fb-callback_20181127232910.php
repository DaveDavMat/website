<?php
require_once "config.php";

try{
$accessToken = $helper -> getAccessToken();
} catch (\facebook\Exceptions\FacebookResponseException $e){
    echo "response exce".$e->getMessage();

}catch (\facebook\Exceptions\FacebookSDKException $e){

}