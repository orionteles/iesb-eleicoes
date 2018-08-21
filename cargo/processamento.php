<?php
/**
 * Processando os dados de Eleitor
 * 
 */
include_once 'Cargo.php';

$cargo = new Cargo();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_cargo'])){
            $cargo->alterar($_POST);
        } else {
//print_r($_POST);die;
            $cargo->inserir($_POST);
        }
        break;
    case 'excluir':
        $cargo->excluir($_GET['id_cargo']);
        break;
}

header('location: index.php');