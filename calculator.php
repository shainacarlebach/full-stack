<?php
class calculator {
      private $x;
      private $y;
      

    function __construct($num1, $num2) {
        $this->x=$num1;
        $this->y=$num2;
            }

    function add() {
        return $this->x + $this->y;
    }   

    function minus() {
        if($this->x>=1)
        return $this->x- $this->y;
    }

    function multiply() {
     return  $this->x* $this->y;
    }
     
    function divide() {
        if ($this->y==0)
            return"cannot divide by zero";
               return  $this->x /$this->y;
     
     }
    
    function modulus(){
        if ($this->x>=1)
            return"number must be greater than 1";
        return $this->x% $this->y;
    }
}
//echo $sum->plus()
//echo $sum->minus()
//echo $sum->divide()
//echo $sum->multiply)