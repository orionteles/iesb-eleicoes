<?php
include_once 'Pagina.php';

$pagina = new Pagina();

if (!empty($_GET['id_pagina'])) {
    $pagina->carregarPorId($_GET['id_pagina']);
}

include_once '../perfil/Perfil.php';
$perfis = (new Perfil())->recuperarDados();

include_once '../cabecalho.php';
?>

<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Pagina<i class="fa fa-user"></i> </h3>
        </div>
    </div>
</div>

<div class="col-md-offset-1 col-md-10 panel">
    <div id="mensagem"></div>

    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
        <div class="col-md-12">
            <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="hidden" class="form-text" id="id_pagina" name="id_pagina" required
                           value="<?= $pagina->getIdPagina(); ?>">
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="nome" name="nome" required
                           value="<?= $pagina->getNome(); ?>">
                    <span class="bar"></span>
                    <label>Nome</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="caminho" name="caminho" required
                           value="<?= $pagina->getCaminho(); ?>">
                    <span class="bar"></span>
                    <label>Caminho</label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="publica" name="publica"
                               value="<?= $pagina->getPublica(); ?>"> Pública
                    </label>
                </div>

                <hr>

                <fieldset>
                    <legend>Perfis com permissão a esta página</legend>

                    <?php foreach($perfis as $perfil){ ?>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="id_perfil[]"
                                       value="<?php echo $perfil['id_perfil']; ?>">
                                <?php echo $perfil['nome']; ?>
                            </label>
                        </div>

                    <?php } ?>


                </fieldset>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success"><span class="fa fa-thumbs-o-up"> </span>
                            Salvar
                        </button>
                        <a class="btn btn-danger" href="index.php"><span class="fa fa-reply"> </span> Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once '../rodape.php'; ?>
