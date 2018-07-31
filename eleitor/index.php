<?php
// Incluindo a classe de eleitor
include_once 'Eleitor.php';

$eleitor = new Eleitor();
// Recuperando os dados de eleitores
$aeleitors = $eleitor->recuperarDados();

// Incluindo o incio da aplicação
include_once '../cabecalho.php';
?>

<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Eleitores</h3>
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
                                <th>Nome</th>
                                <th>Titulo</th>
                                <th>Zona</th>
                                <th>Seção</th>
                                <th>Foto</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($aeleitors as $eleitor){
                                echo "
                                    <tr>
                                        <td>
                                            <a href='formulario.php?id_eleitor={$eleitor['id_eleitor']}'><span class='icons icon-note'></span></a>
                                        </td>
                                        <td>
                                            <a href='processamento.php?acao=excluir&id_eleitor={$eleitor['id_eleitor']}'><span class='fa fa-trash-o'></span></a>
                                        </td>
                                        <td>{$eleitor['nome']}</td>
                                        <td>{$eleitor['titulo']}</td>
                                        <td>{$eleitor['zona']}</td>
                                        <td>{$eleitor['foto']}</td>
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