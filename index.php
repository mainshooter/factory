<?php

  require_once 'classes/ShapeFactory.class.php';
  require_once 'classes/Circle.class.php';
  require_once 'classes/Square.class.php';

  $Circle = ShapeFactory::create('Circle', 3);
  echo '<h1>Circle ' . $Circle->getArea() . '</h1>';

  $Square = ShapeFactory::create('Square', 10);
  echo "<h1>Square {$Square->getArea()}</h1>";
?>
