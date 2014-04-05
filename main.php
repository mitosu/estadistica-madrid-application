<?php include('config.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo _MIN_TITLE; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.validationEngine.js"></script>
        <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script>
            $(document).ready(function(){
                $("#fecha_nacimiento").datepicker(
                        {
                            dateFormat: "dd-mm-yy",
                            dayNames: ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabádo"],
                            dayNamesMin: ["Dom","Lun","Mar","Mie","Jue","Vie","Sab"],
                            monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                            changeMonth: true,
                            changeYear: true
                        }
                );
            });
        </script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Iglesia La Luz del Mundo</a>
                </div>
                <div class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <div id="text_zona_clientes" class="form-group">
                            <label for="usuario">Acceso Usuarios</label>
                        </div>
                        <div class="form-group">
                            <input id="usuario" type="text" placeholder="Usuario" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">Entrar</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </div>

        <!-- Menu Principal -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Menú Principal</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Archivo<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Altas</a></li>
                                <li><a href="#">Modificar</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Preferencias</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Acerca de..</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Por clave</a></li>
                                <li><a href="#">Por datos personales</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formatos<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Tarjetón Feligresía</a></li>
                                <li><a href="#">Asistencia Niños</a></li>
                                <li><a href="#">Asistencia Jovenes</a></li>
                                <li><a href="#">Asistencia Señoritas</a></li>
                                <li><a href="#">Asistencia Solos</a>
                                <li><a href="#">Asistencia Casados</a>
                                <li><a href="#">Asistencia Casadas</a>    
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informes<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Bautismo en Agua</a></li>
                                <li><a href="#">Bautismo en Espíritu</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Informe Semanal</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Informe Mensual</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Informe Anual</a>
                                <li class="divider"></li>
                                <li><a href="#">Informe de Movimientos Extraordinarios</a>
                            </ul>
                        </li>
                        <li><a href="#">Movimientos</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Búsqueda rápida..">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </form>                
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container container-aplication">
            <!-- Formulario de Altas -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#datos_personales" data-toggle="tab">Datos Personales</a></li>
                        <li><a href="#datos_familiares" data-toggle="tab">Datos Familiares</a></li>
                        <li><a href="#datos_profesionales" data-toggle="tab">Datos Profesionales</a></li>
                        <li><a href="#datos_espirituales" data-toggle="tab">Datos Espirituales</a></li>
                        <li><a href="#datos_espirituales_avanzados" data-toggle="tab">Datos Espirituales Avanzado</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="datos_personales">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3><span class="label label-primary">Datos Personales</span></h3>
                                    <form role="form">
                                        <p>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="apellidos">Apellidos</label>
                                                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese apellidos ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                                    <input type="text" class="form-control" id="fecha_nacimiento" placeholder="Ingrese fecha">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="apellidos">Lugar de Nacimiento</label>
                                                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese apellidos ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" id="exampleInputFile">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Check me out
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        </p>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    dos
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="datos_familiares">
                            Datos Famiiares
                        </div>
                        <div class="tab-pane fade" id="datos_profesionales">
                            Datos Profesionales
                        </div>
                        <div class="tab-pane fade" id="datos_espirituales">
                            Datos Espirituales
                        </div>
                        <div class="tab-pane fade" id="datos_espirituales_avanzado">
                            Datos Espirituales
                        </div>    
                    </div>

                </div>
            </div>

            <hr>

            <footer>
                <p><?php echo _MIN_COPYRIGHT ?></p>
            </footer>
        </div> <!-- /container --><!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function() {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X');
            ga('send', 'pageview');
        </script>
    </body>
</html>
