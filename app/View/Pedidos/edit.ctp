<?php
$this->extend('/Common/form');

$this->assign('title', 'Alterar Pedido');

$formFields = $this->element('formCreate');
$formFields .= $this->Form->hidden('Pedido.id');
$formFields .= $this->Form->input('Pedido.cliente');
$formFields .= $this->Form->input('Pedido.pedido');
$formFields .= $this->Form->input('Pedido.mesa');
$formFields .= $this->Form->input('Pedido.observacao');

$this->assign('formFields', $formFields);
