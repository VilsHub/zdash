<?php $app->router->plugToSocket("dashboardMiddlewares", $systemApp); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
      $systemAppsHandler->getFragment($systemApp->id, "dashboard", "head.php");
    ?>
  </head>
  <body>
    <div id="page">
      <?php  $systemAppsHandler->getFragment($systemApp->id, "dashboard", "header.php");?>
      
        
      <?php $app->router->showContent;?>
        
      <?php  $systemAppsHandler->getFragment($systemApp->id, "dashboard", "footer.php");?>
    </div>
  </body>
</html>