<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/logoblanco.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>YOUR PRESIGNER</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/lateral2.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="sidebar-wrapper ">
                <div class="logo ">
                    <a href="http://localhost/ProyectoS/BS3/calculadora.html " class="simple-text ">
                        YOUR PRESIGNER
                    </a>
                </div>

                <ul class="nav ">
                    <li class="active ">
                        <a href="dashboard.html">
                            <i class="pe-7s-like "></i>
                            <p>PAGINA PRINCIPAL</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="pe-7s-user "></i>
                            <p>PERFIL DE USUARIO</p>
                        </a>
                    </li>
                    <li>
                        <a href="calculadora.php ">
                            <i class="pe-7s-calculator "></i>
                            <p>CALCULA TU EMBARAZO</p>
                        </a>
                    </li>
                    <li>
                        <a href="multimedia.html ">
                            <i class="pe-7s-camera "></i>
                            <p>MULTIMEDIA PRENATAL</p>
                        </a>
                    </li>
                    <li>
                        <a href="Etapas.html ">
                            <i class="pe-7s-science "></i>
                            <p>ETAPAS DEL EMBARAZO</p>
                        </a>
                    </li>
                    <li>
                        <a href="Controles.html ">
                            <i class="pe-7s-date "></i>
                            <p>CONTROLES</p>
                        </a>
                    </li>
                    <li>
                        <a href="Nutricion.html ">
                            <i class="pe-7s-coffee "></i>
                            <p>NUTRICION</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">CALCULA TU EMBARAZO</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="user.html">
                                    <p>Cuenta</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Usuarios
                                        <b class="caret"></b>
                                    </p>

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="dashboard.html">Administrador</a></li>
                                    <li><a href="dashboardDoctor.html">Doctores</a></li>
                                    <li><a href="dashboardPaciente.html">Pacientes</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="views\welcome.php">
                                    <p>Cerrar Sesion</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <center>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <center>
                                            <h4 class="title">CALCULADORA DE EMBARAZO</h4>
                                            <br>
                                            <br>
                                            <p class="category">¿Quieres saber tu fecha de parto? ¿Dudas de cuántas
                                                semanas estás embarazada? Saber en qué semana del embarazo te encuentras
                                                y tu fecha probable de parto no siempre es fácil, especialmente si eres
                                                primeriza. Por
                                                eso, en colaboración con nuestra experta matrona, hemos creado esta
                                                sencilla herramienta para que tengas un control total sobre tu embarazo.
                                            </p>
                                        </center>
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <center>
                                            <p>SEMANAS DE EMBARAZO:
                                                <br>
                                                <center>
                                                    <div class="content">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="card">
                                                                        <div class="header">
                                                                            <center>
                                                                                <form method="POST" action="">
                                                                                    <div class="form-group">
                                                                                        <label for="fecha">Fecha
                                                                                            inicial:</label>
                                                                                        <input required type="text" class="form-control" name="fecha1" placeholder="Ingrese fecha inicial" id="moda1" value="
                                                                                    <?php if (isset($_POST[" fecha1 "])) {
                                                                                        echo $_POST[" fecha1 "];
                                                                                    }
                                                                                    ?>" </div>
                                                                                        <div class="form-group">
                                                                                            <label for="fecha">Fecha
                                                                                                actual:</label>
                                                                                            <input required type="text" class="form-control" name="fecha2" placeholder="Ingrese fecha actual" id="moda2" value="
                                                                                    <?php if (isset($_POST[" fecha2 "])) {
                                                                                        echo $_POST[" fecha2 "];
                                                                                    }
                                                                                    ?>" </div>
                                                                                            <input name="calculo" type="hidden" value="v">
                                                                                            <input class="btn btn-primary" type="submit" value="Calcular diferencia">
                                                                                </form>

                                                                                <?php
                                                                                if (isset($_POST["calculo"])) {

                                                                                    $fecha1 = $_POST["fecha1"];
                                                                                    $fecha2 = $_POST["fecha2"];

                                                                                    $fechainicial = new DateTime($fecha1);
                                                                                    //fecha inicial 
                                                                                    $fechaactual = new DateTime($fecha2);
                                                                                    //fecha de cierre 
                                                                                    $diferencia = $fechainicial->diff($fechaactual);

                                                                                ?>
                                                                                    <center>
                                                                                        <ul class="list-group">
                                                                                            <li class="list-group-item">
                                                                                                <strong>Meses: </strong>
                                                                                                <?php echo $diferencia->format('%m Meses'); ?>
                                                                                            </li>
                                                                                            <li class="list-group-item">
                                                                                                <strong>Dias: </strong>
                                                                                                <?php echo $diferencia->format('%d Dias'); ?>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </center>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </center>
                                                </center>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </center>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Desarroladores
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="https://www.ucundinamarca.edu.co/">Universidad de cundinamarca Sede Facatativá</a>
                </p>
            </div>
        </footer>

    </div>

    </div>



</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>