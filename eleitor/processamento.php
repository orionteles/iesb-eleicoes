<?php
/**
 * Processando os dados de Eleitor
 * 
 */
include_once 'Eleitor.php';

$eleitor = new eleitor();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_eleitor'])){
            $eleitor->alterar($_POST);
        } else {
            $eleitor->inserir($_POST);
        }
        break;
    case 'excluir':
        $eleitor->excluir($_GET['id_eleitor']);
        break;
}

header('location: index.php');