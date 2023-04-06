<?php
$this->extend('/Common/index');

$this->assign('title', 'Usuários');

$searchFields = $this->Form->input('Usuario.nome', array(
    'required' => false,
    'label' => array('text' => 'Nome', 'class' => 'sr-only'),
    'class' => 'form-control mb-2 mr-sm-2',
    'div' => false,
    'placeholder' => 'Nome...'
));

$this->assign('searchFields', $searchFields);

$titulos = array('Nome', 'Login', 'Senha', '' );
$tableHeaders = $this->Html->tableHeaders($titulos);
$this->assign('tableHeaders', $tableHeaders);

$detalhe = array();
foreach ($usuarios as $usuario) {
    $editLink = $this->Js->link('Editar Usuario', '/usuarios/edit/'. $usuario['Usuario']['id'], array('update' => '#content', 'class' => 'btn btn-danger float-right'));
    $viewLink = $this->Js->link($usuario['Usuario']['nome'], '/usuarios/view/' . $usuario['Usuario']['id'], array('update' => '#content'));
    $detalhe[] = array(
        $viewLink,
		$usuario['Usuario']['login'],
		'*********',
        $editLink
    );
}
$tableCells = $this->Html->tableCells($detalhe);
$this->assign('tableCells', $tableCells);
