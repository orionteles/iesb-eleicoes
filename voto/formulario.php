<?php

// Incluindo o inicio da aplicação
include_once '../cabecalho.php';

// Incluindo a classe de Cargo
include_once 'Voto.php';
$mVoto = new Voto();


// Recuprando os dados de Cargo
//$aCargos = $mCargo->recuperarDados();

// Recuprando os dados de Cargo
//$aUf = $mUf->recuperarDados();

// Decidindo se ira atualizar ou inserir
if(!empty($_GET['id_voto'])){
   //$mCargo->carregarPorId($_GET['id_cargo']);
}
?>
    <!-- Criando o Formulario de eleitor -->
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft"> <span class="fa fa-users"></span>Voto</h3>
            </div>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-10 panel">
        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
        <!--Primeira coluna do Formulário  -->
        <div class="col-md-12 col-lg-12">
                <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">
                    <div class="form-group form-animate-text col-md-5" style="margin-top:40px !important;">
                        <span class="bar"><label><i class="fa fa-user"></i>Data</label><br><br></span>
						
                        <input type="date" class="form-text" id="data" name="data" required value="">
                    </div>

					<div class="form-group form-animate-text col-md-10" style="margin-top:40px !important;">
                       <label> <i class="icon-like"></i> Tipo de Voto </label>
                        <br>
                        <br>
                        <select id="tipo" name="tipo" name="tipo">
							<option value="-1" selected>Direcionado</option>
                            <option value="0">Nulo</option>
                            <option value="1">Em Branco</option>
                        </select>
                    </div>
					
                    <div class="form-group form-animate-text col-md-10" style="margin-top:40px !important;">
                       <label> <i class="icon-user"></i> Eleitor </label>
                        <br>
                        <br>
                        <select id="eleitor" name="id_eleitor">
                            
                                <?php
								include_once '../eleitor/Eleitor.php';
								$mEleitor = new Eleitor();
								$sql = "select nome, id_eleitor from eleitor";
								$eleitor = $mEleitor->recuperarDados($sql);
									foreach ($eleitor as $result) {
										echo "\<option value='" . $result['id_eleitor'] . "'>" . $result['nome'] . "</option>";
									}
                                ?>
                        </select>
                    </div>
					
					<div class="form-group form-animate-text col-md-10" style="margin-top:40px !important;">
                       <label> <i class="icon-badge"></i> Cargo </label>
                        <br>
                        <br>
                        <select id="cargo" name="id_cargo">
                            <option value="">Selecione</option>
                                <?php
								include_once '../cargo/Cargo.php';
								$mCargo = new Cargo();
								$sql = "select nome, id_cargo from cargo";
								$cargo = $mCargo->recuperarDados($sql);
									foreach ($cargo as $result) {
										echo "\<option value='" . $result['id_cargo'] . "'>" . $result['nome'] . "</option>";
									}
                                ?>
                        </select>
                    </div>
					
					<div class="form-group form-animate-text col-md-10" style="margin-top:40px !important;">
                       <label> <i class="icon-ghost"></i> Candidato </label>
                        <br>
                        <br>
                        <select id="candidato" value='Olá' name="id_candidato">
                            <option value="">Selecione</option>
                                <?php
                                ?>
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
