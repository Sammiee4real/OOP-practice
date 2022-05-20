<?php
  
  //Object assignment and cloning
  class Car
  {
      public $weight; //example of properties of the class
      public $color;
      public $year;
  }

  $car = new Car(); //object wc is an instance from the class
  $car2 =  & $car;
  $car = null;
  //   $car2 = clone  $car;
  var_dump($car2);


  //when you clone an object, no matter what you alteration you do,
  // it is still a pointer to the original class: 
  //so alterations wont work.

  //the other option is using a reference

?>