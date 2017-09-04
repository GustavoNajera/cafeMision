<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include 'views/general/head.php' ?>
    
    <?php
        //Se obtiene la información de la empresa
        include_once './business/OrganizationBusiness.php';
        include_once './business/TextPageBusiness.php';
        $organization = (new OrganizationBusiness())->getOrganizationBusiness();
        
        //Se obtienen los textos en el lenguaje elegido
        $text = (new TextPageBusiness())->getTextByPageBusiness("about");
        
        //Se obtiene la ruta de las imágenes
        $pathTem = json_decode(file_get_contents("./config.json"),true)["IMG"];
        $pathAbout = $pathTem["imgAbout"];
    ?>
    <title><?=$text["TituloPrincipal"]?></title>
    
    <body>
        <div class="page">
          <main id="perspective" class="page-content">
            <div class="content-wrapper">
              <div class="page-header page-header-perspective">
                  <div class="page-header-left"><a href="./" class="brand"><img src="<?=$pathAbout?>logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
                <div class="page-header-right">
                  <div id="perspective-open-menu" data-custom-toggle=".perspective-menu-toggle" data-custom-toggle-hide-on-blur="true"><span class="perspective-menu-text">Menu</span>
                    <button class="perspective-menu-toggle"><span></span></button>
                  </div>
                </div>
              </div>
              <div id="wrapper">
                <div class="page-title">
                  <div class="page-title-content">
                    <div class="shell">
                      <p class="page-title-header"><?=$text["TituloPrincipal"]?></p>
                    </div>
                  </div>
                </div>
                <section class="section-xl bg-periglacial-blue text-center">
                  <div class="shell">
                    <div class="p text-width-medium">
                      <p class="big"><?=$text["DescripcionPrincipal"]?></p>
                    </div>
                    <article class="box-service box-service-dark box-service-reverse">
                      <div class="box-service-left"><img src="<?=$pathAbout?>services-1-1170x490.jpg" alt="" width="1170" height="490" class="box-service-image"/>
                      </div>
                      <div class="box-service-body">
                        <div class="box-service-header">
                          <p class="box-service-title"><?=$text["mision"]?></p>
                        </div>
                        <div class="box-service-text">
                          <p><?=$organization->mission?></p>
                      </div>
                    </article>
                    <article class="box-service">
                      <div class="box-service-left"><img src="<?=$pathAbout?>services-2-1170x490.jpg" alt="" width="1170" height="490" class="box-service-image"/>
                      </div>
                      <div class="box-service-body">
                        <div class="box-service-header">
                          <p class="box-service-title"><?=$text["vision"]?></p>
                        </div>
                        <div class="box-service-text">
                          <p><?=$organization->vission?></p>
                      </div>
                    </article>
                    <article class="box-service box-service-dark box-service-reverse">
                      <div class="box-service-left"><img src="<?=$pathAbout?>services-3-1170x490.jpg" alt="" width="1170" height="490" class="box-service-image"/>
                      </div>
                      <div class="box-service-body">
                        <div class="box-service-header">
                          <p class="box-service-title"><?=$text["produccion"]?></p>
                        </div>
                        <div class="box-service-text">
                          <p><?=$organization->production?></p>
                      </div>
                    </article>
                    <article class="box-service">
                      <div class="box-service-left"><img src="<?=$pathAbout?>services-4-1170x490.jpg" alt="" width="1170" height="490" class="box-service-image"/>
                      </div>
                      <div class="box-service-body">
                        <div class="box-service-header">
                          <p class="box-service-title"><?=$text["responsabilidadSocial"]?></p>
                        </div>
                        <div class="box-service-text">
                          <p><?=$organization->socialresponsability?></p>
                      </div>
                    </article>
                    
                  </div>
                </section>

                <footer class="page-footer page-footer-default">
                  <div class="shell">
                    <div class="range range-xs-center">
                      <div class="cell-lg-10"><a href="./" class="brand"><img src="<?=$pathAbout?>logo-white-185x41.png" alt="" width="185" height="41"/></a>
                        
                        <div class="divider divider-small divider-light block-centered"></div>
                        <ul class="inline-list inline-list-md">
                          <h4>Universidad de Costa Rica - Trabajo Comunal 2017 </h4>
                        </ul>
                      </div>
                    </div>
                  </div>
                </footer>
              </div>
              <div id="perspective-content-overlay"></div>
            </div>
            <!-- RD Navbar-->
            <?php include 'views/general/rightMenu.php' ?>
          </main>
        </div>
        
        <?php include_once 'views/general/footerAndScript.php';?>
    </body>
</html>