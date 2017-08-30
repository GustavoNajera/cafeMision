<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include 'views/general/head.php' ?>
    
    <?php
        //Se obtiene la información de la empresa
        include_once './business/ProductBusiness.php';
        include_once './business/TextPageBusiness.php';
        $listProduct = (new ProductBusiness)->getAllproductBusiness();
        
        //Se obtienen los textos en el lenguaje elegido
        $text = (new TextPageBusiness())->getTextByPageBusiness("products");
        
        //Se obtiene la ruta de las imágenes
        $pathTem = json_decode(file_get_contents("./config.json"),true)["IMG"];
        $pathProduct = $pathTem["imgProduct"];
    ?>
    <title><?=$text["TituloPrincipal"]?></title>
    
    <body>
        <div class="page">
          <main id="perspective" class="page-content">
            <div class="content-wrapper">
              <div class="page-header page-header-perspective">
                <div class="page-header-left"><a href="./" class="brand"><img src="<?=$pathProduct?>logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
                <div class="page-header-right">
                  <div id="perspective-open-menu" data-custom-toggle=".perspective-menu-toggle" data-custom-toggle-hide-on-blur="true"><span class="perspective-menu-text">Menu</span>
                    <button class="perspective-menu-toggle"><span></span></button>
                  </div>
                </div>
              </div>
              <div id="wrapper">
                <section style="background-image: url(<?=$pathProduct?>bg-image-1.jpg);" class="section-xl bg-gray-dark bg-image text-center">
                    <div class="shell">
                      <div class="range range-50">
                        <div class="cell-xs-12">
                          <h2><?=$text["TituloPrincipal"]?></h2>
                          <div class="p text-width-medium">
                            <p class="big"><?=$text["DescripcionPrincipal"]?></p>
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="range range-30">
                              
                            <?php foreach ($listProduct as $product){?>
                                <div class="cell-sm-6 cell-md-4 height-fill">
                                  <div class="thumbnail-card"><img src="<?=($pathProduct.$product->image)?>" alt="" width="370" height="310" class="thumbnail-card-image"/>
                                      <div class="thumbnail-card-body"><a href="./product-<?=$product->nameproduct?>" class="thumbnail-card-header"><?=$product->nameproduct?></a>
                                      <div class="thumbnail-card-text">
                                        <p><?=$product->description?></p>
                                      </div>
                                      
                                    </div>
                                  </div>
                                </div>
                            <?php }?>
                              
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>

                <footer class="page-footer page-footer-default">
                  <div class="shell">
                    <div class="range range-xs-center">
                      <div class="cell-lg-10"><a href="index.html" class="brand"><img src="<?=$pathAbout?>logo-white-185x41.png" alt="" width="185" height="41"/></a>
                        
                        <div class="divider divider-small divider-light block-centered"></div>
                        <ul class="inline-list inline-list-md">
                          <li><a href="#" class="icon icon-xs link-gray-light fa-facebook"></a></li>
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