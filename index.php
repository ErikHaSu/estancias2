<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estadisticas</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="librerias/jquery-3.3.1.min.js"></script>
    <script src="librerias/plotly-latest.min.js"></script>
</head>
<body>
    <div class="container">
        <div clas="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                    <h1>Estadisticas de SEV</h1> 
                    </div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="cargaGeneral"></div>
                            </div>
                            <div class="col-sm-12">
                                <div id="cargaEscuela"></div>
                            </div>
                            <div class="col-sm-12">
                                <div id="cargaGenero"></div>
                            </div>
                            <div class="col-sm-12">
                                <div id="cargaEdad"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#cargaGeneral').load('general.php');
        $('#cargaEscuela').load('escuela.html');
        $('#cargaGenero').load('genero.html');
        $('#cargaEdad').load('edad.html');
    });
</script>