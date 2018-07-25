<?php
include_once 'Uf.php';

$uf = new Uf();

if(!empty($_GET['id_uf'])){
    $uf->carregarPorId($_GET['id_uf']);
}

include_once '../cabecalho.php';
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

                <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">
                    <input type="hidden" name="id_uf" value="<?php echo $uf->getIdUf(); ?>">

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="id_uf" name="id_uf" required  value="<?php echo $uf->getNome(); ?>">
                        <span class="bar"></span>
                        <label>Sigla UF</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="nome" name="nome" required  value="<?php echo $uf->getNome(); ?>">
                        <span class="bar"></span>
                        <label>Nome</label>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include_once '../rodape.php';