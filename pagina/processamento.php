<?php
include_once 'Pagina.php';

$pagina = new Pagina();

switch ($_GET['acao']) {
    case 'salvar':
        if (!empty($_POST['id_pagina'])) {
            $pagina->alterar($_POST);
        } else {
            $pagina->inserir($_POST);
        }
    break;
    case 'excluir':
        $pagina->excluir($_GET['id_pagina']);
    break;

}

header('location: index.php');