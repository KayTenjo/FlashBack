<?php
App::uses('ProveedoresRecursoTipo', 'Model');

/**
 * ProveedoresRecursoTipo Test Case
 *
 */
class ProveedoresRecursoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proveedores_recurso_tipo',
		'app.proveedore',
		'app.recurso',
		'app.recurso_tipo',
		'app.evento_tipo',
		'app.evento',
		'app.recinto',
		'app.recinto_tipo',
		'app.solicitud_cotizacione',
		'app.estado',
		'app.cliente',
		'app.cliente_tipo',
		'app.par_tip_sol_cot',
		'app.participante_tipo',
		'app.participante',
		'app.evento_tipos_participante_tipo',
		'app.evento_tipos_recinto_tipo',
		'app.estado_evento',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.recursos_por_evento',
		'app.itinerario_participante',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.evento_tipos_recurso_tipo',
		'app.propiedade',
		'app.propiedades_recurso',
		'app.propiedades_recurso_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProveedoresRecursoTipo = ClassRegistry::init('ProveedoresRecursoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProveedoresRecursoTipo);

		parent::tearDown();
	}

}
