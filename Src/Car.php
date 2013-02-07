<?php
  namespace Car;
  /**
  * Another Class to represent a Car 
  */
  class Car extends \Vehicle\Vehicle implements \vehicleInterface
  {
    /**
	* Returns 2 for objects with style = tudor 
	* and 4 for any others  
	*/
    public function getNumberOfDoors() {
      if ($this->getStyle() == 'tudor')
        return 2;
      else 
        return 4;    
    }

    /**
	* Returns an empty string  
	*/
    public function honk() {
         return ("");
    } 
}       
?>