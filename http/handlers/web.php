<?php
use vilshub\http\Request;

//Import Content routes
$contentRoutes = require_once($application["config"][$configInUse]["content"]);

//Set blocks
if(Route::block($root, Request::$uri)){
    $block      = $application["config"][$configInUse]["display"]."/layout/block/zdash.php";
    $baseDir    = $application["config"][$configInUse]["display"]."/contents";
    $app->router->listen($block, $baseDir, $contentRoutes);
}

//Error handler
$app->router->error();
?>