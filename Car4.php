<?php
  
  //Object assignment and cloning
  class Car
  {
      public $weight = 58; //example of properties of the class
      public $color = "yellow";
      public $year;

      public function __construct($color = null,$weight = null){
          if($color != null){
            $this->color = $color;
          }
          if($weight != null){
            $this->weight = $weight;
          }
      }

    //   public function getColor(){
    //       return $this->color;
    //   }

      public function __destruct(){
        echo PHP_EOL.'Destructor: '.$this->color.PHP_EOL;
     }
  }

    $car = new Car('yellow',66); //object wc is an instance from the class
    $car2 = new Car('green',66); //object wc is an instance from the class 
    //$car;
    
    echo $car->getColor().PHP_EOL;
    echo $car2->getColor();

    unset($myCar);

    sleep(10);


?>