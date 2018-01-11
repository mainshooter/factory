<?php

  class Circle {
    private $radius;
    private $area;


    public function __construct($radius) {
      $this->radius = $radius;
    }

    public function getArea() {
      $this->area = ($this->radius * $this->radius) * pi();
      return($this->area);
    }

  }


?>
