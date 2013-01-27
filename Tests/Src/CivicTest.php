<?php
class CivicTest extends \PHPUnit_Framework_TestCase
{	
	/**
     * Instantiate an instance of Civic
     */
    public function setUp() {
		$this->civic = new \Civic\Civic;
    }
    /**
	 * Destroy the instance when done with tests 
     */
    public function tearDown() {
        unset($this->civic);
    }

    /**
	 * verify that the Honk function returns
	 * a string equal to 'honk honk' 
     */
    public function testHonk( ) {
        $this->assertSame( $this->civic->honk(),"honk honk");
    }

    /**
	 * verify that the DoorCount function returns
	 * 4 for a Civic 
     */
    public function testDoorCount( ) {
        $this->assertSame( $this->civic->getNumberOfDoors(),4);
    }    
}
?>
