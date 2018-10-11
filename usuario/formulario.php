<?php
include_once 'Usuario.php';
include_once '../perfil/Perfil.php';

$usuario = new Usuario();

$perfil = new Perfil();
$perfils= $perfil->recuperarDados();

if (!empty($_GET['id_usuario'])) {
    $usuario->carregarPorId($_GET['id_usuario']);
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

                    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $usuario->getIdUsuario(); ?>">

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="nome" name="nome" required
                               value="<?php echo $usuario->getNome(); ?>">
                        <span class="bar"></span>
                        <label>Nome <i class="fa fa-map-marker"></i> </label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="email" name="email" required
                               value="<?php echo $usuario->getEmail(); ?>">
                        <span class="bar"></span>
                        <label>Email <i class="fa fa-map-marker"></i> </label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" class="form-text" id="senha" name="senha" required
                               value="<?php echo $usuario->getSenha(); ?>">
                        <span class="bar"></span>
                        <label>Senha <i class="fa fa-map-marker"></i> </label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <select name="id_perfil" id="id_perfil" class="form-control">
                            <option>Selecione</option>

                            <?php foreach ($perfils as $perfil){
                                $checked = $perfil['id_perfil'] == $usuario->getIdPerfil() ? 'selected' : '';
                                echo "<option $checked value='{$perfil['id_perfil']}'>{$perfil['nome']}</option>";
                            } ?>
                        </select>
                        <span class="bar"></span>
                        <label>Perfil <i class="fa fa-map-marker"></i> </label>
                    </div>

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

    $('#id_usuario').change(function() {
        $usuario = $('#id_usuario').val();
        $.ajax({
                url: 'processamento.php?acao=verificar_sigla&id_usuario='+$usuario,
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