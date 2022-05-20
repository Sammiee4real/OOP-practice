<?php
  
  //Static Properties and properties use double colon
  class Car
  {
      private $color = "yellow";
      private $weight = 4000;
      static private $availableColors = [
          'red',
          'blue',
          'orange',
      ];
      static  $counter = 0;
      public  $myCounter = 0;

      public function __construct()
      {
        $this->myCounter++;
        Car::$counter++;
      }

      static public function getAvailableColors()
      {
        return self::$availableColors;     
      }
  }

  $colors = Car::getAvailableColors();
  foreach($colors as $color)
  {
    echo $color.PHP_EOL;
  }


// $car = new Car();
// echo Car::$counter.' My Counter: '.$car->myCounter.PHP_EOL;

// $car2 = new Car();
// echo Car::$counter.' My Counter: '.$car2->myCounter.PHP_EOL;

// $car3 = new Car();
// echo Car::$counter.' My Counter: '.$car3->myCounter.PHP_EOL;

?>