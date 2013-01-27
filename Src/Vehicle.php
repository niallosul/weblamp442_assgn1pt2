<?php
namespace Vehicle;

/**
 * Abstract class to represent a vehicle
 */
abstract class Vehicle
{
    /**
     * Number of doors
     * @var int
     */
    protected $_numberOfDoors;
    /**
     * Vehicle Year
     * @var string
     */
    private $year;
    /**
     * Vehicle Make
     * @var string
     */
    private $make;
    /**
     * Vehicle Model
     * @var string
     */
    private $model;
    /**
     * Vehicle style
     * @var string
     */
    private $style;
    

    /**
     * Return the number of doors
     * @return int
     */
    abstract public function getNumberOfDoors();
 
 
 	/**
 	* The following methods are not abstract because they will
 	* apply to every instance of vehicle whereas the abstract methods
 	* will need to be implemented for each instance
 	*/
 	
     /**
     * Set the vehicle year
     */
    public function setYear($useryear) {
      $this->year =  $useryear;
    }
    
	/**
     * Return the vehicle year
     * @return string
     */
    public function getYear() {
      return ($this->year);
    }

    /**
     * Set the make of the vehicle
     */  
    public function setMake($usermake) {
      $this->make =  $usermake;
    }

    /**
     * Return the make of the vehicle
     * @return string
     */    
    public function getMake() {
      return ($this->make);
    }

    /**
     * Set the vehicle model
     */        
    public function setModel($usermodel) {
      $this->model =  $usermodel;
    }
    
    /**
     * Return the model of the vehicle
     * @return string
     */    
    public function getModel() {
      return ($this->model);
    }
    
    /**
     * Set the vehicle style
     */
    public function setStyle($userstyle) {
      $this->style =  $userstyle;
    }

    /**
     * Return the Style of car
     * @return string
     */    
    public function getStyle() {
      return ($this->style);
    }
}
?>