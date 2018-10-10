<?php
include_once 'Usuario.php';
include_once '../perfil/Perfil.php';

$usuario = new Usuario();
$perfil = new Perfil();

$arPerfil = $perfil->recuperarDados();

if (!empty($_GET['id_usuario'])) {
    $usuario->carregarPorId($_GET['id_usuario']);
}

include_once '../cabecalho.php';
?>

<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Usuário <i class="fa fa-user-secret"></i> </h3>
        </div>
    </div>
</div>

<div class="col-md-offset-1 col-md-10 panel">
    <div id="mensagem"></div>

    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
        <div class="col-md-12">
            <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="hidden" class="form-text" id="" name="id_usuario" required
                           value="<?= $usuario->getIdUsuario(); ?>">
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="nome" name="nome" required
                           value="<?= $usuario->getNome(); ?>">
                    <span class="bar"></span>
                    <label>Nome</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="" name="email" required
                           value="<?= $usuario->getEmail(); ?>">
                    <span class="bar"></span>
                    <label>E-mail</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="senha" name="senha" required
                           value="<?= $usuario->getSenha(); ?>">
                    <span class="bar"></span>
                    <label>Senha</label>
                </div>
                <label> <i class="fa fa-user"></i> Perfil</label>
                <div class="form-group form-animate-text">
                    <select class="form-control" name="id_perfil" id="id" required>
                            <option value="">Selecione</option>
                        <?php
                        foreach($arPerfil as $perfil){ ?>
                            <option value="<?= $perfil['id_perfil'] ?>"><?= $perfil['nome']?></option>
                        <?php } ?>
                    </select>
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
include_once '../rodape.php'; ?>
