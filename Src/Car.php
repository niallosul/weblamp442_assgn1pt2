<?php
  namespace Car;
  class Car extends \Vehicle\Vehicle implements \vehicleInterface
  {
	
    public function getNumberOfDoors() {
      if ($this->getStyle() == 'tudor')
        return 2;
      else 
        return 4;    
    }

    public function honk() {
         return ("");
    } 
}       
?>