<!DOCTYPE html>
<html>
    
    <head>
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
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>Brand</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="disabled">
                            <a href="#">Inicio<br></a>
                        </li>
                        <li class="active">
                            <a href="#">Inicio de Sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container"></div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header text-left">
                            <h1>Registro</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form class="form-horizontal" role="form" action="../Controlador/usuarios_cont.php" method="POST">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="mail" class="control-label">Email</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control input-sm" id="mail" placeholder="Email" name="mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="nomUsuario" class="control-label">Nombre de Usuario</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="nomUsuario"
                                    placeholder="Nombre de Usuario" name="usuario">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control input-sm" id="password"
                                    placeholder="Password" name="pass">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="nombre" class="control-label">Nombre
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="nombre" placeholder="Nombre" name="nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="apepat" class="control-label">Apellido Paterno</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="apepat" placeholder="Apellido Paterno" name="apepat">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="apemat" class="control-label">Apellido Materno</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="apemat" placeholder="Apellido Materno" name="apemat">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="edad" class="control-label">Edad
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="edad" placeholder="Edad" name="edad">
                                </div>
                                <div class="col-sm-offset-2 col-sm-10">
                                    <p class="help-block">Entre 18 y 99 años.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="dir" class="control-label">Direccion
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="dir" placeholder="Direccion" name="dir">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="tel" class="control-label">Telefono
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm" id="tel" placeholder="Telefono" name="tel">
                                </div>
                                <div class="col-sm-offset-2 col-sm-10">
                                    <p class="help-block">10 digitos.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-lg btn-primary">Registrarme!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="well well-lg">
                            <h2>Crea una cuenta!</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                                ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                                sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                                odio dui.</p>
                        </div>
                        <a href="#"><i class="fa fa-5x fa-cc-visa fa-fw text-success"></i></a>
                        <a href="#"><i class="fa fa-5x fa-fw fa-send pull-right text-danger"></i></a>
                        <a href="#"><i class="fa fa-5x fa-cc-paypal fa-fw pull-right text-warning"></i></a>
                        <a href="#"><i class="fa fa-5x fa-fw fa-twitter pull-right text-info"></i></a>
                        <a href="#"><i class="fa fa-5x fa-facebook fa-fw pull-right"></i></a>
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
                            <div class="col-md-12 hidden-xs text-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>