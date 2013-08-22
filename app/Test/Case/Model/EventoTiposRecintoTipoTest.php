<?php
App::uses('EventoTiposRecintoTipo', 'Model');

/**
 * EventoTiposRecintoTipo Test Case
 *
 */
class EventoTiposRecintoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evento_tipos_recinto_tipo',
		'app.recinto_tipo',
		'app.solicitud_cotizacione',
		'app.estado',
		'app.evento_tipo',
		'app.evento',
		'app.cliente',
		'app.cliente_tipo',
		'app.recinto',
		'app.estado_evento',
		'app.itinerario_participante',
		'app.participante',
		'app.participante_tipo',
		'app.participante_tipos_solicitud_cotizacione',
		'app.evento_tipos_participante_tipo',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.recurso',
		'app.recurso_tipo',
		'app.evento_tipos_recurso_tipo',
		'app.propiedade',
		'app.medida',
		'app.medidas_propiedade',
		'app.propiedades_recurso_tipo',
		'app.propiedades_recurso',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.eventos_recurso',
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
		$this->EventoTiposRecintoTipo = ClassRegistry::init('EventoTiposRecintoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventoTiposRecintoTipo);

		parent::tearDown();
	}

}