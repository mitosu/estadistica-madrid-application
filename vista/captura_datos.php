<?php include('../config.php'); ?>
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
        <script src="../js/jquery-1.8.2.min.js"></script>
        <script src="../js/jquery.validationEngine.js"></script>
        <script src="../js/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="../assets/say-cheese.js"></script>
        <script src="../js/ion.sound.js"></script>
        <link rel="stylesheet" href="../css/jquery-ui-1.10.4.custom.min.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <script>
            $(document).ready(function() {
                $.ionSound({
                    sounds: [
                        "camera_flashing_2"
                    ],
                    path: "../ion/sounds/",
                    multiPlay: true,
                    volume: "1.0"
                });

                var pic = new SayCheese('#boxpicture', {
                    snapshots: true
                });
                pic.start();

                var width = 320, height = 240;

                $('#take-pic').click(function(e) {
                    $.ionSound.play("camera_flashing_2");
                    pic.takeSnapshot(width, height);
                    return false;
                });

                pic.on('snapshot', function(snapshot) {
                    var img = $('<img id="pic">');
                    img.attr('src', snapshot.toDataURL('image/png'));
                    img.appendTo('#preview-pic');
                });

                $('#discard').click(function() {
                    $('#preview-pic').empty();
                });

                $("#fecha_nacimiento").datepicker(
                        {
                            dateFormat: "dd/mm/yy",
                            dayNames: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabádo"],
                            dayNamesMin: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                            changeMonth: true,
                            changeYear: true,
                            yearRange: '-100:+0',
                            monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                            showAnim: 'slideDown'
                        }
                );
                $('#fecha_boda').datepicker(
                        {
                            dateFormat: "dd/mm/yy",
                            dayNames: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabádo"],
                            dayNamesMin: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                            changeMonth: true,
                            changeYear: true,
                            yearRange: '-100:+0',
                            monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                            showAnim: 'slideDown'
                        }
                );
                $(document).on('mousemove', function() {
                    var rdo = $("input[name='rdestadomigratorio']:checked").val();
                    if (rdo === "2") {
                        $('#lblnacionalidad').css('visibility', 'visible');
                        $('#txtnacionalidad').css('visibility', 'visible');
                    }
                    else {
                        $('#lblnacionalidad').css('visibility', 'hidden');
                        $('#txtnacionalidad').css('visibility', 'hidden');
                    }
                });
                $('#txtnacionalidad').click(function() {
                    $('#txtnacionalidad').popover('show');
                });
                $('#txtnacionalidad').focusout(function() {
                    $('#txtnacionalidad').popover('hide');
                });
            });</script>
        <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
            <div class="row">
                <div class="col-md-12">
                    <!-- Formulario de Altas -->
                    <form role="form">
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
                                        <p></p>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" class="form-control" id="nombre" name="txtnombre" placeholder="Ingrese nombre">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="apellidos">Apellidos</label>
                                                    <input type="text" class="form-control" id="apellidos" name="txtapellidos" placeholder="Ingrese apellidos ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                                    <input type="text" class="form-control" id="fecha_nacimiento" name="txtfecna" placeholder="Seleccione fecha de nacimiento">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="pais">País</label>
                                                    <input type="text" class="form-control" id="pais" name="txtpaisnac" placeholder="Ingrese país de nacimiento ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="ciudad">Ciudad</label>
                                                    <input type="text" class="form-control" id="ciudad" name="txtciudadnac" placeholder="Ingrese ciudad de nacimiento ">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="localidad">Localidad</label>
                                                    <input type="text" class="form-control" id="localidad" name="txtlocalidadnac" placeholder="Ingrese localidad de nacimiento ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="estado_migratorio">Indique su estado migratorio: </label>
                                                    Residencia<input type="radio"  id="estado_migratorio_residencia" name="rdestadomigratorio" value="1">
                                                    Nacionalidad<input type="radio"  id="estado_migratorio_nacionalidad" name="rdestadomigratorio" value="2">
                                                    Pasaporte<input type="radio"  id="estado_migratorio_pasaporte" name="rdestadomigratorio" value="3">
                                                </div>
                                                <div class="col-md-6">
                                                    <label id="lblnacionalidad" for="nacionalidad">Nacionalidad</label>
                                                    <input type="text" class="form-control" id="txtnacionalidad" name="txtnacionalidad" placeholder="Ingrese la nacionalidad" data-toggle="popover" data-placement="right" data-content="Si dispone de nacionalidad múltiple, escribalas separadas por coma.">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                        <div class="row">                                           
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4><span class="label label-primary">Fotografía</span></h4>
                                                        <div class="panel panel-default">
                                                            <div id="boxpicture" class="boxpictures"></div>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">  
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button id="take-pic" type="button" class="btn btn-default btn-sm pull-right">
                                                            Hacer foto <span class="glyphicon glyphicon-camera"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4><span class="label label-primary">Vista previa</span></h4>
                                                        <div id="preview-pic" class="panel panel-default boxpictures">
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button id="save" type="button" class="btn btn-default btn-sm pull-left">
                                                            Guardar <span class="glyphicon glyphicon-floppy-disk"></span>
                                                        </button>  
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button id="discard" type="button" class="btn btn-default btn-sm pull-right">
                                                            Descartar <span class="glyphicon glyphicon-remove"></span>
                                                        </button>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="datos_familiares">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3><span class="label label-primary">Datos Familiares</span></h3>
                                        <h4><span class="label label-primary">Vivienda</span></h4>
                                        <p></p>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label for="direccion">Dirección</label>
                                                    <input type="text" class="form-control" id="domicilio" name="txtdireccion" placeholder="Ingrese su dirección">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="vivienda">Piso o Vivienda</label>
                                                    <input type="text" class="form-control" id="vivienda" name="txtvivienda" placeholder="Ingrese piso, ej. 4-A">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="pais">País</label>
                                                    <input type="text" class="form-control" id="pais" name="txtpais" placeholder="Ingrese país">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="provincia">Provincia</label>
                                                    <input type="text" class="form-control" id="provincia" name="txtprovincia" placeholder="Ingrese provincia">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="poblacion">Población</label>
                                                    <input type="text" class="form-control" id="poblacion" name="txtpoblacion" placeholder="Ingrese poblacion">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="dpostal">Código Postal</label>
                                                    <input type="text" class="form-control" id=dpostal name="txtdpostal" placeholder="Ingrese código postal">
                                                </div>
                                            </div>
                                        </div>
                                        <h4><span class="label label-primary">Familia</span></h4>
                                        <div class="form-group">
                                            <div class="row">           
                                                <div class="col-md-6">
                                                    <label for="nm_padre">Nombre del Padre</label>
                                                    <input type="text" class="form-control" id="nm_padre" name="txtnm_padre" placeholder="Ingrese nombre del padre">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="nm_madre">Nombre de la Madre</label>
                                                    <input type="text" class="form-control" id="nm_madre" name="txtnm_madre" placeholder="Ingrese nombre de la madre">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="nm_conyuge">Nombre del cónyuge</label>
                                                    <input type="text" class="form-control" id="nm_conyuge" name="txtnm_conyuge" placeholder="Ingrese nombre del cónyuge">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="fecha_boda">Fecha de la boda</label>
                                                    <input type="text" class="form-control" id="fecha_boda" name="txtfecha_boda" placeholder="DD / MM / AAAA">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="lugar_boda">Lugar de la boda</label>
                                                    <input type="text" class="form-control" id="lugar_boda" name="txtlugar_boda" placeholder="Ingrese lugar de la boda">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="ministro_boda">Ministro que ofició</label>
                                                    <input type="text" class="form-control" id="ministro_boda" name="txtministro_boda" placeholder="Ingrese nombre del ministro">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="nm_hijos">Nombre de los hijos</label>
                                                    <input type="text" class="form-control" id="nm_hijos" name="txtnm_hijos" placeholder="Ingrese los nombres de los hijos separados por coma"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="datos_profesionales">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3><span class="label label-primary">Datos Profesionales</span></h3>
                                        <p></p>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="grado_estudios">Grado de Estudios</label>
                                                    <input type="text" class="form-control" id="grado_estudios" name="txtgrado_estudios" placeholder="lista grados estudios">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="estudio_realizado">Estudio Realizado</label>
                                                    <input type="text" class="form-control" id="estudio_realizado" name="txtestudio_realizado" placeholder="Ingrese estudio realizado">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="otros_estudios">Otros Estudios</label>
                                                    <input type="text" class="form-control" id="otros_estudios" name="txtotros_estudios" placeholder="Ingrese otros estudios o cursos">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="idiomas">Idiomas</label>
                                                    <input type="text" class="form-control" id="idiomas" name="txtidiomas" placeholder="Ingrese idiomas">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="ocupacion">Ocupación</label>
                                                    <input type="text" class="form-control" id="ocupacion" name="txtocupacion" placeholder="Ingrese ocupación">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="puesto">Puesto de Trabajo</label>
                                                    <input type="text" class="form-control" id="puesto" name="txtpuesto" placeholder="Puesto de trabajo">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="empresa">Empresa</label>
                                                    <input type="text" class="form-control" id="empresa" name="txtempresa" placeholder="Ingrese empresa">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="lugar">Lugar</label>
                                                    <input type="text" class="form-control" id="lugar" name="txtlugar" placeholder="Ingrese lugar">
                                                </div>
                                            </div>
                                        </div>                       
                                        <div class="form-group">
                                            <div class="row">           
                                                <div class="col-md-6">
                                                    <label for="nm_padre">Nombre del Padre</label>
                                                    <input type="text" class="form-control" id="nm_padre" name="txtnm_padre" placeholder="Ingrese nombre del padre">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="nm_madre">Nombre de la Madre</label>
                                                    <input type="text" class="form-control" id="nm_madre" name="txtnm_madre" placeholder="Ingrese nombre de la madre">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="comentarios">Comentarios</label>
                                                    <input type="text" class="form-control" id="comentarios" name="txtcomentarios" placeholder="Ingrese algún comentario"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="datos_espirituales">
                                Datos Espirituales
                            </div>
                            <div class="tab-pane fade" id="datos_espirituales_avanzado">
                                Datos Espirituales Avanzado
                            </div>
                        </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-default">Guardar</button>
                        <button type="reset" class="btn btn-default">Restablecer</button>
                        <button type="button" class="btn btn-default">Consula rápida</button>
                        <button type="button" class="btn btn-default">Salir</button>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <h4><span class="label label-default">ID Miembro</span></h4>
                                <h4><span class="label label-default">123456</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <hr>

        <footer>
            <p><?php echo _MIN_COPYRIGHT ?></p>
        </footer>
    </div> <!-- /container --><!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>-->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.js"><\/script>')</script>

    <script src="../js/vendor/bootstrap.min.js"></script>

    <script src="../js/main.js"></script>

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
