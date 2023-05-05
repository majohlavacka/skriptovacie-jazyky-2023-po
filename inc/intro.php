<?php

require_once('inc/introPhoto.php');

$introPhoto = new IntroPhoto();
$image_url = $introPhoto->getIntroPhoto();

?>

<main role="main" class="ml-sm-auto col-12">
    <div
        class="parallax-window"
        data-parallax="scroll"
        data-image-src="<?php echo $image_url; ?>"> <!-- nacitavam obrazok z databazy v tabulke intro -->
        <div class="tm-section-wrap">
            <section id="intro" class="tm-section">
                <div class="tm-bg-white-transparent tm-intro">
                    <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary">Introducing Dream Pulse</h2>
                    <p class="tm-color-gray">
                        This box alpha 30 percent. Left sidebar is a sticky element.
                        Right side Contents are scrolling up and down. This background has a
                        parallax effect.
                    </p>
                    <p class="mb-0 tm-color-gray">
                        Dream Pulse is a Bootstrap 4.3.1 template designed for your websites. You can modify this layout as you like.
                    </p>
                </div>              
            </section>
        </div>            
    </div>
</main>
