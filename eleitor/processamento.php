<?php
include_once 'Partido.php';

$partido = new Partido();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_partido'])){
            $partido->alterar($_POST);
        } else {
            $partido->inserir($_POST);
        }
        break;
    case 'excluir':
        $partido->excluir($_GET['id_partido']);
        break;
}

header('location: index.php');