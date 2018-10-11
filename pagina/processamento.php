<?php
include_once 'Pagina.php';

$pagina = new Pagina();
//print_r($_POST);echo'<br>';
//print_r($_GET);die;

switch ($_GET['acao']) {
    case 'salvar':
        if (!empty($_POST['id_pagina'])) {
//            print_r($_POST);die;
            $pagina->alterar($_POST);
        } else {
//            print_r($_POST);die;
            $pagina->inserir($_POST);
        }
        break;
    case 'excluir':
        $pagina->excluir($_GET['id_pagina']);
        break;
    case 'verificar_sigla':
        $existe = $pagina->existeSigla($_GET['id_pagina']);

        if ($existe){
            echo "A PAGINA {$_GET['id_pagina']} já existe informe outra.";
        }
        die;
        break;
    case 'verificar_nome':
        $existe = $pagina->existeNome($_GET['nome']);

        if ($existe){
            echo "O nome {$_GET['nome']} já existe informe outra.";
        }
        die;
        break;
}

header('location: index.php');