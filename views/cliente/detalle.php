<?php 
    //Si no se especifica el producto a mostrar se redireccionar a la vista de productos
    if($filtrado == ""){ 
        header("Location: ./products");
    }
?>

<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include_once 'views/general/head.php' ?>
    
    <?php
        //Se obtiene la información de la empresa
        include_once './business/ProductBusiness.php';
        include_once './business/TextPageBusiness.php';
        $listProduct = (new ProductBusiness())->getAllproductBusiness();
        $productDetail = (new ProductBusiness())->getOneproductBusiness($filtrado);
        
         if ( ! session_id() ) @ session_start();
        $language = isset($_SESSION["language"])?$_SESSION["language"] : "ingles";

        $descriptionDetail = ($language == "spanish")?  $productDetail->descriptiones : $productDetail->descriptionin; 
        $nameDetail = ($language == "spanish")?  $productDetail->namein : $productDetail->namees; 
              
        
        //Se obtienen los textos en el lenguaje elegido
        $text = (new TextPageBusiness())->getTextByPageBusiness("detalle");
        
        //Se obtiene la ruta de las imágenes
        $pathTem = json_decode(file_get_contents("./config.json"),true)["IMG"];
        $pathProduct = $pathTem["imgProduct"];
        $pathTemplate = $pathTem["imgTemplate"];
    ?>
    
    <title><?= $filtrado ?></title>
    
    <body>       
        <div class="page">
          <main id="perspective" class="page-content">
            <div class="content-wrapper">
              <div class="page-header page-header-perspective">
                <div class="page-header-left"><a href="./" class="brand"><img src="<?=$pathTemplate?>logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
                <div class="page-header-right">
                  <div id="perspective-open-menu" data-custom-toggle=".perspective-menu-toggle" data-custom-toggle-hide-on-blur="true"><span class="perspective-menu-text">Menu</span>
                    <button class="perspective-menu-toggle"><span></span></button>
                  </div>
                </div>
              </div>
              <div id="wrapper">
                <section class="section-xl bg-periglacial-blue">
                  <div class="shell"><a href="./products" class="link link-primary link-return">Back</a>
                      <article class="product-single" style="padding: 3%;">
                      <div class="product-single-left">
                        
                          <div class="cell-sm-6 cell-md-4 height-fill">
                            <div class="thumbnail-card"><img src="<?=($pathProduct.$productDetail->image)?>" alt="" width="370" height="310" class="thumbnail-card-image"/>
                            </div>
                          </div>
                          
                      </div>
                       <div class="product-single-body">
                            <p class="product-single-title"><?= $nameDetail ?></p>
                            <div class="product-single-text">
                                <p><?=$descriptionDetail?></p>
                            </div>
                        </div>
                    </article>
                  </div>
                </section>
                  
                <!-- Se muestran los demas prodcutos -->
                <section class="section-xl bg-gray-dark bg-image text-center">
                    <div class="shell">
                      <div class="range range-50">
                        <div class="cell-xs-12">
                          <h2><?=$text["productosSimilares"]?></h2>
                        </div>
                        <div class="cell-xs-12">
                          <div class="range range-30">
                              
                              
                            <?php foreach ($listProduct as $product){?>
                                <div class="cell-sm-6 cell-md-4 height-fill">
                                    <?php 
                                        $description = ($language == "spanish")?  $product->descriptiones : $product->descriptionin; 
                                        $name = ($language == "spanish")?  $product->namees : $product->namein; 
                                    ?>
                                  <div class="thumbnail-card"><img src="<?=($pathProduct.$product->image)?>" alt="" width="370" height="310" class="thumbnail-card-image"/>
                                      <div class="thumbnail-card-body"><a href="./product?filtrado=<?=$name?>" class="thumbnail-card-header"><?=$name?></a>
                                      <div class="thumbnail-card-text">
                                        <p><?=$description?></p>
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
                    <div class="cell-lg-10"><a href="./" class="brand"><img src="public/images/logo-white-185x41.png" alt="" width="185" height="41"/></a>

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
        <div id="form-output-global" class="snackbars"></div>
        <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
          <div class="pswp__bg"></div>
          <div class="pswp__scroll-wrap">
            <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                <button title="Share" class="pswp__button pswp__button--share"></button>
                <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                <div class="pswp__preloader">
                  <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                      <div class="pswp__preloader__donut"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
              </div>
              <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
              <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
              <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
              </div>
            </div>
          </div>
        </div>
        <?php include_once 'views/general/footerAndScript.php';?>
    </body>
</html>