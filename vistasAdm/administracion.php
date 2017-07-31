<html>
    <head>
        <meta charset="UTF-8">
        <title>Café Misión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="../publico/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../publico/css/admStyle.css" rel="stylesheet" type="text/css"/> 
        <script src="../publico/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../publico/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row espacio">
                <div class="col-md-12">
                    <?php
                    include './headerView.php';
                    if (isset($_GET['seccion'])) {
                        if ($_GET['seccion'] == 'empresa') {
                            include './empresaView.php';
                        }
                        else if ($_GET['seccion'] == 'ingresarproceso') {
                            include './ingresarProcesoView.php';
                        }
                        else if ($_GET['seccion'] == 'actualizarproceso') {
                            include './actualizarProcesoView.php';
                        }
                    } else {
                        include './empresaView.php';
                    }
                    ?> 
                
                </div>
            </div>
        </div>
    </body>
</html>
