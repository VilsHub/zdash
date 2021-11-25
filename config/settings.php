<?php
//Package manager will publish settins to app/applications.php application lists

$settings = [
    "zdash" => [
        "config"        => [
            "vendor"    => [
                "socket"        => $vendorSpace."/http/routes/socket.php",
                "content"       => $vendorSpace."/http/routes/content.php",
                "webHandler"    => $vendorSpace."/http/handlers/web.php",
                "apiHandler"    => $vendorSpace."/http/handlers/api.php",
                "display"       => $vendorSpace."/display",
            ],
            "system"    => [
                "socket"        => $applicationDataSpace."/http/routes/socket.php",
                "content"       => $applicationDataSpace."/http/routes/content.php",
                "webHandler"    => $applicationDataSpace."/http/handlers/web.php",
                "apiHandler"    => $applicationDataSpace."/http/handlers/api.php",
                "display"       => $applicationDataSpace."/display",
            ]
        ],
        "apiID"         => "api",
        "configInUse"   => "vendor"
    ]
];

return $settings;
?>