<?php
  if($myApp->getState()) {
    include_once($views_path . '/' . $include . '/view.logged_out.php');
  } else {
    include_once($views_path . '/' . $include . '/view.logged_in.php');
  }
?>
