<?php
require_once '../cabecalho.php';
require_once '../Conexao.php';
$conexao = new Conexao();

$_GET['Op'] = empty($_GET['Op']) ? 'alterar' : 'novo';

switch ($_GET['Op']){
    case 'alterar':
        $id_uf = $_GET['id_uf'];
        $uf = $conexao->recuperarDados("SELECT * FROM `uf` WHERE `id_uf` = '$id_uf' ");
        $UF[0] = "placeholder = '$uf[0]'";
        $UF[1] = "placeholder = '$uf[1]'";

        break;

    case 'novo':
        $UF[0] = "value=''";
        $UF[1] = "value=''";

        break;
    default:
        break;
}
?>

    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">União Federativa</h3>
            </div>
        </div>
    </div>

    <div class="col-md-offset-1 col-md-10 panel">
        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
            <div class="col-md-12">

                <form action="processamento.php" method="post" class="form-horizontal">

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="id_uf" name="id_uf" required <?= $UF[0] ?> >
                        <span class="bar"></span>
                        <label>Sigla UF:</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="nome" name="nome" required
                            <?= $UF[1] ?>>
                        <span class="bar"></span>
                        <label>Nome</label>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" name="acao" value="salvar" class="btn btn-success"><span class="fa fa-thumbs-o-up"> </span>Salvar</button>
                            <a class="btn btn-danger" href="index.php"><span class="fa fa-reply"> </span> Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require_once '../rodape.php';