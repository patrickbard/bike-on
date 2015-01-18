<?php
App::uses('Parking', 'Model');

/**
 * Parking Test Case
 *
 */
class ParkingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parking'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Parking = ClassRegistry::init('Parking');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Parking);

		parent::tearDown();
	}

}
