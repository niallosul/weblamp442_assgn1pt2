<?php

/**
 * Extend the Vehicle abstract class 
 */
class testCar extends \Vehicle\Vehicle
  {
	  public function getNumberOfDoors() {
        return 4;    
    }
}

class VehicleTest extends \PHPUnit_Framework_TestCase
{	
    /**
	 * Create testCar instance before each test 
     */
    public function setUp() {
		$this->testCar = new testCar;
    }
    /**
	 * Destroy testCar instance after each test 
     */
    public function tearDown() {
        unset($this->extendedCab);
    }

    /**
	 * verify that the setter and getter function
	 * work correctly for each attribute
     */
    public function testSetGets( ) {
 		$this->testCar->setYear ("2013");
 		$this->testCar->setMake ("Honda");
 		$this->testCar->setModel ("Accord");
 		$this->testCar->setStyle ("tudor");

        $this->assertSame( $this->testCar->getYear(),"2013");
        $this->assertSame( $this->testCar->getMake(),"Honda");
        $this->assertSame( $this->testCar->getModel(),"Accord");
        $this->assertSame( $this->testCar->getStyle(),"tudor");
    }


    /**
	 * verify that the DoorCount function returns
	 * 4 for testCar  
     */
    public function testDoorCount( ) {
        $this->assertSame( $this->testCar->getNumberOfDoors(),4);
    }    
}
?>
