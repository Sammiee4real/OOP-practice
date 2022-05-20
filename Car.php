<?php
  class Car
  {
      public $weight; //example of properties of the class
      public $color;
      private $year;

      public function setYear($user_year)
      {
        $this->year = $user_year;
      }

      public function getYear(){
        return $this->year;
      }
  }
  $myCar = new Car(); //object wc is an instance from the class
  // $myCar->color = 'green';
  $myCar->setYear('2090');
  echo $myCar->color;
  echo $myCar->getYear();
?>