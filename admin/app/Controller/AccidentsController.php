<?php
App::uses('AppController', 'Controller');
/**
 * Accidents Controller
 *
 * @property Accident $Accident
 * @property PaginatorComponent $Paginator
 */
class AccidentsController extends AppController {

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
		$this->Accident->recursive = 0;
		$this->set('accidents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Accident->exists($id)) {
			throw new NotFoundException(__('Invalid accident'));
		}
		$options = array('conditions' => array('Accident.' . $this->Accident->primaryKey => $id));
		$this->set('accident', $this->Accident->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Accident->create();
			if ($this->Accident->save($this->request->data)) {
				$this->Session->setFlash(__('The accident has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accident could not be saved. Please, try again.'), 'flash/error');
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
        $this->Accident->id = $id;
		if (!$this->Accident->exists($id)) {
			throw new NotFoundException(__('Invalid accident'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Accident->save($this->request->data)) {
				$this->Session->setFlash(__('The accident has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accident could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Accident.' . $this->Accident->primaryKey => $id));
			$this->request->data = $this->Accident->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Accident->id = $id;
		if (!$this->Accident->exists()) {
			throw new NotFoundException(__('Invalid accident'));
		}
		if ($this->Accident->delete()) {
			$this->Session->setFlash(__('Accident deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Accident was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
