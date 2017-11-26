<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
        <meta name="description" content="Ejemplo de Geolocalización con HTML5" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="web_author" content="Yamil Gonzales" />
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <title>Zafacon</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <body>
        <div class="container">
            <br>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Mapa:</label>
                            </div>
                            <!-- Add Google Maps -->
                            <div id="googleMap">
                                <img src="img/1.png">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Estado:</label>
                            <div class="form-group">
                                <button class="btn btn-success" disabled="true"><b>Lleno</b> <span class="glyphicon glyphicon-ok-circle"></span></button>
                            </div>
                            <div class="form-group">
                                <label>Zona:</label>
                                <select class="form-control" id="cmbZona"></select>
                            </div>
                            <div class="form-group">
                                <label>Tipo de Zona:</label>
                                <select class="form-control" id="cmbTipoZona"></select>
                            </div>
                            <div class="form-group">
                                <label>Bateria:</label>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                        100% 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="panel-footer"><h4><b>ChilangaCorp</b></h4></div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>        
    </body>
</html>
