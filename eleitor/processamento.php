<?php
/**
 * Processando os dados de Eleitor
 * 
 */
include_once 'Eleitor.php';

$eleitor = new eleitor();

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

        if ($existe) {
            if ($existe > 1) {
                echo "<div class='alert'><p>Já existem {$existe} eleitores com o titulo {$_GET['titulo']}, informe outro</p></div>";
            } else {
                echo "<div class='alert'><p>Já existe {$existe} eleitor com o titulo {$_GET['titulo']}, informe outro</p></div>";
            }
        }

        die;
        break;
    case 'verificar_nome':
        $existe = $eleitor->existeNome($_GET['nome']);

        if ($existe) {
            if ($existe > 1) {
                echo "<div class='alert'><p>Já existem {$existe} eleitores com o nome {$_GET['nome']}, informe outro</p></div>";
            } else {
                echo "<div class='alert'><p>Já existe {$existe} eleitor com o nome {$_GET['nome']}, informe outro</p></div>";
            }
        }

        die;
        break;
}

header('location: index.php');