<?php
  // print_r($application);
  // die;
  $inUse      = $application->configInUse;
  $displayDir = $application->displayMaps->displayDir;

  return array(
    // "dashboardLinks"      => [
    //   "add-questions"     => $config->displayDir."/dashboard/".$config->plugsDir."/addQuestionsLinks.php",
    //   "dashboard"         => $config->displayDir."/dashboard/".$config->plugsDir."/dashboardLinks.php",
    // ],
    // "dashboardMiddleware" => [
    //   "*"                 => $config->displayDir."/dashboard/".$config->plugsDir."/aglobalMiddleware.php",
    //   "add-questions"     => $config->displayDir."/dashboard/".$config->plugsDir."/addQuestMiddleware.php",
    // ],
  )
?>