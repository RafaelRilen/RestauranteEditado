<?php
class PedidoTest extends CakeTestCase {

    public $fixtures = array('app.pedido');
    public $Pedido = null;

    public function setUp(){
        $this->Pedido = ClassRegistry::init('Pedido');

    }

    public function testExisteModel() {
        $this->assertTrue(is_a($this->Pedido, 'Pedido'));
    }


    public function testClienteEmpty() {
        /* preparacao */
        $data = array('Pedido' => array('cliente' => null));

        /* execucao */
        $saved = $this->Pedido->save($data);

        /*  checagem / teste */
        $this->assertFalse($saved);
    }

    public function testPedidoEmpty() {
        /* preparacao */
        $data = array('Pedido' => array('pedido' => null));
        /* execucao */
        $saved = $this->Pedido->save($data);
        /*  checagem / teste */
        $this->assertFalse($saved);
    }


}
?>
