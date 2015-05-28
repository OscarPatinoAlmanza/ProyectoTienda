<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
        rel="stylesheet" type="text/css">

        <?php 
            $compra = $_GET['compra'];
        ?>
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
                        <li class="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                <br>
                <br>
                    <!--COLUMNA CON EL ARTICULO-->
                    <div class="col-md-6 col-compra">
                        <img src="logos/kappa.png" class="img-responsive center-block imgCompra" id="imgCompra">
                    </div>
                    <!--COLUMNA CON LAS OPCIONES DE COMPRA-->
                     <div class="col-md-6">
                        <div class="panel panel-success">
                              <div class="panel-heading">
                                    <h3 class="panel-title text-center">Confirmar Compra</h3>
                              </div>
                              <div class="panel-body">
                                    <!--FILA PLATAFORMA-->
                                    <div class="row">
                                        <label>Elige la plataforma:</label>
                                        <div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                            Selecciona
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Xbox 360</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Xbox One</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PlayStation 3</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PlayStation 4</a></li>
                                          </ul>
                                        </div>
                                    </div>
                                    <!--FILA PRECIO-->
                                    <div class="row">
                                        <label>Precio</label>
                                        <input type="text" name="" id="input" class="form-control" value="Placeholder: sacar precio de BD" readonly="true">
                                    </div>
                                     <!--FILA clasificacion-->
                                    <div class="row">
                                        <label>Clasificacion</label>
                                        <input type="text" name="" id="input" class="form-control" value="Placeholder: sacar precio de BD" readonly="true">
                                    </div>
                                    <!--FILA COMPRAR-->
                                    <div class="row text-center">
                                        <br>
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>

                              </div>
                        </div>
                     </div>
                </div>
                <div class="row">
                    <h1>A title</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                            dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                            nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                            enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                            felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                            porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus
                            in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
                            laoreet.</p>
                </div>
            </div>
        </div>
        <footer class="section section-success">
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
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript">
            var compra = "<?php echo $compra; ?>";
            switch(compra){
                case 'Destiny':
                    $("#imgCompra").attr('src', 'logos/destiny.jpg');
                    $("#imgCompra").attr('width', '50%');
                    break; 
                default:
                break;
            }

        </script>
    </body>

</html>