<?php
App::uses('AppController', 'Controller');

class PedidosController extends AppController
{

	public $paginate = array(
		'fields' => array('Pedido.id', 'Pedido.cliente', 'Pedido.pedido', 'Pedido.data', 'Pedido.observacao', 'Pedido.mesa'),
		'conditions' => array(),
		'limit' => 10,
		'order' => array('Pedido.data' => 'asc')
	);

    public function setPaginateConditions() {
        $cliente = '';
        if ($this->request->is('post')) {
            $cliente = $this->request->data['Pedido']['cliente'];
            $this->Session->write('Pedido.cliente', $cliente);
        } else {
            $cliente = $this->Session->read('Pedido.cliente');
            $this->request->data('Pedido.cliente', $cliente);
        }
        if (!empty($cliente)) {
            $this->paginate['conditions']['Pedido.cliente LIKE'] = trim($this->request->data['Pedido']['cliente']) . '%';
        }
    }

	public function add()
	{
		parent::add();
		$this->setPedidos();
	}

	public function getEditData($id)
	{
		$this->setPedidos();
		$fields = array('Pedido.id', 'Pedido.cliente', 'Pedido.pedido', 'Pedido.data', 'Pedido.observacao', 'Pedido.mesa');
		$conditions = array('Pedido.id' => $id);

		return $this->Pedido->find('first', compact('fields', 'conditions'));
	}

	public function view($id = null)
	{
		parent::view($id);
		$this->setPedidos();
	}

}
