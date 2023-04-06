<?php
$this->extend('/Common/form');

$this->assign('title', 'Visualizar Pedido');



$formFields = $this->element('formCreate');
$formFields .= $this->Form->input('Pedido.cliente');
$formFields .= $this->Form->input('Pedido.pedido');
$formFields .= $this->Form->input('Pedido.mesa');
$formFields .= $this->Form->input('Pedido.observacao');
$formFields .= $this->Form->input('Pedido.data');

$this->assign('formFields', $formFields);
$settings = array(
    'orientation' => 'P',
    'templateFile' => 'template.xml',
    'records' => $records
);

$this->Report->create($settings);
