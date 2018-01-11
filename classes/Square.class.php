<?php
  require_once 'interfaces/Shape.interface.php';
  class Square implements Shape {
    private $radius;
    private $area;

    public function __construct($radius) {
      $this->radius = $radius;
    }

    public function getArea() {
      $this->area = $this->radius * $this->radius;
      return($this->area);
    }
  }


?>
