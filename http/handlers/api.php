<?php
use vilshub\http\Request;
use Dice\Dice;
$base = "/zdash/api/"; 
Request::post($base."sample", "Campaign@subscribe");
Request::post($base."product/{^[a-zA-Z]+$}", function($productId){});
Request::get($base."content/{^[a-zA-Z]+$}/{^[a-zA-Z]+$}", function($page, $serviceType){});
Request::get($base."welcome/register", "SessionReg@confirmedSession");
?>