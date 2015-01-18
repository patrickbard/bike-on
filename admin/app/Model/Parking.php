<?php
App::uses('AppModel', 'Model');
/**
 * Parking Model
 *
 */
class Parking extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'local' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
