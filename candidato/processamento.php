<?php
/**
 * Processando os dados de Candidato
 * 
 */
include_once 'Candidato.php';

$candidato = new Candidato();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_candidato'])){
            $candidato->alterar($_POST);
        } else {
            $candidato->inserir($_POST);
        }
        break;
    case 'excluir':
        $candidato->excluir($_GET['id_candidato']);
        break;
}

header('location: index.php');