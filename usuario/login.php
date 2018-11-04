<?php
    include_once '../cabecalho.php';
?>

    <!DOCTYPE html>
    <!-- saved from url=(0046)http://127.0.0.1/iesb-eleicoes/tema/login.html -->
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <meta name="description" content="Miminium Admin Template v.1">
        <meta name="author" content="Isna Nur Azis">
        <meta name="keyword" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Miminium</title>

        <!-- start: Css -->
        <link rel="stylesheet" type="text/css" href="../login_files/bootstrap.min.css">

        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="../login_files/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../login_files/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="../login_files/animate.min.css">
        <link rel="stylesheet" type="text/css" href="../login_files/aero.css">
        <link href="../login_files/style.css" rel="stylesheet">
        <!-- end: Css -->

        <link rel="shortcut icon" href="http://127.0.0.1/iesb-eleicoes/tema/asset/img/logomi.png">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

    <div class="container">

        <form class="form-signin" action="processamento.php?acao=logar" method="post">
            <div class="panel periodic-login">
                <span class="atomic-number">28</span>
                <div class="panel-body text-center">
                    <h1 class="atomic-symbol">Mi</h1>
                    <p class="atomic-mass">14.072110</p>
                    <p class="element-name">Miminium</p>

                    <i class="icons icon-arrow-down"></i>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" required="" name="email">
                        <span class="bar"></span>
                        <label>E-mail</label>
                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" class="form-text" required="" name="senha">
                        <span class="bar"></span>
                        <label>Senha</label>
                    </div>
                    <label class="pull-left">
                        <div class="icheckbox_flat-aero" style="position: relative;"><input type="checkbox"
                                                                                            class="icheck pull-left" name="checkbox1" style="position: absolute; opacity: 100%;">
                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        Lembrar-me
                    </label>
                    <input type="submit" class="btn col-md-12" value="Login">
                    <input type="reset" class="btn col-md-12" value="Limpar">
                </div>
                <div class="text-center" style="padding:5px;">
                    <a href="http://127.0.0.1/iesb-eleicoes/tema/forgotpass.html">Forgot Password </a>
                    <a href="http://127.0.0.1/iesb-eleicoes/tema/reg.html">| Signup</a>
                </div>
            </div>
        </form>

    </div>

    <!-- end: Content -->
    <!-- start: Javascript -->
    <script src="./login_files/jquery.min.js.download"></script>
    <script src="./login_files/jquery.ui.min.js.download"></script>
    <script src="./login_files/bootstrap.min.js.download"></script>

    <script src="./login_files/moment.min.js.download"></script>
    <script src="./login_files/icheck.min.js.download"></script>

    <!-- custom -->
    <script src="./login_files/main.js.download"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-aero',
                radioClass: 'iradio_flat-aero'
            });
        });
    </script>
    <!-- end: Javascript -->
<?php
include_once("../rodape.php");
?>