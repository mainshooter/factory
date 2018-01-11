<?php

  require_once 'classes/ShapeFactory.class.php';
  require_once 'classes/Circle.class.php';

  $Square = ShapeFactory::create('Circle', 3);
  echo $Square->getArea();
?>
