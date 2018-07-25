<?php
include_once 'Partido.php';

$partido = new Partido();

if(!empty($_GET['id_partido'])){
    $partido->carregarPorId($_GET['id_partido']);
}

include_once '../cabecalho.php';
?>

    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Partidos</h3>
            </div>
        </div>
    </div>

    <div class="col-md-offset-1 col-md-10 panel">
        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
            <div class="col-md-12">

                <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">
                    <input type="hidden" name="id_partido" value="<?php echo $partido->getIdPartido(); ?>">

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="sigla" name="sigla" required  value="<?php echo $partido->getSigla(); ?>">
                        <span class="bar"></span>
                        <label>Sigla</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="nome" name="nome" required  value="<?php echo $partido->getNome(); ?>">
                        <span class="bar"></span>
                        <label>Nome</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="numero" name="numero" required  value="<?php echo $partido->getNumero(); ?>">
                        <span class="bar"></span>
                        <label>Número</label>
                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><span class="fa fa-thumbs-o-up"> </span> Salvar</button>
                            <a class="btn btn-danger" href="index.php"><span class="fa fa-reply"> </span> Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include_once '../rodape.php';