<?php
App::uses('AppModel', 'Model');
/**
 * ActividadesEvento Model
 *
 * @property Evento $Evento
 * @property Actividade $Actividade
 */
class ActividadesEvento extends AppModel {

	public $displayField = 'estado';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'evento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'actividade_id' => array(
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
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'evento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Actividade' => array(
			'className' => 'Actividade',
			'foreignKey' => 'actividade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
