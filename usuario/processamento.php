<?php
include_once 'Usuario.php';

$usuario = new Usuario();
//print_r($_POST);echo'<br>';
//print_r($_GET);die;

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
    case 'verificar_sigla':
        $existe = $usuario->existeSigla($_GET['id_usuario']);

        if ($existe){
            echo "A USUARIO {$_GET['id_usuario']} já existe informe outra.";
        }
        die;
        break;
    case 'verificar_nome':
        $existe = $usuario->existeNome($_GET['nome']);

        if ($existe){
            echo "O nome {$_GET['nome']} já existe informe outra.";
        }
        die;
        break;
}

header('location: index.php');