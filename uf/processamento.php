<?php
include_once 'Uf.php';

$uf = new Uf();

switch ($_GET['acao']) {
    case 'salvar':
        if (!empty($_POST['id_uf'])) {
//            print_r($_POST);die;
            $uf->alterar($_POST);
        } else {
//            print_r($_POST);die;
            $uf->inserir($_POST);
        }
        break;
    case 'excluir':
        $uf->excluir($_GET['id_uf']);
        break;
    case 'verificar_sigla':
        $existe = $uf->existeSigla($_GET['id_uf']);

        if($existe){
            echo "A UF {$_GET['id_uf']} já existe";
        }
        die;
    case 'verificar_nome':
        $existe = $uf->existeNome($_GET['nome']);

        if($existe){
            echo '<div class="alert alert-success">
                <strong>Atenção!</strong>
                <p>A UF Já existe</p>
            </div>';
        }
        die;
}

header('location: index.php');