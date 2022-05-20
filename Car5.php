<?php
  
  //Visual studio getters and setters methods package
  class Car
  {
      private $weight = 58; //example of properties of the class
      private $color = "yellow";
      private $year;




      /**
       * Get the value of year
       */ 
      public function getYear()
      {
            return $this->year;
      }

      /**
       * Set the value of year
       *
       * @return  self
       */ 
      public function setYear($year)
      {
            $this->year = $year;
      }

      /**
       * Get the value of color
       */ 
      public function getColor()
      {
            return $this->color;
      }

      /**
       * Set the value of color
       *
       * @return  self
       */ 
      public function setColor($color)
      {
            $this->color = $color;

            return $this;
      }
  }

?>