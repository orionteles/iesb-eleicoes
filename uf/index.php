<?php
require_once'../cabecalho.php';
require_once'../Conexao.php';

$uf = new Conexao();
$aUf = $uf->recuperarDados("SELECT * FROM `uf`");
//echo '<pre>';
//print_r($aUf);
//die();

?>

    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">União Federativa</h3>
            </div>
        </div>
    </div>

    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <a class="btn btn-warning" href="formulario.php?Op=novo">Novo</a>
                </div>
                <div class="panel-body">
                    <div class="responsive-table">

                        <table id="datatables-example" class="table table-bordered table-hover table-striped table-condensed">
                            <thead>
                            <tr>
                                <th colspan="2" width="10%" style="text-align: center">Ações</th>
                                <th>Nome</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($aUf as $uf) { ?>
                                <tr>
                                    <td>
                                        <a href='formulario.php?Op=alterar&id_uf=<?= $uf[0] ?>'><span class='icons icon-note'></span></a>
                                    </td>
                                    <td>
                                        <a href='processamento.php?acao=excluir&id_uf=<?= $uf[0] ?>'><span class='fa fa-trash-o'></span></a>
                                    </td>
                                    <td><?= $uf[1] ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require_once'../rodape.php';