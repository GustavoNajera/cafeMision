<?php
//Se obtiene la información de la empresa
include_once '../../business/OrganizationBusiness.php';
include_once '../../business/TextPageBusiness.php';
$organization = (new OrganizationBusiness())->getOrganizationBusiness();
//Se obtienen los textos en el lenguaje elegido
$text = (new TextPageBusiness())->getTextByPageBusiness("all");
?>
<!-- RD Navbar-->
<div class="rd-navbar-wrap">
    <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-sidebar" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-sidebar" data-stick-up-clone="false" class="rd-navbar rd-navbar-default">
        <div class="rd-navbar-inner">
            <div class="rd-navbar-panel">
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <?php
                if (!session_id())
                    @ session_start();
                $language = isset($_SESSION["language"]) ? $_SESSION["language"] : "ingles";
                if ($language == "ingles") {
                    ?>  
                    <div class="rd-navbar-brand"><a href="./" class="brand-name"><img src="../../public/images/logo-white-185x41i.png" alt="" width="185" height="41"/></a></div>

                    <?php
                } else {
                    ?> 
                    <div class="rd-navbar-brand"><a href="./" class="brand-name"><img src="../../public/images/logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
                    <?php
                }
                ?>
            </div>
            <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-nav-inner">
                    <ul class="rd-navbar-nav">



                        <li><a href="./about.php"><?= $text["item1"] ?></a>
                        </li>
                        <li><a href="./products.php"><?= $text["item2"] ?></a></li>
                        <li><a href="./gallery.php"><?= $text["item3"] ?></a></li>
                        <li><a href="./contact.php"><?= $text["item4"] ?> </a></li>
                        <li><a href="./testimonials.php"><?= $text["item5"] ?></a>
                        </li>
                        <?php
                        if (!session_id())
                            @ session_start();
                        if (!isset($_SESSION["id"])) {
                            ?>
                            <li><a href="./"><?= $text["item6"] ?></a>
                                <ul class="rd-navbar-dropdown">
                                    <li><a href="../../business/actions/ActionLanguage.php?action=es"><?= $text["item15"] ?></a></li>
                                    <li><a href="../../business/actions/ActionLanguage.php?action=in"><?= $text["item16"] ?></a></li>
                                </ul>
                            </li>
                            <li><a href="./register.php"><?= $text["item7"] ?></a>
                            </li>
                            <li><a href="./session.php"><?= $text["item8"] ?></a>
                            </li>
                        <?php } else { ?>
                            <li><a href="../../business/actions/ActionLogOut.php"><?= $text["item9"] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>