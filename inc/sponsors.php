<?php 
  require_once('inc/functions.php');
  $textManager = new TextManager(); // Vytvorenie inštancie triedy TextManager
  $textID = 6; // ID textu, ktorý chcete vypísať
  $textName = $textManager->get_text_name($textID);
  $content = $textManager->get_text_content($textID); // Získanie obsahu na základe ID
?>

<div class="tm-section-wrap bg-white">
            <section id="clients" class="row tm-section">
              <div class="col-12 tm-section-pad">
                  <div class="tm-flex-item-left">
                      <div class="tm-w-80">
                          <h2 class="tm-color-primary tm-section-title mb-4"><?php echo $textName?></h2>
                          <p class="mb-5"><?php echo $content?></p>
                      </div>
                      
                      <div class="row tm-clients-images">
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://google.com">
                            <img src="img/client-1.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://facebook.com">
                            <img src="img/client-2.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://twitter.com">
                            <img src="img/client-3.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                          <a href="https://instagram.com">
                            <img src="img/client-4.png" alt="Client Image" class="img-fluid tm-client-img" />
                          </a>                          
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://google.com">
                              <img src="img/client-5.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://facebook.com">
                              <img src="img/client-6.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://twitter.com">
                              <img src="img/client-7.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                          <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">
                            <a href="https://instagram.com">
                              <img src="img/client-8.png" alt="Client Image" class="img-fluid tm-client-img" />
                            </a>                          
                          </div>
                      </div>
                  </div> 
              </div>                             
            </section>
          </div>