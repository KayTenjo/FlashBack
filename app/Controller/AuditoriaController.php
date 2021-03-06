<?php
App::uses('AppController', 'Controller');
/**
 * Auditoria Controller
 *
 * @property Auditorium $Auditorium
 * @property PaginatorComponent $Paginator
 */
class AuditoriaController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Auditorium->recursive = 0;
		$this->set('auditoria', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Auditorium->exists($id)) {
			throw new NotFoundException(__('Invalid auditorium'));
		}
		$options = array('conditions' => array('Auditorium.' . $this->Auditorium->primaryKey => $id));
		$this->set('auditorium', $this->Auditorium->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Auditorium->create();
			if ($this->Auditorium->save($this->request->data)) {
				$this->Session->setFlash(__('The auditorium has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The auditorium could not be saved. Please, try again.'), 'ferror');
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
		if (!$this->Auditorium->exists($id)) {
			throw new NotFoundException(__('Invalid auditorium'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Auditorium->save($this->request->data)) {
				$this->Session->setFlash(__('The auditorium has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The auditorium could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('Auditorium.' . $this->Auditorium->primaryKey => $id));
			$this->request->data = $this->Auditorium->find('first', $options);
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
		$this->Auditorium->id = $id;
		if (!$this->Auditorium->exists()) {
			throw new NotFoundException(__('Invalid auditorium'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Auditorium->delete()) {
			$this->Session->setFlash(__('Auditorium deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Auditorium was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
