<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/estilos1.css"><!-- para estilos del contador -->

<!--    estilos de cada integrante-->
<!--    <link href="./estilos/EstilosHome.css" rel="stylesheet" />-->
<!--    <link rel="stylesheet" href="./estilos/EstilosAuspiciadores.css">-->
<!--    <link href="./estilos/EstilosLosJuegos.css" rel="stylesheet" />-->
<!--    <link href="./estilos/EstilosInsti.css" rel="stylesheet" />-->


    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css">

    <link href="./estilos/style.css" rel="stylesheet" />

<!--    <link rel="stylesheet" href="./css/css.css" type="text/css">-->

    <link rel="icon" type="" href="./img/icon_inicio.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Weplay-Lima2019</title>

<!--    <script type="text/javascript">-->
<!--        $(document).ready(inicio)-->
<!--        function inicio() {-->
<!--            $("select").change(cambiacss)-->
<!--        }-->
<!--        function cambiacss() {-->
<!--            var plantilla = $("select").attr("value");-->
<!--            $("plantilla").html('<link rel="stylesheet" href="css/' + plantilla + '.css" type="text/css">')-->
<!--        }-->
<!--    </script>-->

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Weplay</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="Home.php">Inicio</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Los Panamericanos<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="losjuegos.php">Los Juegos</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Organización<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="ComiteOrganizador.php">Comite Organizador</a></li>
                                <li><a href="ceremonia.php">Ceremonias</a></li>

                            </ul>
                        </li>
                        <li><a href="Auspiciadores.php">Auspiciadores</a></li>
                        <li><a href="Institucional.php">Institucional</a></li>
                        <li><a href="#">Vivo</a></li>
                        <li><a href="#">Voluntariado</a></li>
                        <li><a href="#">Marco legal</a></li>
                    </ul>

                    <?php
                    if ( isset($_SESSION['user']) && isset( $_GET['success'] ) ){
                        ?>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="icon-user"></span><?php echo $_SESSION['user'];?></a></li>
                            <li><a></a></li>
                            <li><a href="#"><span class="icon-exit"></span>Cerrar Sesion</a></li>
                        </ul>

                        <?php
                    }else{

                        ?>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="icon-user"></span>Mi Perfil</a></li>
                            <li><a></a></li>
                            <li><a href="#"><span class="icon-exit"></span>Cerrar Sesion</a></li>
                        </ul>

                        <?php

                    }
                    ?>
                </div>
            </nav>
        </div>
    </div>
</div>

