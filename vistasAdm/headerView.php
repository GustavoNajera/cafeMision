<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button> <a class="navbar-brand">Café Misión</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="administracion.php?seccion=empresa">EMPRESA</a>
            </li>
            <!--            <li>
                            <a href="administracion.php?seccion=proceso">ETAPAS PRODUCCIÓN</a>
                        </li>-->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">ETAPAS PRODUCCIÓN
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="administracion.php?seccion=ingresarproceso">INGRESAR ETAPA</a></li>
                    <li><a href="administracion.php?seccion=actualizarproceso">ACTUALIZAR ETAPA</a></li>
                    <li><a href="#">ELIMINAR ETAPA</a></li> 
                </ul>
            </li>
            <li>
                <a href="#">ENLACE</a>
            </li>

            <li>
                <a href="#">ENLACE</a>
            </li>

            <li>
                <a href="#">ENLACE</a>
            </li>

            <li>
                <a href="#">SALIR</a>
            </li>
        </ul>
    </div>
</nav>