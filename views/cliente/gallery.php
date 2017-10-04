<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include '../general/head.php' ?>
    <?php
        //Se obtiene la información de la empresa
        include_once '../../business/GalleryBusiness.php';
        include_once '../../business/TextPageBusiness.php';
        $listGallery = (new GalleryBusiness())->getAllGalleryBusiness();
        
         if ( ! session_id() ) @ session_start();
        $language = isset($_SESSION["language"])?$_SESSION["language"] : "ingles";
        //Se obtienen los textos en el lenguaje elegido
        $text = (new TextPageBusiness())->getTextByPageBusiness("gallery");
        
        //Se obtiene la ruta de las imágenes
        $pathTem = json_decode(file_get_contents("../../config.json"),true)["IMG"];
        $pathGallery = $pathTem["imgGallery"];
        $pathTemplate = $pathTem["imgTemplate"];
        
        $filtrado = (isset($_GET["filtrado"]))? $_GET["filtrado"] : "";
    ?>
    <title><?=$text["TituloPrincipal"]?></title>
    <title>Galeria</title>
    
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
            <div class="page-title">
                <div class="page-title-content">
                    <div class="shell">
                       <p class="page-title-header"><?=$text["TituloPrincipal"]?></p>
                    </div>
                </div>
            </div>
            <section class="section-xl bg-periglacial-blue text-center">
              <div class="row">
                <div class="col-lg-12">
                  <div data-isotope-layout="masonry" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope cobbles-grid">
                    <div class="row row-condensed">
                      
                        
                        <?php foreach ($listGallery as $image){ ?>
                            <div data-filter="*" class="col-xs-12 col-sm-6 col-md-3 isotope-item">
                                <?php $description = ($language == "spanish")?  $image->descriptionEs : $image->descriptionIn; ?>
                                <a data-photo-swipe-item="" data-size="1200x968" href="<?=$pathGallery . $image->image?>" class="thumbnail-gallery"><img src="<?=$pathGallery . $image->image?>" width="480" height="290" alt="">
                                    <div class="thumbnail-caption"><span class="icon icon-lg fa-search-plus"></span>
                                        <p class="description"><?=$description?></p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        
                        
                    </div>
                  </div>
                </div>
              </div>
            </section>

                        <footer class="page-footer page-footer-default">
                <div class="shell">
                  <div class="range range-xs-center">
                    <div class="cell-lg-10"><a href="./" class="brand"><img src="../../public/images/logo-white-185x41.png" alt="" width="185" height="41"/></a>

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
        <?php include '../general/rightMenu.php' ?>
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
    <?php include_once '../general/footerAndScript.php';?>
  </body>
</html>