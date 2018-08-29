

<?php

// Incluindo a classe de Eleitor
include_once 'Eleitor.php';
$eleitor = new Eleitor();

// incluindo os municipios
include_once '../municipio/Municipio.php';
$municipio = new Municipio();

// Recuprando os dados de municipio
$municipios = $municipio->recuperarDados();


// Decidindo se ira atualizar ou inserir
if(!empty($_GET['id_eleitor'])){
    $eleitor->carregarPorId($_GET['id_eleitor']);
}
// Incluindo o inicio da aplicação
include_once '../cabecalho.php';

?>
    <!-- Criando o Formulario de eleitor -->
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft"> <span class="fa fa-users"></span> Eleitores</h3>
            </div>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-10 panel">
        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
        <!--Primeira coluna do Formulário  -->
        <div class="col-md-6">
                <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">
                    <!-- ID do eleitor -->
                    <input type="hidden" name="id_eleitor" value="<?php echo $eleitor->getId_eleitor(); ?>">
                    <!-- Nome -->
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="nome" name="nome" required  value="<?php echo $eleitor->getNome(); ?>">
                        <span class="bar"></span>
                        <label> <i class="fa fa-user"></i> Nome</label>
                    </div>
                    <!-- Titulo -->
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="titulo" name="titulo" required  value="<?php echo $eleitor->getTitulo(); ?>">
                        <span class="bar"></span>
                        <label> <i class="icons icon-credit-card"></i> Titulo</label>
                    </div>
                    <!-- Zona -->
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="zona" name="zona" required  value="<?php echo $eleitor->getZona(); ?>">
                        <span class="bar"></span>
                        <label> <i class="fa fa-sort-numeric-asc"></i> Zona</label>
                    </div>
                    <!-- Seção -->
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="secao" name="secao" required  value="<?php echo $eleitor->getSecao(); ?>">
                        <span class="bar"></span>
                        <label> <i class="fa fa-sort-numeric-asc"></i> Seção</label>
                    </div>
                     <!-- telefone -->
                     <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="tel" class="form-text" id="telefone" name="telefone" required  value="<?php echo $eleitor->getTelefone(); ?>">
                        <span class="bar"></span>
                        <label> <i class="fa fa-mobile-phone"></i> Telefone</label>
                    </div>
                    <!-- Foto -->
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="foto" name="foto" required  value="<?php echo $eleitor->getFoto(); ?>">
                        <span class="bar"></span>
                        <label> <i class="fa fa-file-photo-o"></i> Foto</label>
                    </div>

                </div>
                <!-- Segunda coluna do Formulário -->
                <div class="col-md-6">
                    <!-- CEP -->
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="cep" name="cep" required  value="<?php echo $eleitor->getCep(); ?>">
                        <span class="bar"></span>
                        <label> <i class="icons icon-map"></i> CEP</label>
                    </div>
                    <!-- id_uf -->
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="id_uf" name="id_uf">
                        <span class="bar"></span>
                        <label> <i class="icons icon-location-pin"></i>UF</label>
                    </div>
                    <!-- id_municipio -->
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="id_municipio" name="id_municipio" >
                        <span class="bar"></span>
                        <label> <i class="icons icon-location-pin"></i>Id Município</label>
                    </div>
                     <!-- logradouro -->
                     <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="logradouro" name="logradouro" required  value="<?php echo $eleitor->getLogradouro(); ?>">
                        <span class="bar"></span>
                        <label> <i class="icons icon-location-pin"></i> Logradouro</label>
                    </div>
                    <!-- bairro -->
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="bairro" name="bairro" required  value="<?php echo $eleitor->getBairro(); ?>">
                        <span class="bar"></span>
                        <label> <i class="icons icon-location-pin"></i> Bairro</label>
                    </div>
                    <!-- numero_endereco -->
                     <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="numero_endereco" name="numero_endereco" required  value="<?php echo $eleitor->getNumero_endereco(); ?>">
                        <span class="bar"></span>
                        <label> <i class="icons icon-location-pin"></i> Numero Endereco</label>
                    </div>
                    <!-- complemento -->
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="complemento" name="complemento"  value="<?php echo $eleitor->getComplemento(); ?>">
                        <span class="bar"></span>
                        <label> <i class="icons icon-location-pin"></i> Complemento</label>
                    </div>

                
                <!-- Enviando ou cancelando o Envio -->
                
                    <div class="form-group">
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
?>

<script>
    $(function(){
        $('#cep').change(function(){
            $cep = $('#cep').val();
            $.ajax({
                url: 'https://viacep.com.br/ws/' + $cep +'/json/',
                success: function (dados) {
                    $('#logradouro').val(dados.logradouro)
                    $('#bairro').val(dados.bairro)
                    $('#id_uf').val(dados.uf)
                    $('#id_municipio').val(dados.localidade)
                    $('#complemento').val(dados.complemento)
                }
            });

        });
    })
</script>        