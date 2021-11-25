<?php
    // $app->router->validateData(["admin", "candidate"]);
    $auth = $app->loader->loadMiddleware("Auth");
    $auth->guard("userId", Session::get("userId"), ["/login", null]);
?>