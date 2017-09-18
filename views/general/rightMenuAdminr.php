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
        <div class="rd-navbar-brand"><a href="./views/cliente/index.php" class="brand-name"><img src="../../public/images/logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
      </div>
      <div class="rd-navbar-nav-wrap">
        <div class="rd-navbar-nav-inner">        
            <ul class="rd-navbar-nav">
                <li ><a href="./adminUser.php"><?=$text["item10"]?></a></li> 
                <li ><a href="./adminOrganization.php"><?=$text["item14"]?>n</a></li>
                <li><a href="./adminProduct.php"><?=$text["item2"]?></a></li>
                <li><a href="./adminGallery.php"><?=$text["item3"]?></a></li>
                <li><a href="./adminProcess.php"><?=$text["item11"]?></a></li>
                <li><a href="./adminPartner.php"><?=$text["item12"]?></a></li>
                <li><a href="./adminTextPage.php"><?=$text["item13"]?></a></li>
                <li><a href="../../business/actions/ActionLogOut.php"><?=$text["item9"]?></a></li>
            </ul>
        </div>
      </div>
    </div>
  </nav>
</div>