<?php
App::uses('Estado', 'Model');

/**
 * Estado Test Case
 *
 */
class EstadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estado',
		'app.solicitud_cotizacione',
		'app.evento_tipo',
		'app.evento',
		'app.recinto',
		'app.recinto_tipo',
		'app.evento_tipos_recinto_tipo',
		'app.estado_evento',
		'app.cliente',
		'app.cliente_tipo',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.recursos_por_evento',
		'app.recurso',
		'app.recurso_tipo',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.evento_tipos_recurso_tipo',
		'app.propiedade',
		'app.propiedades_recurso',
		'app.propiedades_recurso_tipo',
		'app.itinerario_participante',
		'app.participante',
		'app.participante_tipo',
		'app.par_tip_sol_cot',
		'app.evento_tipos_participante_tipo',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Estado = ClassRegistry::init('Estado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Estado);

		parent::tearDown();
	}

}
