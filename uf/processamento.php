<?php
require_once 'Uf.php';

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
    $uf = new Uf($_GET);
    switch ($_GET['acao']){
        case 'excluir':
            $uf->excluir();
            break;
    }
}
else{
    header('location: index.php');
    die(false);
}