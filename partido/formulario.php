<?php
include_once 'Partido.php';

$partido = new Partido();

// Decidindo se ira atualizar ou inserir
if(!empty($_GET['id_partido'])){
    $partido->carregarPorId($_GET['id_partido']);
}
// Incluindo o inicio da aplicação
include_once '../cabecalho.php';

?>

    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft"> <img src="./partido.png" width="60px" height="60px" alt="partido"> Partidos</h3>
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
                        <label> <i class="fa fa-sort-alpha-asc"></i> Sigla</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="nome" name="nome" required  value="<?php echo $partido->getNome(); ?>">
                        <span class="bar"></span>
                        <label> <i class="fa fa-institution"></i> Nome</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="number" class="form-text" id="numero" name="numero" required  value="<?php echo $partido->getNumero(); ?>">
                        <span class="bar"></span>
                        <label> <i class="fa fa-sort-numeric-asc"></i> Número</label>
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

// Incluindo o termino da aplicação
include_once '../rodape.php';