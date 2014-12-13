<?php
/**
 * LocationFixture
 *
 */
class LocationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'latitude' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '16,3', 'unsigned' => false),
		'longitude' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '16,3', 'unsigned' => false),
		'user' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'latitude' => 1,
			'longitude' => 1,
			'user' => 'Lorem ipsum dolor sit amet'
		),
	);

}
