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
                                <input id="billing-first-name" type="email" name="user" required class="form-control">
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
            
            
            
            <footer class="page-footer page-footer-variant-3">
            <div class="shell">
              <div class="range range-50">
                <div class="cell-sm-6 cell-md-4"></div>
                <div class="cell-sm-6 cell-md-5">
                     <h3>Follow Us</h3>
                  More <a rel="nofollow" href="http://www.templatemonster.com/category.php?category=161&type=1" target="_blank">Coffee Shop Templates at TemplateMonster.com</a>
                </div>
              </div>
            </div>
          </footer>
        </div>           
        <?php include_once 'views/general/footerAndScript.php';?>
    </body>
</html>