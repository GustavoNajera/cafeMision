<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include '../general/head.php' ?>
    
    <?php
        
        include_once '../../business/PartnerBusiness.php';
        
        //Se obtienen los socios
        $listPartner = (new PartnerBusiness())->getAllPartenrBusiness();
        
        //Se obtiene la ruta de las imágenes
        $pathTem = json_decode(file_get_contents("../../config.json"),true)["IMG"];
        $pathTemplate = $pathTem["imgTemplate"];
        $filtrado = (isset($_GET["filtrado"]))? $_GET["filtrado"] : "";
    ?>
    <title>Principal Admin</title>
    
    <body>
        <div class="page">
          <main id="perspective" class="page-content">
            <div class="content-wrapper">
              <div class="page-header page-header-perspective">
                  <div class="page-header-left"><a href="./adminIndex.php?>" class="brand"><img src="<?=$pathTemplate?>logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
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
                    </div>
                  </div>
                </div>
                  
                <section class="section-xl bg-periglacial-blue text-center">
                    <div class="shell">
                      <div class="range range-sm-center range-75">
                        <div class="cell-xs-12">
                          <h2>Socios</h2>
                          <div class="p text-width-medium">
                            <h3>Asegurese de no dejar ningún campo sin texto.</h3>
                          </div>
                        </div>
                        <div class="cell-lg-10">
                            
                            
                            
                        <!-- Insertar un socio -->
                        <blockquote class="quote-review" style="background-color: #c0a16b">
                            
                            <form  enctype="multipart/form-data" method="POST" action="../../business/actions/ActionPartner.php?action=insert">
                                     
                                    <div class="quote-fullwidth-body">
                                        <div class="range range-sm-bottom range-15">
                                        <div class="cell-sm-12 text-center">    
                                            <h3>Insertar un socio</h3>
                                        </div>
                                        <div class="cell-sm-6">
                                            <div class="form-group">
                                                <label class="form-label-outside">Link *</label>
                                                <input type="text" name="link" required class="form-control">
                                            </div>
                                          </div>
                                            <div class="cell-sm-6">
                                            <div class="form-group">
                                                <label class="form-label-outside">Nombre *</label>
                                                <input type="text" name="name" required class="form-control">
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
                        
                        <!-- Actualizar socios existentes -->
                            
                        <?php foreach ($listPartner as $partner){?>
                           
                            <blockquote class="quote-review">
                                <form  enctype="multipart/form-data" method="POST" action="../../business/actions/ActionPartner.php?action=update">
                                    <!-- Input para almacenar información no visible al usuario -->
                                    <input hidden type="text" name="idpartner" value="<?=$partner->idpartner?>">
                                     
                                    <div class="quote-fullwidth-body">
                                        <div class="range range-sm-bottom range-15">
                                        <div class="cell-sm-6">
                                            <div class="form-group">
                                                <label class="form-label-outside">Link *</label>
                                                <input type="text" name="link" required class="form-control" value="<?=$partner->link?>">
                                            </div>
                                          </div>
                                            <div class="cell-sm-6">
                                            <div class="form-group">
                                                <label class="form-label-outside">Nombre *</label>
                                                <input type="text" name="name" required class="form-control" value="<?=$partner->name?>">
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
                                                      <a href="../../business/actions/ActionPartner.php?action=delete&&idpartner=<?=$partner->idpartner?>" class="btn btn-sm btn-default-size btn-danger btn-circle">Eliminar</a>
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
            
              
              <?php include '../general/rightMenuAdmin.php'; ?>
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