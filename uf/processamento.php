<?php
include_once 'Uf.php';

if(!empty($_POST['acao'])){
    $uf = new Uf($_POST);
    switch ($_POST['acao']) {
        case 'salvar':
            $uf->inserir();
            break;

        case 'alterar':
            $uf->alterar();
            break;
    }

}

elseif(!empty($_GET['acao'])){
    $_GET['nome'] = 'nome';
    $uf = new Uf($_GET);
    switch ($_GET['acao']){
        case 'excluir':
            $uf->excluir();
            break;
    }
}
else{}

header('location: index.php');
die();