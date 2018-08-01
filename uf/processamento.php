<?php
include_once 'Uf.php';

$uf = new Uf();

switch ($_GET['acao']) {
    case 'salvar':
        if (!empty($_POST['id_uf'])) {
//            print_r($_POST);die;
            $uf->alterar($_POST);
        } else {
            $uf->inserir($_POST);
        }
        break;
    case 'excluir':
        $uf->excluir($_GET['id_uf']);
        break;
}

header('location: index.php');