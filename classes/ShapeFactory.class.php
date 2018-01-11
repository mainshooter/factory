<?php

  class ShapeFactory {

    public static function create($className, $radius) {
      if (self::checkIfClassExists($className)) {
        return(new $className($radius));
      }
      return(false);
    }

    private function checkIfClassExists($className) {
      if (file_exists('classes/' . $className . '.class.php') === true) {
        return(true);
      }
      return(false);
    }
  }

?>
