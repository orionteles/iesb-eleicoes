<?php
// Incluindo a classe de candidato
include_once 'Candidato.php';
// Incluindo a classe de municipio
include_once '../municipio/Municipio.php';
// Incluindo a classe de Partido
include_once '../partido/Partido.php';
// Incluindo a classe de Cargo
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
    <!-- Criando o Formulario de eleitor -->
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft"> <span class="fa fa-users"></span>Candidatos</h3>
            </div>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-10 panel">
        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
        <div class="col-md-6">
            <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">

                <input type="hidden" name="id_cadidato" value="<?= $candidato->getIdCadidato(); ?>">
                <input type="hidden" name="id_municipio" value="<?= $candidato->getIdMunicipio(); ?>">
                <input type="hidden" name="id_partido" value="<?= $candidato->getIdPartido(); ?>">
                <input type="hidden" name="id_cargo" value="<?= $candidato->getIdCargo(); ?>">
                <!-- Nome -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="nome" name="nome" required  value="<?= $candidato->getNome(); ?>">
                    <span class="bar"></span>
                    <label> <i class="fa fa-user"></i> Nome </label>
                </div>
                <!-- Titulo -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="numero_cadidato" name="numero_cadidato" required  value="<?= $candidato->getNumeroCadidato(); ?>">
                    <span class="bar"></span>
                    <label> <i class="icons icon-credit-card"></i>Nº Candidato</label>
                </div>
                <!-- telefone -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="tel" class="form-text" id="telefone" name="telefone" required  value="<?= $candidato->getTelefone(); ?>">
                    <span class="bar"></span>
                    <label> <i class="fa fa-mobile-phone"></i> Telefone</label>
                </div>
                <!-- Data de Nascimento -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="date" class="form-text" id="data_nascimento" name="data_nascimento" required  value="<?= $candidato->getDataNascimento(); ?>">
                    <span class="bar"></span>
                    <label> <i class="fa fa-mobile-phone"></i>Nascimento</label>
                </div>
                <!-- Sexo -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="sexo" name="sexo" required  value="<?= $candidato->getSexo(); ?>">
                    <span class="bar"></span>
                    <label> <i class="fa fa-sort-numeric-asc"></i>Sexo</label>
                </div>
                <!-- CEP -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="cep" name="cep" required  value="<?= $candidato->getCep(); ?>">
                    <span class="bar"></span>
                    <label> <i class="icons icon-map"></i> CEP</label>
                </div>
                <!-- logradouro -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="logradouro" name="logradouro" required  value="<?= $candidato->getLogradouro(); ?>">
                    <span class="bar"></span>
                    <label> <i class="icons icon-location-pin"></i> Logradouro</label>
                </div>
                <!-- complemento -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="complemento" name="complemento"  value="<?= $candidato->getComplemento(); ?>">
                    <span class="bar"></span>
                    <label> <i class="icons icon-location-pin"></i> Complemento</label>
                </div>
                <!-- bairro -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="bairro" name="bairro" required  value="<?= $candidato->getBairro(); ?>">
                    <span class="bar"></span>
                    <label> <i class="icons icon-location-pin"></i> Bairro</label>
                </div>
                <!-- numero_endereco -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="numero_endereco" name="numero_endereco" required  value="<?= $candidato->getNumero_endereco(); ?>">
                    <span class="bar"></span>
                    <label> <i class="icons icon-location-pin"></i> Numero Endereco</label>
                </div>
                <!-- id_municipio-->
                <input type="hidden" class="form-text" id="id_municipio" name="id_municipio" required  value="<?= $candidato->getId_municipio(); ?>">
                <!-- Foto -->
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="foto" name="foto" required  value="<?= $candidato->getFoto(); ?>">
                    <span class="bar"></span>
                    <label> <i class="fa fa-file-photo-o"></i> Foto</label>
                </div>
            </form>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success"><span class="fa fa-thumbs-o-up"> </span> Salvar</button>
                        <a class="btn btn-danger" href="index.php"><span class="fa fa-reply"> </span> Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once '../location/scriptCEP.php';

// Incluindo o termino da aplicação
include_once '../rodape.php';