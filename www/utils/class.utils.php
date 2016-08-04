<?php
  class utils {
    public function __construct() {
    }

    public function printJavascriptContainer($source) {
      if($source) {
        return '<script src="' . $source . '"></script>';
      } else {
        return '<script/>';
      }
    }

    public function printJavascriptContainerGroup($data) {
      if (isset($data) && is_array($data)) {
        foreach($data as $key => $value) {
          $container = $this->printJavascriptContainer($value['source']);
          print($container . "\n");
        }
      }
    }
  }
?>
