<?php
/**
 * Processando os dados do Voto
 * 
 */
 
include_once 'Voto.php';
$voto = new Voto();
if ($_POST['tipo'] == -1) {
switch ($_GET['acao']){
	
		case 'salvar':
			if(!empty($_POST['id_voto'])){
				$voto->alterar($_POST);
			} else {
				$voto->inserir($_POST);
			}
			break;
		case 'excluir':
			$voto->excluir($_GET['id_voto']);
			break;
	}
}
//header('location: index.php');