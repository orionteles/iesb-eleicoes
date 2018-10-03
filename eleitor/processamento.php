<?php
/**
 * Processando os dados de Eleitor
 *
 */
include_once 'Eleitor.php';
include_once '../municipio/Municipio.php';

$eleitor = new Eleitor();

switch ($_GET['acao']){
    case 'salvar':

        if(!empty($_POST['id_eleitor'])){
            $eleitor->alterar($_POST);
        } else {
            $eleitor->inserir($_POST);
        }
        break;
    case 'excluir':
        $eleitor->excluir($_GET['id_eleitor']);
        break;
    case 'verificar_titulo':
        $existe = $eleitor->existeTitulo($_GET['titulo']);

        if($existe){
            echo '<div class="alert alert-danger">
                <strong>Atenção!</strong>
                <p>O Título informado já existe</p>
            </div>';
        }
        die;
    case 'verificar_nome':
        $qtd = $eleitor->existeNome($_GET['nome']);

        if($qtd){
            echo '<div class="alert alert-warning">
                <strong>Atenção!</strong>
                <p>Existem ' . $qtd . ' nomes chamado ' . $_GET['nome'] . '</p>
            </div>';
        }
        die;
    case 'carregar_municipio':
        $municipios = (new Municipio())->recuperarDados($_GET['id_uf']);
        echo json_encode($municipios);
        die;
}

header('location: index.php');