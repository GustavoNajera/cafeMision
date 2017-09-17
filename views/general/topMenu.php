<header class="page-header">
    <div class="rd-navbar-wrap">
        <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="40px" data-lg-stick-up-offset="35px" class="rd-navbar rd-navbar-dark">
            <div class="rd-navbar-inner">
                <div class="rd-navbar-panel">
                    <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                    <div class="rd-navbar-brand"><a href="./index.php" class="brand-name"><img src="../../public/images/logo-default-185x41.png" alt="" width="185" height="41"/></a></div>
                </div>
                <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-nav-inner">
                        <ul class="rd-navbar-nav">
                            <li>
                                <a href="./about.php">Sobre Nosotros</a>
                            </li>
                            <li><a href="./products.php">Productos</a></li>
                            <li><a href="./gallery.php">Galería</a></li>
                            <li><a href="./contact.php">Contacto</a></li>
                            <li><a href="./testimonials.php">Comentarios</a>
                            </li>
                             <?php
                            if (!session_id())
                                @ session_start();
                            if (!isset($_SESSION["id"])) {
                                ?>     
                                <li><a href="./">Idioma</a>
                                    <ul class="rd-navbar-dropdown">
                                        <li><a href="../../business/actions/ActionLanguage.php?action=es">Español</a></li>
                                    <li><a href="../../business/actions/ActionLanguage.php?action=in">Ingles</a></li>
                                    </ul>
                                </li>
                                <li><a href="./register.php">Registrarse</a>
                                </li>
                                <li>
                                    <a href="./session.php">Ingresar</a>
                                </li>
                            <?php } else { ?>
                                <li><a href="../../business/actions/ActionLogOut.php">Salir</a></li>
                            <?php } ?>                     
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>