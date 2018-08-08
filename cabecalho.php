<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta name="description" content="A elections app">
    <meta name="author" content="4º semester Iesb's ADS course">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iesb eleições</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="../tema/asset/css/bootstrap.min.css">

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="../tema/asset/css/plugins/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../tema/asset/css/plugins/simple-line-icons.css"/>
    <link rel="stylesheet" type="text/css" href="../tema/asset/css/plugins/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="../tema/asset/css/plugins/fullcalendar.min.css"/>

    <link rel="stylesheet" type="text/css" href="../tema/asset/css/plugins/datatables.bootstrap.min.css"/>

    <link href="../tema/asset/css/style.css" rel="stylesheet">
    <!-- end: Css -->

    <link rel="shortcut icon" href="../tema/asset/img/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="mimin" class="dashboard">
<!-- start: Header -->
<nav class="navbar navbar-default header navbar-fixed-top">
    <div class="col-md-12 nav-wrapper">
        <div class="navbar-header" style="width:100%;">
            <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
            <a href="index.html" class="navbar-brand">
                <b>IESB - Eleições 2018</b>
            </a>

            <ul class="nav navbar-nav search-nav">
                <li>
                    <div class="search">
                        <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                        <div class="form-group form-animate-text">
                            <input type="text" class="form-text" required>
                            <span class="bar"></span>
                            <label class="label-search">Digite Aqui para <b>Pesquisar</b> </label>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Akihiko Avaron</span></li>
                <li class="dropdown avatar-dropdown">
                    <img src="../tema/asset/img/avatar.jpg" class="img-circle avatar" alt="user name"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                    <ul class="dropdown-menu user-dropdown">
                        <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                        <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="more">
                            <ul>
                                <li><a href=""><span class="fa fa-cogs"></span></a></li>
                                <li><a href=""><span class="fa fa-lock"></span></a></li>
                                <li><a href=""><span class="fa fa-power-off "></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- end: Header -->

<div class="container-fluid mimin-wrapper">

    <!-- start:Left Menu -->
    <div id="left-menu">
        <div class="sub-left-menu scroll">
            <ul class="nav nav-list">
                <li>
                    <div class="left-bg"></div>
                </li>
                <li class="time">
                    <h1 class="animated fadeInLeft">21:00</h1>
                    <p class="animated fadeInRight">Sat,October 1st 2029</p>
                </li>
                <li class="active ripple">
                    <a class="nav-header"><span class="fa fa-check-square"></span> Voto</a>
                </li>
                <li class="ripple">
                    <a class="nav-header"><span class="fa fa-users"></span> Candidatos</a>
                </li>
                <li class="ripple">
                    <a class="nav-header"><span class="fa fa-hand-paper-o"></span> Partido</a>
                </li>
                <li class="ripple">
                    <a class="nav-header" href="../cargo/index.php"><span class="fa fa-suitcase"></span> Cargo</a>
                </li>
                <li class="ripple">
                    <a class="nav-header"><span class="fa fa-user"></span> Eleitor</a>
                </li>
                <li class="ripple">
                    <a class="nav-header" href="../uf/index.php"><span class="fa fa-user"></span> UF</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end: Left Menu -->


    <!-- start: content -->
    <div id="content">

