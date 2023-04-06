<?php
class PedidoFixture extends CakeTestFixture {

    public $name = 'Pedido';
    public $import = array ('model' => 'Pedido', 'records' => false);

    public function init() {
        $this->records = array (
            array (
                'cliente' => 'Rafael',
				'pedido' => '1 Lata de Guaraná',
                'mesa' => '2',
                'observacao' => 'Bem Gelada'
            )
        );
        parent::init();
    }
}
