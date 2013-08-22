<?php
App::uses('AppModel', 'Model');
/**
 * Proveedore Model
 *
 * @property Recurso $Recurso
 * @property RecursoTipo $RecursoTipo
 */
class Proveedore extends AppModel {

	public $validate = array(
		'nombre_pro' => array(
			'req' => array(
				'rule'    => array('minLength', 1),
        			'message' => 'Ingrese un nombre.'
			),
		),
		'desc_par' => array(
			'rule' => 'alphaNumeric',
			'allowEmpty' => true,
		),
		'ranking_pro' => array(
			'rule' => array('range', -1 , 6),
			'message' => 'Ingrese un ranking desde 0 a 5.'
		),
		'rut_pro' => array(
			'formato' => array(
				'rule' => '^[1-9][0-9]{0,7}[-][0-9kK]{1}^',
				'message' => 'Ingrese el rut sin puntos con guión.'
			),
			'digitoVerificador' => array(
				'rule' => 'verificarRut',
				'message' => 'Rut no válido.',
			),
			'sinRepetir' => array(
				'rule' => 'isUnique',
				'on' => 'create',
			)
		),

		'fono_pro'=> array(
			'rule' => array('range', 99999, 57000000000),
			'message' => 'Ingrese un número de teléfono válido.',
			'required' => true,
		),
		'correo_pro' => array(
			'rule' => 'email',
			'message' => 'Ingrese un correo electrónico válido',
			'allowEmpty' => true,
		)
		'fono_conta'=> array(
			'rule' => array('range', 99999, 57000000000),
			'message' => 'Ingrese un número de teléfono válido.',
			'allowEmpty' => true,
		),
		'correo_conta' => array(
			'rule' => 'email',
			'message' => 'Ingrese un correo electrónico válido',
			'allowEmpty' => true,
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public function verificarRut($check){
		$rut = explode('-', array_values($check)[0]);
		$r = $rut[0];
		$s=1;
		for($m=0;$r!=0;$r/=10)
			$s=($s+$r%10*(9-$m++%6))%11;
		$dv = chr($s?$s+47:75);
		return (strcasecmp($dv, $rut[1]) == 0 );
	}
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Recurso' => array(
			'className' => 'Recurso',
			'foreignKey' => 'proveedore_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'RecursoTipo' => array(
			'className' => 'RecursoTipo',
			'joinTable' => 'proveedores_recurso_tipos',
			'foreignKey' => 'proveedore_id',
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