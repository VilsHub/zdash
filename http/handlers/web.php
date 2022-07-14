<?php
use vilshub\http\Request;

//Import Content routes
$contentRoutes = require_once($systemApp->routeFiles->content);

//Set blocks
if(Route::block($root, Request::$uri)){
    
    $block      = $systemAppsHandler->getDisplayBlock($systemApp->id, "dashboard", "zdash.php");
    $baseDir    = $systemAppsHandler->getLoadBase($systemApp->id, "dashboard");
    $app->router->listen($block, $baseDir, $contentRoutes);

}

//Error handler
$app->router->error();
?>