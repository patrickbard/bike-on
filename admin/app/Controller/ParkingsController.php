<?php
App::uses('AppController', 'Controller');
/**
 * Parkings Controller
 *
 * @property Parking $Parking
 * @property PaginatorComponent $Paginator
 */
class ParkingsController extends AppController {

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
		$this->Parking->recursive = 0;
		$this->set('parkings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Parking->exists($id)) {
			throw new NotFoundException(__('Invalid parking'));
		}
		$options = array('conditions' => array('Parking.' . $this->Parking->primaryKey => $id));
		$this->set('parking', $this->Parking->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Parking->create();
			if ($this->Parking->save($this->request->data)) {
				$this->Session->setFlash(__('The parking has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parking could not be saved. Please, try again.'), 'flash/error');
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
        $this->Parking->id = $id;
		if (!$this->Parking->exists($id)) {
			throw new NotFoundException(__('Invalid parking'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Parking->save($this->request->data)) {
				$this->Session->setFlash(__('The parking has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parking could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Parking.' . $this->Parking->primaryKey => $id));
			$this->request->data = $this->Parking->find('first', $options);
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
		$this->Parking->id = $id;
		if (!$this->Parking->exists()) {
			throw new NotFoundException(__('Invalid parking'));
		}
		if ($this->Parking->delete()) {
			$this->Session->setFlash(__('Parking deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Parking was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
