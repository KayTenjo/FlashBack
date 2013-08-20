<?php
App::uses('AppController', 'Controller');
/**
 * ClienteTipos Controller
 *
 * @property ClienteTipo $ClienteTipo
 */
class ClienteTiposController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClienteTipo->recursive = 0;
		$this->set('clienteTipos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClienteTipo->exists($id)) {
			throw new NotFoundException(__('Invalid cliente tipo'));
		}
		$options = array('conditions' => array('ClienteTipo.' . $this->ClienteTipo->primaryKey => $id));
		$this->set('clienteTipo', $this->ClienteTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClienteTipo->create();
			if ($this->ClienteTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente tipo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClienteTipo->exists($id)) {
			throw new NotFoundException(__('Invalid cliente tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClienteTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClienteTipo.' . $this->ClienteTipo->primaryKey => $id));
			$this->request->data = $this->ClienteTipo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ClienteTipo->id = $id;
		if (!$this->ClienteTipo->exists()) {
			throw new NotFoundException(__('Invalid cliente tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ClienteTipo->delete()) {
			$this->Session->setFlash(__('Cliente tipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cliente tipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
