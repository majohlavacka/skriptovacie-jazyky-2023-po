<?php
require_once('inc/functions.php');
$textManager = new TextManager(); // Vytvorenie inštancie triedy TextManager
$textAboutID = 2; // ID textu, ktorý chcete vypísať
$textAbouttID = 3;
$textAboutttID = 4;
$textAbouttttID = 5;
$textName = $textManager->get_text_name($textAboutID);
$textNamee = $textManager->get_text_name($textAboutttID);
$content = $textManager->get_text_content($textAboutID); // Získanie obsahu na základe ID
$contentt = $textManager->get_text_content($textAbouttID);
$contenttt = $textManager->get_text_content($textAboutttID);
$contentttt = $textManager->get_text_content($textAbouttttID);
?>

<div class="tm-section-wrap bg-white">
            <section id="about" class="row tm-section">
              <div class="col-xl-6">
                <div class="tm-section-half">    
                    <div><i class="fas fa-6x fa-fish mb-5 tm-section-icon"></i></div>                        
                    <h2 class="tm-section-title tm-color-primary mb-5"><?php echo $textName?></h2>
                    <p class="mb-5"><?php echo $content?></p>
                    <p><?php echo $contentt?></p>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="tm-section-half">
                    <div><i class="far fa-6x fa-handshake mb-5 tm-section-icon"></i></div>
                    <h2 class="tm-section-title tm-color-primary mb-5"><?php echo $textNamee?></h2>
                    <p class="mb-5"><?php echo $contenttt?></p>
                    <p><?php echo $contentttt?>
                    </p>
                </div>
              </div>
            </section>
          </div>