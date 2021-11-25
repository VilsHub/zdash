<?php
  
  $inUse      = $application->configInUse;
  $displayDir = $application->config->{$inUse}->display;

  return array(
    "dashboardLinks"      => [
      // "add-questions"     => $displayDir."/plugs/home/addQuestionsLinks.php",
      // "dashboard"         => $displayDir."/plugs/home/dashboardLinks.php",
    ],
    "dashboardMiddlewares" => [
      "*"                 => $displayDir."/plugs/home/globalMiddleware.php",
      "add-questions"     => $displayDir."/plugs/home/addQuestMiddleware.php",
    ]
  )
?>