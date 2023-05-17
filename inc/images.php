<?php
  require_once('functions.php');
  $textManager = new TextManager();
  $webImages = $textManager->getImages();
  $imageNames = $textManager->getTextImages();
?>

<div class="tm-section-wrap bg-white">
    <section id="work" class="row tm-section">
        <div class="col-12">
            <div class="w-100 tm-double-border-1 tm-border-gray">
                <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                    <div class="tm-gallery-wrap">
                        <h2 class="tm-color-primary tm-section-title mb-4 ml-2">Out Gems During Expeditions</h2>
                        <div class="tm-gallery">
                            <?php foreach ($webImages as $i => $imagePath): 
                                echo '<div class="tm-gallery-item">';
                                echo '<figure class="effect-bubba">';
                                echo '<img src="' . $imagePath . '" alt="Our Work Image" class="img-fluid">';
                                echo '<figcaption>';
                                echo '<h2>' . $imageNames[$i] . '</h2>';
                                echo '<a href="' . $webImages[$i] . '">View more</a>';
                                echo '</figcaption>';
                                echo '</figure>';
                                echo '</div>';
                            endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
