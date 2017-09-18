<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <?php include '../general/head.php' ?>
     <title>Café Misión</title>
    
    <body>
    <div class="page">
      <main id="perspective" class="page-content">
        <div class="content-wrapper">
          <div class="page-header page-header-perspective">
            <?php
                if (!session_id())
                    @ session_start();
                $language = isset($_SESSION["language"]) ? $_SESSION["language"] : "ingles";
                if ($language == "ingles") {
                    ?>  
                    <div class="page-header-left"><a href="./" class="brand-name"><img src="../../public/images/logo-white-185x41i.png" alt="" width="185" height="41"/></a></div>

                    <?php
                } else {
                    ?> 
                    <div class="page-header-left"><a href="./" class="brand-name"><img src="../../public/images/logo-white-185x41.png" alt="" width="185" height="41"/></a></div>
                    <?php
                }
                ?>
            <div class="page-header-right">
              <div id="perspective-open-menu" data-custom-toggle=".perspective-menu-toggle" data-custom-toggle-hide-on-blur="true"><span class="perspective-menu-text">Menu</span>
                <button class="perspective-menu-toggle"><span></span></button>
              </div>
            </div>
          </div>
          <div id="wrapper">
            <section class="section-xl bg-periglacial-blue">
              <div class="shell"><a href="./" class="link link-primary link-return">Back</a>
                <ul class="link-list">
                  <li><span>Returning customer?</span><a href="#">Click here to login</a></li>
                  <li><span>Have a coupon?</span><a href="#">Click here to enter your code</a></li>
                </ul>
              </div>
            </section>
            <section class="section-xl bg-periglacial-blue">
              <div class="shell">
                <div class="range range-sm-center range-50">
                  <div class="cell-md-10 cell-lg-6">
                    <h3 class="text-center">Billing Details</h3>
                    <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform">
                      <div class="range range-sm-bottom range-15">
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label for="billing-first-name" class="form-label-outside">First Name *</label>
                            <input id="billing-first-name" type="text" name="first-name" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label for="billing-last-name" class="form-label-outside">Last Name *</label>
                            <input id="billing-last-name" type="text" name="last-name" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label for="billing-company-name" class="form-label-outside">Company Name</label>
                            <input id="billing-company-name" type="text" name="company-name" class="form-control">
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label for="billing-email" class="form-label-outside">Email Address *</label>
                            <input id="billing-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label for="billing-phone" class="form-label-outside">Phone *</label>
                            <input id="billing-phone" type="email" name="phone" data-constraints="@Required @Numeric" class="form-control">
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label for="billing-address" class="form-label-outside">Address *</label>
                            <input id="billing-address" type="text" name="address" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label for="billing-apartment" class="form-label-outside">Apartment, suite, unit etc. (optional)</label>
                            <input id="billing-apartment" type="text" name="apartment" class="form-control">
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label for="billing-country" class="form-label-outside">Country</label>
                            <input id="billing-country" type="text" name="country" class="form-control">
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label for="billing-town" class="form-label-outside">Postcode *</label>
                            <input id="billing-town" type="text" name="postcode" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                      </div>
                    </form>
                    <label class="checkbox-inline checkbox-primary">
                      <input type="checkbox" class="checkbox-custom">Create an account?
                    </label>
                  </div>
                  <div class="cell-md-10 cell-lg-6">
                    <h3 class="text-center">Ship to a different address?</h3>
                    <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform">
                      <div class="range range-sm-bottom range-15">
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label for="shipping-first-name" class="form-label-outside">First Name *</label>
                            <input id="shipping-first-name" type="text" name="first-name" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label for="shipping-last-name" class="form-label-outside">Last Name *</label>
                            <input id="shipping-last-name" type="text" name="last-name" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label for="shipping-company-name" class="form-label-outside">Company Name</label>
                            <input id="shipping-company-name" type="text" name="company-name" class="form-control">
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label for="shipping-address" class="form-label-outside">Address *</label>
                            <input id="shipping-address" type="text" name="address" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label for="shipping-apartment" class="form-label-outside">Apartment, suite, unit etc. (optional)</label>
                            <input id="shipping-apartment" type="text" name="apartment" class="form-control">
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label for="shipping-country" class="form-label-outside">Country</label>
                            <input id="shipping-country" type="text" name="country" class="form-control">
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label for="shipping-town" class="form-label-outside">Postcode *</label>
                            <input id="shipping-town" type="text" name="postcode" data-constraints="@Required" class="form-control">
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label for="shipping-notes" class="form-label-outside">Order Notes</label>
                            <textarea id="shipping-notes" name="notes" class="form-control"></textarea>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>

            <section class="section-lg bg-periglacial-blue">
              <div class="shell">
                <div class="range range-50">
                  <div class="cell-xs-12">
                    <h3>Your order</h3>
                  </div>
                </div>
                <div class="range range-30">
                  <div class="cell-sm-8 cell-md-6">
                    <div class="terms-list-group">
                      <dl class="terms-list-block terms-list-block-vertical">
                        <dt>Product</dt>
                        <dd>Five Star Coffee</dd>
                      </dl>
                      <dl class="terms-list-block terms-list-block-vertical">
                        <dt>Total</dt>
                        <dd>$44.99</dd>
                      </dl>
                    </div>
                    <dl class="terms-list-block terms-list-block-horizontal">
                      <dt>Subtotal</dt>
                      <dd>$44.99</dd>
                    </dl>
                    <dl class="terms-list-block terms-list-block-horizontal">
                      <dt>Shipping</dt>
                      <dd>
                        Please fill in your details to
                        see available shipping methods.
                        
                      </dd>
                    </dl>
                    <dl class="terms-list-block terms-list-block-horizontal">
                      <dt>Total</dt>
                      <dd>$44.99</dd>
                    </dl>
                  </div>
                  <div class="cell-sm-8 cell-md-6">
                    <ul class="list-blocks-bordered">
                      <li>
                        <label class="radio-inline radio-bold">
                          <input type="radio" name="radio-group-1">Cheque Payment
                        </label>
                        <p class="text-gray-base">
                          Please send your cheque to Coffee Shop, 123 Street W, Seattle WA 99999 United States.
                          
                        </p>
                      </li>
                      <li>
                        <div class="group-lg group-middle">
                          <label class="radio-inline radio-bold">
                            <input type="radio" name="radio-group-1">PayPal
                          </label><a href="#" class="link link-primary">What is PayPal?</a>
                        </div>
                        <ul class="inline-list inline-list-sm">
                          <li><a href="#"><img src="images/card-1-65x40.png" alt="" width="65" height="40"/></a></li>
                          <li><a href="#"><img src="images/card-2-65x40.png" alt="" width="65" height="40"/></a></li>
                          <li><a href="#"><img src="images/card-3-65x40.png" alt="" width="65" height="40"/></a></li>
                          <li><a href="#"><img src="images/card-4-65x40.png" alt="" width="65" height="40"/></a></li>
                          <li><a href="#"><img src="images/card-5-65x40.png" alt="" width="65" height="40"/></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="cell-sm-8 cell-md-12 offset-custom-1 text-right"><a href="#" class="btn btn-sm btn-default-size btn-primary btn-circle">Place order</a></div>
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