<?php

// Incluindo o inicio da aplicação
include_once '../cabecalho.php';

// Incluindo a classe de Cargo
include_once 'Cargo.php';
$mCargo = new Cargo();

// incluindo a classe de Uf
include_once '../uf/Uf.php';
$mUf = new Uf();

// Recuprando os dados de Cargo
$aCargos = $mCargo->recuperarDados();

// Recuprando os dados de Cargo
$aUf = $mUf->recuperarDados();

// Decidindo se ira atualizar ou inserir
if(!empty($_GET['id_cargo'])){
    $mCargo->carregarPorId($_GET['id_cargo']);
}

?>
    <!-- Criando o Formulario de eleitor -->
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft"> <span class="fa fa-users"></span>Cargo</h3>
            </div>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-10 panel">
        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
        <!--Primeira coluna do Formulário  -->
        <div class="col-md-12 col-lg-12">
                <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">
                    <input type="hidden" name="id_cargo" value="<?= $mCargo->getIdCargo(); ?>">

                    <div class="form-group form-animate-text col-md-5" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="nome" name="nome" required  value="<?= $mCargo->getNome(); ?>">
                        <span class="bar"></span>
                        <label> <i class="fa fa-user"></i>Nome</label>
                    </div>

                    <div class="form-group form-animate-text col-md-10" style="margin-top:40px !important;">
                       <label> <i class="fa fa-map-marker"></i> Unidade Federativa</label>
                        <br>
                        <br>
                        <select id="uf" value='<?= $mCargo->getFkIdUf(); ?>' name="fk_id_uf">
                            <option value="">Selecione</option>
                                <?php
                                
                                foreach ($aUf as $uf => $ufs){
                                    $checked = ($ufs['id_uf']) == $mCargo->getFkIdUf() ? 'selected' : '';
                                    
                                    ?>
                                    <option <?=$checked?> value="<?= $ufs['id_uf'] ?>"><?= $ufs['nome'] ?></option>
                                
                                <?php } ?>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><span class="fa fa-thumbs-o-up"> </span> Salvar</button>
                            <a class="btn btn-danger" href="index.php"><span class="fa fa-reply"> </span> Voltar</a>
                        </div>
                    </div>

                </form>
        </div>
    </div>
<?php
// Incluindo o termino da aplicação
include_once '../rodape.php';