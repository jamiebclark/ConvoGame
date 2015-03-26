<?php
class WorldsController extends AppController {
	public $name = 'Worlds';

	public function admin_index() {
		//$this->layout = 'admin/index';
		$worlds = $this->paginate();
		$this->set(compact('worlds'));
	}

	public function admin_add() {
		$this->Crud->create();
	}

	public function admin_view($id = null) {
		$this->Crud->read($id);
	}

	public function admin_edit($id = null) {
		$this->Crud->update($id);
	}

	public function admin_delete($id = null) {
		$this->Crud->delete($id);
	}
}