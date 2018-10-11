<?php
include_once 'Pagina.php';
include_once '../perfil/Perfil.php';

$pagina = new Pagina();

$perfil = new Perfil();
$perfils = $perfil->recuperarDados();

if (!empty($_GET['id_pagina'])) {
    $pagina->carregarPorId($_GET['id_pagina']);
}

include_once '../cabecalho.php';
?>

    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Unidade Federativa</h3>
            </div>
        </div>
    </div>

    <div class="col-md-offset-1 col-md-10 panel">
        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
            <div class="col-md-12">

                <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">

                    <input type="hidden" name="id_pagina" id="id_pagina" value="<?php echo $pagina->getIdPagina(); ?>">

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="nome" name="nome" required
                               value="<?php echo $pagina->getNome(); ?>">
                        <span class="bar"></span>
                        <label>Nome <i class="fa fa-map-marker"></i> </label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="caminho" name="caminho" required
                               value="<?php echo $pagina->getCaminho(); ?>">
                        <span class="bar"></span>
                        <label>Caminho <i class="fa fa-map-marker"></i> </label>
                    </div>
                    <div class="">
                        <label for="publica" class="">Pública</label><br/>
                        <div class="">
                            <label class="radio-inline">
                                <input type="radio" name="publica" id="publica" value="1" required <?= (($pagina->getPublica())=='1')?'Checked':''?>> Sim
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="publica" id="publica" value="0" required <?= (($pagina->getPublica())=='0')?'Checked':''?>> Não
                            </label>
                        </div>
                    </div>
                    <hr>
                    <fieldset>
                        <legend>
                            Perfis com permissão a está página
                        </legend>

                        <?php foreach($perfils as $perfil){ ?>

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
include_once '../rodape.php';
?>

<script>
$(function () {

    $('#id_pagina').change(function() {
        $pagina = $('#id_pagina').val();
        $.ajax({
                url: 'processamento.php?acao=verificar_sigla&id_pagina='+$pagina,
                success: function (dados) {
            if (dados){
                alert(dados);
            }
                }
            });
        });

    $('#nome').change(function() {
        $nome = $('#nome').val();
        $.ajax({
                url: 'processamento.php?acao=verificar_nome&nome='+$nome,
                success: function (dados) {
            if (dados){
                 alert(dados);
            }
                }
            });
        });
})
</script>