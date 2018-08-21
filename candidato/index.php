<?php
// Incluindo a classe de candidato
include_once 'Candidato.php';
include_once '../municipio/Municipio.php';
include_once '../partido/Partido.php';
include_once '../cargo/Cargo.php';

$candidato = new Candidato();
// Recuperando os dados de candidato
$aCandidato = $candidato->recuperarDados();

$municipio = new Municipio();
// Recuperando os dados de municipio
$aMunicipio = $municipio->recuperarDados();

$partido = new Partido();
// Recuperando os dados de partido
$aPartido = $partido->recuperarDados();


$cargo = new Cargo();
// Recuperando os dados de cargo
$aCargo = $cargo->recuperarDados();


include_once '../cabecalho.php';
?>

    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Candidato</h3>
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

                        <table id="datatables-example"
                               class="table table-bordered table-hover table-striped table-condensed">
                            <thead>
                            <tr>
                                <th colspan="2" width="5%">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($aCandidato as $candidato): ?>
                                <tr>
                                    <td>
                                        <a href="formulario.php?id_eleitor=<?= $candidato['id_eleitor']?>">
                                            <span class="icons icon-note"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="processamento.php?acao=excluir&id_eleitor=<?= $candidato['id_eleitor'] ?>">
                                            <span class="fa fa-trash-o"></span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once '../rodape.php';
