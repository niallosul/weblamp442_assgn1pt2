<?php
class CarTest extends \PHPUnit_Framework_TestCase
{	
	/**
     * Instantiate two styles of car to test
     * a two door car and a four door
     */
    public function setUp() {
		$this->fourdoorCar = new \Car\Car;
		$this->tudorCar = new \Car\Car;
		$this->tudorCar->setStyle("tudor");
    }
    /**
	 * Destroy both car instances 
     */
    public function tearDown() {
		unset($this->tudorCar);
		unset($this->fourdoorCar);
    }

    /**
	 * verify that the Honk function returns
	 * an empty string for both types of car 
     */
    public function testHonk( ) {
		$this->assertSame( $this->tudorCar->honk(),"");
		$this->assertSame( $this->fourdoorCar->honk(),"");
    }

    /**
	 * verify that the DoorCount function returns
	 * 2 for a car with tudor style and 
	 * 4 for non tudor 
     */
    public function testDoorCount( ) {
		$this->assertSame( $this->tudorCar->getNumberOfDoors(),2);
		$this->assertSame( $this->fourdoorCar->getNumberOfDoors(),4);
    }    
}
?>
