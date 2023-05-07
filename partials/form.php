<?php
  require_once('inc/database.php');
  require_once('inc/functions.php');
  $textManager = new TextManager(); // Vytvorenie inštancie triedy TextManager
  $textID = 7; // ID textu, ktorý chcete vypísať
  $texttID = 8;
  $textName = $textManager->get_text_name($textID);
  $content = $textManager->get_text_content($textID); // Získanie obsahu na základe ID
  $contentt = $textManager->get_text_content($texttID); // Získanie obsahu na základe ID
?>

<div class="tm-section-wrap bg-white">
            <section id="talk" class="row tm-section">
                <div class="col-xl-6 mb-5">
                  <div class="tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                        <h2 class="tm-color-primary tm-section-title mb-4"><?php echo $textName?></h2>
                        <p class="mb-4"> <?php echo $content?></p>
                        <p class="mb-3">
                          <?php echo $contentt?>
                        </p>
                    </div>                    
                  </div>                  
                </div>
                <div class="col-xl-6 mb-5">
                  <div class="tm-contact-form-wrap">
                    <form action="partials/form_submit.php" method="POST" class="tm-contact-form">
                        <div class="form-group">
                          <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Name" required="" />
                        </div>
                        <div class="form-group">
                          <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Email" required="" />
                        </div>
                
                        <div class="form-group">
                          <textarea rows="4" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message..." required=""></textarea>
                        </div>
                
                        <div class="form-group mb-0">
                          <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary">
                            SEND
                          </button>
                        </div>
                      </form>
                  </div>                    
                </div>
              </section>
          </div>
        </main>        
      </div>
    </div>