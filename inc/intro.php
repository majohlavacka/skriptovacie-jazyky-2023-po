<?php
require_once('inc/functions.php');

$introPhoto = new IntroPhoto();
$image_url = $introPhoto->getIntroPhoto();
$textManager = new TextManager(); // Vytvorenie inštancie triedy TextManager
$textID = 1; // ID textu, ktorý chcete vypísať
$content = $textManager->get_text_content($textID); // Získanie obsahu na základe ID
$textName = $textManager->get_text_name($textID);
?>

<main role="main" class="ml-sm-auto col-12">
    <div
        class="parallax-window"
        data-parallax="scroll"
        data-image-src="<?php echo $image_url; ?>"> <!-- nacitavam obrazok z databazy v tabulke intro -->
        <div class="tm-section-wrap">
            <section id="intro" class="tm-section">
                <div class="tm-bg-white-transparent tm-intro">
                    <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary"><?php echo $textName?></h2>
                    <p class="tm-color-gray"><?php echo $content?></p>
                </div>              
            </section>
        </div>            
    </div>
</main>
