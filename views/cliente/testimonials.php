<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include 'views/general/head.php' ?>
    
    <?php
        include_once './business/CommentBusiness.php';
        include_once './business/TextPageBusiness.php';
        
        //Se obtienen los comentarios
        $listComment = (new CommentBusiness())->getAllCommentBusiness();
        
        //Se obtienen los textos en el lenguaje elegido
        $text = (new TextPageBusiness())->getTextByPageBusiness("comment");
        
        //Se obtiene la ruta de las imágenes
        $pathTem = json_decode(file_get_contents("./config.json"),true)["IMG"];
        $pathUser = $pathTem["imgUser"];
        $pathTemplate = $pathTem["imgTemplate"];
    ?>
    <title><?=$text["TituloPrincipal"]?></title>
    
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
                  <div class="shell">
                    <div class="range range-sm-center range-75">
                      <div class="cell-xs-12">
                        <div class="p text-width-medium">
                          <p class="big"><?=$text["DescripcionPrincipal"]?></p>
                        </div>
                      </div>
                      <div class="cell-xs-12">
                          <?php 
                            if ( ! session_id() ) @ session_start();
                            if(isset($_SESSION["id"])){ 
                          ?>
                            <blockquote class="quote-review"  style="background-color: #c0a16b">
                                <form  enctype="multipart/form-data" method="POST" action="./actionComment?action=insert">
                                    <input hidden type="text" name="iduser" value="<?=$_SESSION["id"]?>">
                                   <div class="quote-fullwidth-body">
                                       <div class="range range-sm-bottom range-15">
                                      <div class="cell-sm-12">
                                           <div class="form-group">
                                               <label class="form-label-outside">Comentario *</label>
                                               <textarea name="comment" required class="form-control"></textarea>
                                           </div>
                                      </div>
                                      <div class="range range-sm-bottom range-15">
                                          <div class="cell-sm-6">
                                            <div class="form-group">
                                              <button type="submit" name="button1id" class="btn btn-sm btn-default-size btn-success btn-circle">Comentar</button>
                                            </div>
                                          </div>

                                      </div>
                                       </div>
                                   </div>
                               </form> 
                           </blockquote> 
                          <?php } ?>
                        <div data-isotope-layout="moduloColumns" class="row isotope">
                                
                             <?php foreach ($listComment as $comment){ ?>
                            
                                <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                                  <blockquote class="quote-card">
                                     <div class="quote-fullwidth-left">
                                        <div class="quote-fullwidth-avatar"><img src="<?=($pathUser . $comment->user->image) ?>" alt="" width="100" height="100"/>
                                        </div>
                                      </div>
                                    <div class="quote-card-header">
                                      <cite><?=$comment->user->user?></cite>
                                    </div>
                                    
                                    <p class="quote-card-text">
                                      <q><?=$comment->comment?></q>
                                    </p>
                                    
                                  </blockquote>
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
            
              
              <?php include 'views/general/rightMenu.php'; ?>
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