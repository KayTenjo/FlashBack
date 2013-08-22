<?php
App::uses('AppModel', 'Model');
/**
 * Vehiculo Model
 *
 * @property VehiculoTipo $VehiculoTipo
 * @property Bitacora $Bitacora
 */
class Vehiculo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'patente_veh' => array(
			'patenteValida' => array(
				'rule' => '/([B-D]|[F-H]|[J-N]|[P-T]|[V-Z]){4}[0-9]{2}/',
				'message' => 'Ingrese una patente válida, en mayúsculas, sin guiones ni espacios.',
				'required' => true,
			),
		),
		'modelo_veh' => array(
			'req' => array(
				'rule' => 'alphanumeric',
				'required' => true,
				'message' => 'Ingrese sólo caracteres alfanuméricos'
			),
		),
		'marca_veh' => array(
			'req' => array(
				'rule' => 'alphanumeric',
				'required' => true,
				'message' => 'Ingrese sólo caracteres alfanuméricos'
			),
		),
		'vehiculo_tipo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'VehiculoTipo' => array(
			'className' => 'VehiculoTipo',
			'foreignKey' => 'vehiculo_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Bitacora' => array(
			'className' => 'Bitacora',
			'foreignKey' => 'vehiculo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}