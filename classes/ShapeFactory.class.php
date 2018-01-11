<?php

  class ShapeFactory {
    public static function create($className, $radius) {
      return(new $className($radius));
    }
  }

?>
