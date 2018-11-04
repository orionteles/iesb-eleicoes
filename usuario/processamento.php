<?php
include_once 'Usuario.php';
session_start();
$usuario = new Usuario();

switch ($_GET['acao']) {
    case 'salvar':
        if (!empty($_POST['id_usuario'])) {
//            print_r($_POST);die;
            $usuario->alterar($_POST);
        } else {
//            print_r($_POST);die;
            $usuario->inserir($_POST);
        }
    break;
    case 'excluir':
        $usuario->excluir($_GET['id_usuario']);
    break;
    case 'logar':
        $usuario->logar($_POST);
    break;
}

header('location: index.php');