<?php
//    NOTICED THAT CONSTRUCTOR CANNOT BE RETURNED DIRECTLY FROM CLASS ????????????


  //Constants are associated to a class: used when you want to have an immutable variable(variable that SHOULD NEVER change)
  class Car
  {
      public $color;
      public $manufacturer;
     
      const MANUFACTURER_BMW = 'BMW';
      const MANUFACTURER_TESLA = 'tesla';
      const MANUFACTURER_MERCEDES = 'mercedes';

      const COLOR_RED = 'red';
      const COLOR_GREEN = 'green';


      public function __construct($color,$manufacturer)
      {
        $this->color = $color;   
        $this->manufacturer = $manufacturer;   
        echo "Construct: ".$this->color.PHP_EOL;
      }

      public function __toString()
      {
        return  'This is the color: '.$this->color.' and This is the manufacturer: '.$this->manufacturer;
      }

     
  }

  $car = new Car( Car::COLOR_GREEN , Car::MANUFACTURER_MERCEDES );
  echo $car;
  


// $car = new Car();
// echo Car::$counter.' My Counter: '.$car->myCounter.PHP_EOL;

// $car2 = new Car();
// echo Car::$counter.' My Counter: '.$car2->myCounter.PHP_EOL;

// $car3 = new Car();
// echo Car::$counter.' My Counter: '.$car3->myCounter.PHP_EOL;

?>