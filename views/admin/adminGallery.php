<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include 'views/general/head.php' ?>
    
    <?php
        
        include_once './business/GalleryBusiness.php';
        include_once './business/TextPageBusiness.php';
        
        //Se obtienen los elementos de la galería en el lenguaje especificado
        $listGallery = (new GalleryBusiness)->getAllGalleryLenBusiness();
        
        //Se obtiene la ruta de las imágenes
        $pathTem = json_decode(file_get_contents("./config.json"),true)["IMG"];
        $pathTemplate = $pathTem["imgTemplate"];
        $pathGallery = $pathTem["imgGallery"];
    ?>
    <title>Principal Admin</title>
    
    <body>
        <div class="page">
          <main id="perspective" class="page-content">
            <div class="content-wrapper">
              <div class="page-header page-header-perspective">
                  <div class="page-header-left"><a href="./admin" class="brand"><img src="<?=$pathTemplate?>logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
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
                      <p class="page-title-header">Administración</p>
                        <div class="unit unit-spacimg-md unit-xs-horizontal unit-align-center unit-middle">                              
                        </div>
                    </div>
                  </div>
                </div>
                  
                <section class="section-xl bg-periglacial-blue text-center">
                    <div class="shell">
                      <div class="range range-sm-center range-75">
                        <div class="cell-xs-12">
                          <h2>Galería</h2>
                          <div class="p text-width-medium">
                            <h3>Asegurese de no dejar ningún campo sin texto.<br>
                                La imagen es la misma para el elemento en ambos lenguajes
                            </h3>
                          </div>
                        </div>
                        <div class="cell-lg-10">
                            <blockquote class="quote-review" style="background-color: #c0a16b">
                                 <form  enctype="multipart/form-data" method="POST" action="./actionGallery?action=insert">
                                     
                                    <div class="quote-fullwidth-body">
                                        
                                        <div class="range range-sm-bottom range-15">
                                          
                                            <div class="range range-sm-bottom range-15">
                                                <div class="cell-sm-12 text-center">
                                                    <h3>Insertar un nuevo elemento en Glería</h3>
                                                </div>
                                                
                                                <div class="cell-sm-6">
                                                  <div class="form-group">
                                                    <label class="form-label-outside">Descripción en español *</label>
                                                    <input type="text" name="descriptionEs" required class="form-control">
                                                  </div>
                                                </div>
                                                
                                                <div class="cell-sm-6">
                                                  <div class="form-group">
                                                     <label class="form-label-outside">Descripción en ingles *</label>
                                                     <input type="text" name="descriptionIn" required class="form-control">
                                                  </div>
                                                </div>
                                              </div>
                                            
                                            <div class="range range-sm-bottom range-15">
                                                <div class="cell-sm-12">
                                                  <div class="form-group">
                                                    <label class="form-label-outside">Imagen *</label>
                                                    <input required type="file" class="btn-block" name='image' id="imagen" accept="image/*">
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="range range-sm-bottom range-15">
                                                <div class="cell-sm-6">
                                                  <div class="form-group">
                                                    <button type="submit" name="button1id" class="btn btn-sm btn-default-size btn-success btn-circle">Insertar</button>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </form> 
                            </blockquote>
                          
                        <?php foreach ($listGallery as $gallery){?>
                           
                            <blockquote class="quote-review">
                                 <form  enctype="multipart/form-data" method="POST" action="./actionGallery?action=update">
                                    <!-- Input para almacenar información no visible al usuario -->
                                    <input hidden type="text" name="idgallery" value="<?=$gallery->idgallery?>">
                                    <input hidden type="text" name="imageOriginal" value="<?=$gallery->image?>">
                                     
                                    <div class="quote-review-left">
                                        <div class="quote-review-avatar"><img src="<?=$pathGallery . $gallery->image?>" alt="" width="100" height="100" class="quote-review-image"/></div>
                                    </div>
                                    <div class="quote-fullwidth-body">
                                        
                                        <div class="range range-sm-bottom range-15">
                                          
                                            <div class="range range-sm-bottom range-15">
                                                
                                                <div class="cell-sm-6">
                                                  <div class="form-group">
                                                    <label class="form-label-outside">Descripción en español *</label>
                                                    <input type="text" name="descriptionEs" required class="form-control" value="<?=$gallery->descriptionEs?>">
                                                  </div>
                                                </div>
                                                
                                                <div class="cell-sm-6">
                                                  <div class="form-group">
                                                     <label class="form-label-outside">Descripción en ingles *</label>
                                                     <input type="text" name="descriptionIn" required class="form-control" value="<?=$gallery->descriptionIn?>">
                                                  </div>
                                                </div>
                                              </div>
                                            
                                            <div class="range range-sm-bottom range-15">
                                                <div class="cell-sm-12">
                                                  <div class="form-group">
                                                    <label class="form-label-outside">Nueva imagen *</label>
                                                    <input type="file" class="btn-block" name='image' id="imagen" accept="image/*">
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="range range-sm-bottom range-15">
                                                <div class="cell-sm-6">
                                                  <div class="form-group">
                                                    <button type="submit" name="button1id" class="btn btn-sm btn-default-size btn-success btn-circle">Actualizar</button>
                                                  </div>
                                                </div>
                                                <div class="cell-sm-6">
                                                  <div class="form-group">
                                                      <a href="./actionGallery?action=delete&&idgallery=<?=$gallery->idgallery?>&&image=<?=$gallery->image?>" class="btn btn-sm btn-default-size btn-danger btn-circle">Eliminar</a>
                                                  </div>
                                                </div>

                                              </div>
                                        </div>
                                    </div>
                                </form> 
                            </blockquote>
                             
                         <?php } ?> 
                        </div>
                      </div>
                    </div>
                  </section>

                <footer class="page-footer page-footer-default">
                  <div class="shell">
                    <div class="range range-xs-center">
                      <div class="cell-lg-10"><a href="./admin" class="brand"><img src="<?=$pathTemplate?>logo-white-185x41.png" alt="" width="185" height="41"/></a>
                        
                       
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
            
              
              <?php include 'views/general/rightMenuAdmin.php'; ?>
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