<?php
// Incluindo a classe de eleitor
include_once 'Voto.php';

$voto = new Voto();
// Recuperando os dados de $votos
$aVotos = $voto->recuperarDados2();

// Incluindo o incio da aplicação
include_once '../cabecalho.php';
?>

<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Votos</h3>
        </div>
    </div>
</div>

    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <a class="btn btn-warning" href="formulario.php">Novo</a>
                </div>
                <div class="panel-body">
                    <div class="responsive-table">

                        <table id="datatables-example" class="table table-bordered table-hover table-striped table-condensed">
                            <thead>
                            <tr>
                                <th colspan="2" width="5%">Ações</th>
                                <th>Eleitor</th>
                                <th>Cargo</th>
                                <th>Candidato</th>
                                <th>Tipo</th>
                                <th>Data</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($aVotos as $voto){
                                echo "
                                    <tr>
                                        <td>{$voto['eleitor']}</td>
                                        <td>{$voto['cargo']}</td>
                                        <td>{$voto['candidato']}</td>
                                        <td>{$voto['tipo']}</td>
                                        <td>{$voto['data']}</td>
                                        <td>
                                            <a href='formulario.php?id_voto={$voto['id_voto']}'><span class='icons icon-note'></span></a>
                                        </td>
                                        <td>
                                            <a href='processamento.php?acao=excluir&id_voto={$voto['id_voto']}'><span class='fa fa-trash-o'></span></a>
                                        </td>
                                    </tr>
                                ";
                            } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
// Incluindo o termino da aplciação
include_once '../rodape.php';
