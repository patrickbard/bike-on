<?php
/**
 * AccidentFixture
 *
 */
class AccidentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'unsigned' => false, 'key' => 'primary'),
		'LOG1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 39, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LOG2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 41, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PREDIAL1' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => false),
		'LOCAL' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TIPO_ACID' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LOCAL_VIA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 73, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'QUEDA_ARR' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1),
		'DATA_HORA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DIA_SEM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'FERIDOS' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'FERIDOS_GR' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1),
		'MORTES' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'MORTE_POST' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1),
		'FATAIS' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'AUTO' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'TAXI' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'LOTACAO' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'ONIBUS_URB' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'ONIBUS_MET' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'ONIBUS_INT' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'CAMINHAO' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'MOTO' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'CARROCA' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1),
		'BICICLETA' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'OUTRO' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'TEMPO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NOITE_DIA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'FONTE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'BOLETIM' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'REGIAO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DIA' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'MES' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'ANO' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'FX_HORA' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'CONT_ACID' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1),
		'CONT_VIT' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1),
		'UPS' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'CONSORCIO' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 23, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CORREDOR' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1),
		'LONGITUDE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LATITUDE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1)
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
			'ID' => 1,
			'LOG1' => 'Lorem ipsum dolor sit amet',
			'LOG2' => 'Lorem ipsum dolor sit amet',
			'PREDIAL1' => 1,
			'LOCAL' => 'Lorem ip',
			'TIPO_ACID' => 'Lorem ipsum ',
			'LOCAL_VIA' => 'Lorem ipsum dolor sit amet',
			'QUEDA_ARR' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'DATA_HORA' => 'Lorem ipsum ',
			'DIA_SEM' => 'Lorem ipsum',
			'FERIDOS' => 1,
			'FERIDOS_GR' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'MORTES' => 1,
			'MORTE_POST' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'FATAIS' => 1,
			'AUTO' => 1,
			'TAXI' => 1,
			'LOTACAO' => 1,
			'ONIBUS_URB' => 1,
			'ONIBUS_MET' => 1,
			'ONIBUS_INT' => 1,
			'CAMINHAO' => 1,
			'MOTO' => 1,
			'CARROCA' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'BICICLETA' => 1,
			'OUTRO' => 1,
			'TEMPO' => 'Lorem ip',
			'NOITE_DIA' => 'Lor',
			'FONTE' => 'Lorem ',
			'BOLETIM' => 'Lorem ip',
			'REGIAO' => 'Lorem ipsum do',
			'DIA' => 1,
			'MES' => 1,
			'ANO' => 1,
			'FX_HORA' => 1,
			'CONT_ACID' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'CONT_VIT' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'UPS' => 1,
			'CONSORCIO' => 'Lorem ipsum dolor sit',
			'CORREDOR' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'LONGITUDE' => 'Lorem ip',
			'LATITUDE' => 'Lorem ip'
		),
	);

}
