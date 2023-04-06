<?php
$path = APP . 'View' . DS . 'Common' . DS;
$settings = array(
    'templateFile' => array(
        'config' => $path . 'report-config.xml', /*comum */
        'header' => $path . 'report-header.xml', /* comum */
        'columnTitles' => $path . 'report-pedidos-column-titles.xml', /* muda */
        'body' => $path . 'report-pedidos-body.xml', /* muda */
        'sumary' => $path . 'report-sumary.xml', /* comum */
        'footer' => $path . 'report-footer.xml' /* comum */
    ),
    'records' => $pedidos,
    'header' => array('title' => 'Pedidos Cadastrados')
);

echo $this->Report->create($settings);
