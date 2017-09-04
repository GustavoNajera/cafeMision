<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include 'views/general/head.php' ?>
    
    <?php
        //Se obtiene la información de la empresa
        include_once './business/TextPageBusiness.php';
        //(new SessionBusiness())->logOut();
        if((new SessionBusiness())->getUser()) header("Location: ./admin");
        
        //Se obtienen los textos en el lenguaje elegido
        //$text = (new TextPageBusiness())->getTextByPageBusiness("session");
        
    ?>
    <title>Session</title>
    
    <body>
        <div class="page">
          
            <?php include 'views/general/topMenu.php'; ?>
                
            <section style="background-image: url(public/images/bg-image-4.jpg);" class="jumbotron-custom jumbotron-custom-2 bg-gray-base bg-image">
                <div class="shell">
                    <div class="range range-sm-center range-50">
                      <div class="cell-md-10 cell-lg-6">
                        <h3 class="text-center">LogIn</h3>
                        <form method="POST" action="./SessionLogIn">
                          <div class="range range-sm-bottom range-15">
                            <div class="cell-sm-6">
                              <div class="form-group">
                                <label for="billing-first-name" class="form-label-outside">Email / Username *</label>
                                <input id="billing-first-name" type="text" name="user" required class="form-control">
                              </div>
                            </div>
                            <div class="cell-sm-6">
                              <div class="form-group">
                                <label for="billing-last-name" class="form-label-outside">Password *</label>
                                <input id="billing-last-name" type="password" name="password" required class="form-control">
                              </div>
                            </div>
                            <div class="cell-sm-6">
                                <button type="submit" name="button1id" class="btn btn-sm btn-default-size btn-primary btn-circle">Log In</button>
                            </div>
                              
                          </div>
                        </form>
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
        <?php include_once 'views/general/footerAndScript.php';?>
    </body>
</html>