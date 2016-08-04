<?php
  require_once('./config.php');

  require_once($util_scripts_path . '/class.utils.php');
  $myUtils = new utils();

  require_once($app_scripts_path . '/class.app.php');
  $myApp = new app();
?>
<!DOCTYPE html>
<html lang="en" ng-app="note2self" ng-cloak>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php print($description); ?>">
    <meta name="author" content="<?php print($author); ?>">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title><?php print($title); ?></title>

    <!-- All Stylesheets -->
    <link href="resources/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/css/style.css" rel="stylesheet">

    <!-- All Required JS Framework Dependencies -->
    <?php
      $myUtils->printJavascriptContainerGroup($javascript_dependencies);
    ?>

    <!-- All Angular Application Scripts -->
    <?php
      $myUtils->printJavascriptContainerGroup($angular_scripts);
    ?>
  </head>
  <body>
  <?php
    $include = 'account_state';
    include_once($views_path . '/view.' . $include . '.php');
  ?>
  <div class="container">
  </div>
  </body>
</html>
