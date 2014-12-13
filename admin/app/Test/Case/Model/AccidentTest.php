<?php
App::uses('Accident', 'Model');

/**
 * Accident Test Case
 *
 */
class AccidentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.accident'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Accident = ClassRegistry::init('Accident');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Accident);

		parent::tearDown();
	}

}
