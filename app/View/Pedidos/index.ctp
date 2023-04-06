<?php
$this->extend('/Common/index');

$this->assign('title', 'Pedidos');

$searchFields = $this->Form->input('Pedido.cliente', array(
    'required' => false,
    'label' => array('text' => 'Cliente', 'class' => 'sr-only'),
    'class' => 'form-control mb-2 mr-sm-2',
    'div' => false,
    'placeholder' => 'Cliente...'
));
$this->assign('searchFields', $searchFields);

$titulos = array('Cliente', 'Pedido', 'Data', 'Hora', 'Observação', 'Mesa', 'Alterar Pedido');
$tableHeaders = $this->Html->tableHeaders($titulos);
$this->assign('tableHeaders', $tableHeaders);

$detalhe = array();
foreach ($pedidos as $pedido) {
	$editLink = $this->Js->link('Alterar Pedido', '/pedidos/edit/'. $pedido['Pedido']['id'], array('update' => '#content', 'class' => 'btn btn-danger  float-right'));
    $viewLink = $this->Js->link($pedido['Pedido']['cliente'], '/pedidos/view/' . $pedido['Pedido']['id'], array('update' => '#content'));
    $detalhe[] = array(
        $viewLink,
		$pedido['Pedido']['pedido'],
		date('d/m/Y', strtotime($pedido['Pedido']['data'])),
		date('H:i:s', strtotime($pedido['Pedido']['data'])),
		$pedido['Pedido']['observacao'],
		$pedido['Pedido']['mesa'],
        $editLink
    );
}
$tableCells = $this->Html->tableCells($detalhe);
$this->assign('tableCells', $tableCells);


