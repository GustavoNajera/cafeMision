<!-- RD Navbar-->
<div class="rd-navbar-wrap">
  <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-sidebar" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-sidebar" data-stick-up-clone="false" class="rd-navbar rd-navbar-default">
    <div class="rd-navbar-inner">
      <div class="rd-navbar-panel">
        <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
        <div class="rd-navbar-brand"><a href="./" class="brand-name"><img src="public/images/logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
      </div>
      <div class="rd-navbar-nav-wrap">
        <div class="rd-navbar-nav-inner">
            <ul class="rd-navbar-nav">
                <li class="active"><a href="./adminUser">Mi cuenta</a></li>
                <li class="active"><a href="./adminOrganization?filtrado=<?=$filtrado?>">Organización</a></li>
                <li><a href="./adminProduct">Productos</a></li>
                <li><a href="./adminGallery">Gallery</a></li>
                <li><a href="./adminProcess">Procesos </a></li>
                <li><a href="./adminPartner">Socios</a></li>
                <li class="active"><a href="./adminTextPage">Texto de página</a></li>
                <li><a href="./SessionLogOut">LogOut</a></li>
            </ul>
          
        </div>
      </div>
    </div>
  </nav>
</div>