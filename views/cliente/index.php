<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include 'views/general/head.php' ?>
  
    <title>HOME</title>
    
    <body>
        <div class="page">
          
            <?php include 'views/general/topMenu.php'; ?>
            
            <?php
                //Se obtiene la información de la empresa
                include_once './business/OrganizationBusiness.php';
                include_once './business/ProcessBusiness.php';
                include_once './business/TextPageBusiness.php';
                include_once './business/CommentBusiness.php';
                include_once './business/ProductBusiness.php';
                
                $organization = (new OrganizationBusiness())->getOrganizationBusiness();
                $listProcess = (new ProcessBusiness())->getAllprocessBusiness();
                $listComment = (new CommentBusiness())->getAllCommentBusiness();
                $listProduct = (new ProductBusiness())->getAllproductBusiness();
                
                //Se obtienen los textos en el lenguaje elegido
                $text = (new TextPageBusiness())->getTextByPageBusiness("index");
        
                //Se obtiene la ruta de las imágenes
                $pathTem = json_decode(file_get_contents("./config.json"),true)["IMG"];
                $pathAbout = $pathTem["imgAbout"];
                $pathProduct = $pathTem["imgProduct"];
                $pathUser = $pathTem["imgUser"];
                $pathProcess = $pathTem["imgProcess"];
                
            ?>
            
          <section style="background-image: url(public/images/bg-image-4.jpg);" class="jumbotron-custom jumbotron-custom-2 bg-gray-base bg-image">
            <div class="jumbotron-custom-content">
              <div class="shell">
                <div class="range">
                  <div class="cell-sm-10 cell-md-9 cell-lg-7">
                    <h1><?=$text["TituloPrincipal"]?></h1>
                    <p class="large"><?=$organization->history?></p><a href="./about" class="btn btn-style-1 btn-primary"><?=$text["leerMas"]?></a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="section-xl bg-periglacial-blue text-center text-md-left">
            <div class="shell-fluid shell-condensed">
              <div class="range range-md-reverse range-xs-middle range-md-right range-50">
                <div class="cell-md-5 cell-lg-4">
                  <div class="inset-1">
                    <h2><?=$text["historia"]?></h2>
                    <div class="p text-width-smallest">
                      <p class="big"><?=$organization->history?></p>
                    </div><a href="./about" class="btn btn-sm btn-style-1 btn-primary"><?=$text["leerMas"]?></a>
                  </div>
                </div>
                <div class="cell-md-7 cell-lg-6">
                  <div class="row row-gutter-custom range-15">
                    <div class="col-xs-4">
                        <figure class="figure-fullwidth"><img src="<?=$pathAbout?>about-1-300x460.jpg" alt="" width="300" height="460"/>
                      </figure>
                    </div>
                    <div class="col-xs-4">
                      <figure class="figure-fullwidth"><img src="<?=$pathAbout?>about-2-300x460.jpg" alt="" width="300" height="460"/>
                      </figure>
                    </div>
                    <div class="col-xs-4">
                      <figure class="figure-fullwidth"><img src="<?=$pathAbout?>about-3-300x460.jpg" alt="" width="300" height="460"/>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="bg-gray-dark">
            <div class="shell-fluid shell-condensed">
              <div class="range range-condensed">
                <div class="cell-md-6 cell-md-6-mod-1 image-wrap-left bg-gray-dark">
                  <div class="image-wrap-inner">
                    <h2><?=$text["procesos"]?></h2>
                    <p class="big"><?=$text["descripcionProcesos"]?></p>
                  </div>
                </div>
                <div style="background-image: url(public/images/home-three-3-1011x800.jpg)" class="cell-md-6 cell-md-6-mod-2 image-wrap-right bg-gray-dark bg-image">
                  <div class="image-wrap-inner">
                    <div class="range range-condensed range-inner-bordered">
                        <?php foreach ($listProcess as $process){ ?>
                        <?php 
                            $description = ($filtrado == "spanich")?  $process->descriptiones : $process->descriptionin; 
                            $name = ($filtrado == "spanich")?  $process->namees : $process->namein; 
                        ?>
                            <div class="cell-xs-6">
                                <article class="box-icon">
                                    <figure class="box-icon-image"><img src="<?=$pathProcess . $process->image ?>" alt="" width="84" height="84"/>
                                    </figure>
                                    <p class="box-icon-header"><?=$name?></p>
                                    <p class="box-icon-text"><?=$description?></p>
                                </article>
                            </div>
                        <?php } ?>
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </section>
          <section class="section-xl bg-periglacial-blue text-center">
            <div class="shell">
              <div class="range range-sm-center range-75">
                <div class="cell-xs-12">
                  <h2><?=$text["testimonios"]?></h2>
                  <div class="p text-width-medium">
                    <p class="big"><?=$text["descripcionTestimonios"]?></p>
                  </div>
                </div>
                <div class="cell-xs-12">
                  <!-- Owl Carousel-->
                  <div data-items="1" data-stage-padding="0" data-loop="true" data-margin="20" data-xs-margin="30" data-mouse-drag="false" data-nav="true" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" class="owl-carousel owl-carousel-modern owl-style-1">
                    
                      
                    <?php foreach ($listComment as $comment){ ?>
                        <div class="item">
                            <blockquote class="quote-centered">
                                <div class="quote-centered-avatar"><img src="<?=$pathUser . $comment->user->image ?>" alt="" width="100" height="100"/>
                                </div>
                                <cite><?=$comment->user->user?></cite>
                                <p class="quote-centered-text">
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

          <section style="background-image: url(public/images/bg-image-1.jpg);" class="section-xl bg-gray-dark bg-image text-center">
            <div class="shell">
              <div class="range range-50">
                <div class="cell-xs-12">
                  <h2><?=$text["productos"]?></h2>
                  <div class="p text-width-medium">
                    <p class="big"><?=$text["descripcionProductos"]?></p>
                  </div>
                </div>
                <div class="cell-xs-12">
                  <div class="range range-30">
                    
                      
                      
                    <?php foreach ($listProduct as $product){?>
                       <?php 
                            $description = ($filtrado == "spanich")?  $product->descriptiones : $product->descriptionin; 
                            $name = ($filtrado == "spanich")?  $product->namees : $product->namein; 
                        ?>
                        <div class="cell-sm-6 cell-md-4 height-fill">
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
                <div class="cell-xs-12"><a href="./products" class="btn btn-sm btn-style-1 btn-primary"><?=$text["leerMas"]?></a></div>
              </div>
            </div>
          </section>

          <section class="section-lg bg-periglacial-blue text-center">
            <div class="shell">
              <div class="range range-sm-center range-75">
                <div class="cell-xs-12">
                    <h2><?=$text["sobreNosotros"]?></h2>
                    <div class="p text-width-medium">
                        <p class="big"><?=$text["descriSobreNosotros"]?></p>
                    </div>
                </div>
                <div class="cell-xs-12">
                  <div data-arrows="false" data-loop="true" data-dots="true" data-swipe="true" data-autoplay="false" data-items="1" data-lg-items="3" data-center-mode="true" data-center-padding="0.0" class="slick-slider carousel-center-mode">
                    <div class="item">
                      <div class="slick-slide-inner">
                        <article class="post-classic"><img src="public/images/blog-2-770x330.jpg" alt="" width="770" height="330" class="post-classic-image"/>
                          <div class="post-classic-body">
                            <p class="post-classic-title"><?=$text["mision"]?></p>
                            <div class="post-classic-text">
                              <p><?=$organization->mission?></p>
                            </div>
                            <div class="post-classic-footer">
                              <div class="post-classic-footer-left"><a href="./about" class="btn btn-xs btn-primary btn-circle"><?=$text["leerMas"]?></a></div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </div>
                    <div class="item">
                      <div class="slick-slide-inner">
                        <article class="post-classic"><img src="public/images/blog-3-770x330.jpg" alt="" width="770" height="330" class="post-classic-image"/>
                          <div class="post-classic-body">
                            <p class="post-classic-title"><?=$text["vision"]?></p>
                            <div class="post-classic-text">
                              <p><?=$organization->vission?></p>
                            </div>
                            <div class="post-classic-footer">
                              <div class="post-classic-footer-left"><a href="./about" class="btn btn-xs btn-primary btn-circle"><?=$text["leerMas"]?></a></div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </div>
                    <div class="item">
                      <div class="slick-slide-inner">
                        <article class="post-classic"><img src="public/images/blog-1-770x330.jpg" alt="" width="770" height="330" class="post-classic-image"/>
                          <div class="post-classic-body">
                            <p class="post-classic-title"><a href="single-post.html"><?=$text["produccion"]?></a></p>
                            <div class="post-classic-text">
                              <p><?=$organization->production?></p>
                            </div>
                            <div class="post-classic-footer">
                                <div class="post-classic-footer-left"><a href="./about" class="btn btn-xs btn-primary btn-circle"><?=$text["leerMas"]?></a></div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </div>
                    <div class="item">
                      <div class="slick-slide-inner">
                        <article class="post-classic"><img src="public/images/blog-3-770x330.jpg" alt="" width="770" height="330" class="post-classic-image"/>
                          <div class="post-classic-body">
                            <p class="post-classic-title"><a href="single-post.html"><?=$text["responsabilidadSocial"]?></a></p>
                            <div class="post-classic-text">
                              <p><?=$organization->socialresponsability?></p>
                            </div>
                            <div class="post-classic-footer">
                              <div class="post-classic-footer-left"><a href="./about" class="btn btn-xs btn-primary btn-circle"><?=$text["leerMas"]?></a></div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </div>
                                        
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="box-wrap box-wrap-md bg-white">
            <div class="box-wrap-map">
              <div data-zoom="14" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:&quot;-100&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:65},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:&quot;50&quot;},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:&quot;-100&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:&quot;30&quot;}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:&quot;40&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ffff00&quot;},{&quot;lightness&quot;:-25},{&quot;saturation&quot;:-97}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:-25},{&quot;saturation&quot;:-100}]}]" class="rd-google-map rd-google-map__model">
                <ul class="map_locations"></ul>
              </div>
            </div>
            <div class="box-wrap-content">
              <div class="shell">
                <div class="range">
                  <div class="cell-xs-12">
                    <div class="box-contacts box-contacts-horizontal box-wrap-content-interactive block-right">
                      <div class="box-contacts-col">
                        <div class="box-contacts-block">
                          <h3>Address</h3>
                          <address>123 Street W, Seattle WA 99999 United States</address>
                        </div>
                        <div class="divider divider-nebula"></div>
                        <div class="box-contacts-block">
                          <h3>Opening Hours</h3>
                          <dl class="box-contacts-terms-list">
                            <dt>Monday – Friday</dt>
                            <dd>9am - 6pm</dd>
                            <dt>Saturday and Sunday</dt>
                            <dd>10am - 4pm</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="box-contacts-col box-contacts-right">
                        <div class="box-contacts-block">
                          <h3>Get In Touch</h3>
                          <p>Leave your name and phone number, and we’ll contact you.</p>
                          <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform">
                            <div class="form-group">
                              <label for="contact-full-name" class="form-label-outside">Full Name</label>
                              <input id="contact-full-name" type="text" name="name" data-constraints="@Required" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="contact-phone" class="form-label-outside">Telephone</label>
                              <input id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary btn-block btn-circle">SEND REQUEST</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

           <footer class="page-footer page-footer-variant-3">
            <div class="shell">
              <div class="range range-50">
                <div class="cell-sm-6 cell-md-4"></div>
                <div class="cell-sm-6 cell-md-5">
                     <p><h3>Universidad de Costa Rica</h3> Trabajo Comunal - 2017</p>
                </div>
              </div>
            </div>
          </footer>

        </div>
        
        <?php include_once 'views/general/footerAndScript.php';?>
    </body>
</html>