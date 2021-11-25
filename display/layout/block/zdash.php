<?php $app->router->plugToSocket("dashboardMiddlewares", $application); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
      require($application->config->vendor->display."/layout/fragments/home/head.php");
      $app->router->plugToSocket("publicLinks", $application);
    ?>
  </head>
  <body>
    <div id="page">
      <?php require($application->config->vendor->display."/layout/fragments/home/header.php");?>
        
      <?php $app->router->showContent;?>
        
      <?php require_once($application->config->vendor->display."/layout/fragments/home/footer.php")?>
    </div>
  </body>
</html>