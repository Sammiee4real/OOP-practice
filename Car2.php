<?php
  class Car
  {
      public $weight; //example of properties of the class
      private $color = 'null';
      private $year;
      private $available_colors = ['green','red','blue'];

      public function setYear($user_year)
      {
        $this->year = $user_year;
      }

      public function getYear(){
        return $this->year;
      }

      public function setColor($user_color)
      {
        if(in_array($user_color,$this->available_colors)){
            $this->color = $user_color;
        } 
      }

      public function getColor(){
        
        return $this->color;
      }
  }
  $myCar = new Car(); //object wc is an instance from the class
  $myCar->setColor('red');
  echo $myCar->getColor();
?>