<?php
App::uses('AppModel', 'Model');
/**
 * Propiedade Model
 *
 * @property Recurso $Recurso
 * @property RecursoTipo $RecursoTipo
 */
class Propiedade extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Recurso' => array(
			'className' => 'Recurso',
			'joinTable' => 'propiedades_recursos',
			'foreignKey' => 'propiedade_id',
			'associationForeignKey' => 'recurso_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'RecursoTipo' => array(
			'className' => 'RecursoTipo',
			'joinTable' => 'propiedades_recurso_tipos',
			'foreignKey' => 'propiedade_id',
			'associationForeignKey' => 'recurso_tipo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
