<?php
require_once "config.php";

try{
$accessToken = $helper -> getAccessToken();
} catch (\facebook\Exceptions\FacebookResponseException $e){

}catch (\facebook\Exceptions\FacebookSDKException $e){

}