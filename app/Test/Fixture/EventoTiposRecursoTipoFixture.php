<?php
/**
 * EventoTiposRecursoTipoFixture
 *
 */
class EventoTiposRecursoTipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'evento_tipo_id' => array('type' => 'integer', 'null' => false),
		'recurso_tipo_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('evento_tipo_id', 'recurso_tipo_id')),
			'evento_tipos_recurso_tipos_pk' => array('unique' => true, 'column' => array('evento_tipo_id', 'recurso_tipo_id')),
			'evento_tipos_id6' => array('unique' => false, 'column' => 'evento_tipo_id'),
			'recurso_tipos_id4' => array('unique' => false, 'column' => 'recurso_tipo_id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'evento_tipo_id' => 1,
			'recurso_tipo_id' => 1
		),
	);

}
