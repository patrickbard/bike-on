<?php
/**
 * ParkingFixture
 *
 */
class ParkingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'latitude' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,7', 'unsigned' => false),
		'longitude' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,7', 'unsigned' => false),
		'local' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'latitude' => '',
			'longitude' => '',
			'local' => 'Lorem ipsum dolor '
		),
	);

}
