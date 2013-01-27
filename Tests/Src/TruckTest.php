<?php
class TruckTest extends \PHPUnit_Framework_TestCase
{	
	/**
     * Instantiate two styles of truck to test
     * a regular cab and extended cab
     */
    public function setUp() {
		$this->extendedCab = new Truck\Truck;
        $this->regularCab = new Truck\Truck;
		$this->extendedCab->setStyle ("extndedcab");
    }
    /**
	 * Destroy both truck instances 
     */
    public function tearDown() {
        unset($this->regularCab);
        unset($this->extendedCab);
    }

    /**
	 * verify that the Honk function returns
	 * an empty string for both types of car 
     */
    public function testHonk( ) {
        $this->assertSame( $this->extendedCab->honk(),"");
        $this->assertSame( $this->regularCab->honk(),"");
    }

    /**
	 * verify that the DoorCount function returns
	 * 2 for a car with tudor style and 
	 * 4 for non tudor 
     */
    public function testDoorCount( ) {
        $this->assertSame( $this->extendedCab->getNumberOfDoors(),4);
        $this->assertSame( $this->regularCab->getNumberOfDoors(),2);
    }    
}
?>
