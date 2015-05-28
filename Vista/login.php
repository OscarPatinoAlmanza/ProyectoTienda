<!DOCTYPE html>
<html>
    
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
        rel="stylesheet" type="text/css">

    </head>
    
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="lead nav nav-justified nav-pills">
                            <li>
                                <a href="games.html">Inicio</a>
                            </li>
                            <li class="active">
                                <a href="#">Iniciar Secion<br></a>
                            </li>
                            <li>
                                <a href="registro.php">Registrarse<br></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-header">
                            <h1>Iniciar Sesion</h1>
                        </div>
                        <form role="form" class="text-left" action="../Controlador/usuarios_login.php" method="POST">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="usuario">Usuario
                                </label>
                                <input class="form-control input-lg" id="usuario" placeholder="Teclear nombre de usuario."
                                type="text" name="usuario">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="pass">Contrasena.</label>
                                <input class="form-control input-lg" id="pass"
                                placeholder="Contrasena" type="password" name="pass">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="page-header">
                            <h1>No tengo cuenta</h1>
                        </div>
                        <a class="btn btn-block btn-lg btn-primary" href="registro.html">Crear una cuenta<br></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Sitios Recomendados</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="logos\xblogo.ico" class="center-block img-circle img-responsive">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="logos\ps4logo.png" class="center-block img-circle img-responsive">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="logos\steamlogo.ico"
                                        class="center-block img-circle img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <footer class="section section-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Footer header</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                            <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                            <br>Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-info text-right">
                            <br>
                            <br>
                        </p>
                        <div class="row">
                            <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 hidden-xs text-right">
                                <a href="https://twitter.com/CallMeProdigy"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="https://www.facebook.com/EsElDrizzy"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="https://github.com/Graves-"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>