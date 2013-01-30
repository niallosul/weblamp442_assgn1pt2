<?php
  namespace Truck;
  /**
  * Class to represent a Truck 
  */
  class Truck extends \Vehicle\Vehicle implements \vehicleInterface
  {
    /**
	* Returns 4 doors for objects with style = extndedcab 
	* and 2 for any others  
	*/
     public function getNumberOfDoors() {
      if ($this->getStyle() == "extndedcab")
        return (4);
      else 
        return (2);    
    }

    /**
	* Returns an empty string  
	*/
    public function honk() {
       return ("");
    }   

  }
?>