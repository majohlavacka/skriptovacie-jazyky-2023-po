<?php 
  require_once('functions.php');
  $textManager = new TextManager(); // Vytvorenie inštancie triedy TextManager
  $textID = 6; // ID textu, ktorý chcete vypísať
  $textName = $textManager->get_text_name($textID);
  $content = $textManager->get_text_content($textID); // Získanie obsahu na základe ID
  $sponsorImages = $textManager->getSponsorImages();
?>

<div class="tm-section-wrap bg-white">
            <section id="clients" class="row tm-section">
              <div class="col-12 tm-section-pad">
                  <div class="tm-flex-item-left">
                      <div class="tm-w-80">
                          <h2 class="tm-color-primary tm-section-title mb-4"><?php echo $textName?></h2>
                          <p class="mb-5"><?php echo $content?></p>
                      </div>    
                      <?php echo '<div class="row tm-clients-images">';
                            foreach ($sponsorImages as $image) {
                              echo '<div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 tm-img-wrap">';
                              echo '<a href="https://example.com">';
                              echo '<img src="' . $image . '" alt="Client Image" class="img-fluid tm-client-img" />';
                              echo '</a>';
                              echo '</div>';
                          }
                          echo '</div>';
                    ?>
                  </div> 
              </div>                             
            </section>
          </div>