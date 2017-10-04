<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include '../general/head.php'; ?>
    
    <?php
        /*Se verifica que venga especificado el lenguaje, en caso contrario se usa por defecto ingles*/
        $filtrado = (isset($_GET["filtrado"]))? $_GET["filtrado"] : "";
        if($filtrado == "") header("Location: ./adminOrganization.php?filtrado=ingles");
        
        include_once '../../business/OrganizationBusiness.php';
        
        //Se obtienen los datos de la organización en el lenguaje especificado
        $organization = (new OrganizationBusiness())->getOrganizationBusinessLan($filtrado);
        
        //Se obtiene la ruta de las imágenes
        $pathTem = json_decode(file_get_contents("../../config.json"),true)["IMG"];
        $pathTemplate = $pathTem["imgTemplate"];
    ?>
    <title>Principal Admin</title>
    
    <body>
        <div class="page">
          <main id="perspective" class="page-content">
            <div class="content-wrapper">
              <div class="page-header page-header-perspective">
                  <div class="page-header-left"><a href="./adminIndex.php?filtrado=<?=$filtrado?>" class="brand"><img src="<?=$pathTemplate?>logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
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
                            <p class="large">Mostrar elementos en: </p>
                            
                            <!-- Se especifica el lenguaje que desea administrar. -->
                            <?php if($filtrado != "ingles"){ ?>
                            <div style="margin: 10px;" class="unit-body"><a href="./adminOrganization.php?filtrado=ingles" class="btn btn-sm btn-circle">Ingles</a></div>
                                <div class="unit-body"><a href="./adminOrganization.php?filtrado=spanish" class="btn btn-sm btn-circle btn-primary">Español</a></div>
                            <?php }else {?>
                                <div style="margin: 10px;" class="unit-body"><a href="./adminOrganization.php?filtrado=ingles" class="btn btn-sm btn-circle  btn-primary">Ingles</a></div>
                                <div class="unit-body"><a href="./adminOrganization.php?filtrado=spanish" class="btn btn-sm btn-circle">Español</a></div>
                            <?php }?>
                                
                        </div>
                    </div>
                  </div>
                </div>
                  
                <section class="section-xl bg-periglacial-blue text-center">
                    <div class="shell">
                      <div class="range range-sm-center range-75">
                        <div class="cell-xs-12">
                          <h2>Textos de la Página</h2>
                          <div class="p text-width-medium">
                            <h3>Asegurese de no dejar ningún campo sin texto.</h3>
                          </div>
                        </div>
                        <div class="cell-lg-10">
                            
                            <form method="POST" action="../../business/actions/ActionOrganization.php?filtrado=<?=$filtrado?>&&action=update">
                                
                                <!-- Input que almacenan información no visible al usuario -->
                                <input hidden type="text" name="idorganization" value="<?=$organization->idorganization?>">
                                <input hidden type="text" name="language" value="<?=$organization->language?>">
                                
                                <blockquote class="quote-fullwidth">
                                    <div class="quote-fullwidth-body">
                                      <div class="quote-fullwidth-header">
                                        <cite>Historia</cite>
                                      </div>
                                        <div class="range range-sm-bottom range-15">
                                          <div class="cell-sm-12">
                                            <div class="form-group">
                                              <label class="form-label-outside"><?=$filtrado?> *</label>
                                              <textarea name="history" required class="form-control"><?=$organization->history?></textarea>
                                            </div>
                                          </div>

                                        </div>
                                    </div>
                                  </blockquote>

                                <blockquote class="quote-fullwidth">
                                    <div class="quote-fullwidth-body">
                                      <div class="quote-fullwidth-header">
                                        <cite>Correo</cite>
                                      </div>
                                        <div class="range range-sm-bottom range-15">
                                          <div class="cell-sm-12">
                                            <div class="form-group">
                                              <label class="form-label-outside"><?=$filtrado?> *</label>
                                              <input type="email" name="email" required class="form-control" value="<?=$organization->email?>">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </blockquote>

                                <blockquote class="quote-fullwidth">
                                    <div class="quote-fullwidth-body">
                                      <div class="quote-fullwidth-header">
                                        <cite>facebook</cite>
                                      </div>
                                        <div class="range range-sm-bottom range-15">
                                          <div class="cell-sm-12">
                                            <div class="form-group">
                                              <label class="form-label-outside"><?=$filtrado?> *</label>
                                              <input type="text" name="facebook" required class="form-control" value="<?=$organization->facebook?>">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </blockquote>

                                <blockquote class="quote-fullwidth">
                                    <div class="quote-fullwidth-body">
                                      <div class="quote-fullwidth-header">
                                        <cite>Misión</cite>
                                      </div>
                                        <div class="range range-sm-bottom range-15">
                                          <div class="cell-sm-12">
                                            <div class="form-group">
                                              <label class="form-label-outside"><?=$filtrado?> *</label>
                                              <input type="text" name="mission" required class="form-control" value="<?=$organization->mission?>">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </blockquote>

                                <blockquote class="quote-fullwidth">
                                    <div class="quote-fullwidth-body">
                                      <div class="quote-fullwidth-header">
                                        <cite>Visión</cite>
                                      </div>
                                        <div class="range range-sm-bottom range-15">
                                          <div class="cell-sm-12">
                                            <div class="form-group">
                                              <label class="form-label-outside"><?=$filtrado?> *</label>
                                              <input type="text" name="vission" required class="form-control" value="<?=$organization->vission?>">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </blockquote>

                                <blockquote class="quote-fullwidth">
                                    <div class="quote-fullwidth-body">
                                      <div class="quote-fullwidth-header">
                                        <cite>Producción</cite>
                                      </div>
                                        <div class="range range-sm-bottom range-15">
                                          <div class="cell-sm-12">
                                            <div class="form-group">
                                              <label class="form-label-outside"><?=$filtrado?> *</label>
                                              <input type="text" name="production" required class="form-control" value="<?=$organization->production?>">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </blockquote>

                                <blockquote class="quote-fullwidth">
                                    <div class="quote-fullwidth-body">
                                      <div class="quote-fullwidth-header">
                                        <cite>Responsabilidad social</cite>
                                      </div>
                                        <div class="range range-sm-bottom range-15">
                                         <div class="cell-sm-12">
                                            <div class="form-group">
                                              <label class="form-label-outside"><?=$filtrado?> *</label>
                                              <input type="text" name="socialresponsability" required class="form-control" value="<?=$organization->socialresponsability?>">
                                            </div>
                                          </div>
                                          <div class="cell-sm-6">
                                              <button type="submit" name="button1id" class="btn btn-sm btn-default-size btn-primary btn-circle">Actualizar</button>
                                          </div>
                                        </div>
                                    </div>
                                  </blockquote>
                            </form>
                        </div>
                      </div>
                    </div>
                  </section>  

                <footer class="page-footer page-footer-default">
                  <div class="shell">
                    <div class="range range-xs-center">
                        <div class="cell-lg-10"><a href="./adminOrganization.php" class="brand"><img src="<?=$pathTemplate?>logo-white-185x41.png" alt="" width="185" height="41"/></a>
                        
                       
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
            
              <?php include_once '../general/rightMenuAdmin.php'; ?>
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