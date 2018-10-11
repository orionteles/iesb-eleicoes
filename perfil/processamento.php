<?php
include_once 'Perfil.php';

$perfil = new Perfil();
//print_r($_POST);echo'<br>';
//print_r($_GET);die;

switch ($_GET['acao']) {
    case 'salvar':
        if (!empty($_POST['id_perfil'])) {
//            print_r($_POST);die;
            $perfil->alterar($_POST);
        } else {
//            print_r($_POST);die;
            $perfil->inserir($_POST);
        }
        break;
    case 'excluir':
        $perfil->excluir($_GET['id_perfil']);
        break;

}

header('location: index.php');