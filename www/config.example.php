<?php
  $author = 'Roy Keyes <keyes.roy@gmail.com>';
  $description = "Sticky notes, but easier, and they don't clutter up your screen!";
  $title = 'Note 2 Self';

  $style = array(
    "navbar" => array(
      "logged_in" => "navbar-inverse",
      "logged_out" => "navbar-default"
    )
  );

  $util_scripts_path = './utils';
  $views_path = './views';
  $app_scripts_path = './app';

  $javascript_dependencies = array(
    0 => array("source" => "resources/bower_components/jquery/dist/jquery.min.js"),
    1 => array("source" => "resources/bower_components/bootstrap/dist/js/bootstrap.min.js"),
    2 => array("source" => "resources/bower_components/angular/angular.min.js"),
    3 => array("source" => "resources/bower_components/angular-bootstrap/ui-bootstrap.min.js"),
  );

  $angular_scripts = array(
    0 => array("source" => "resources/js/app.js"),
  );

?>
