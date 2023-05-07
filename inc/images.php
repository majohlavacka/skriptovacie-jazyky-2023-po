<?php
  require_once('functions.php');
  $textManager = new TextManager();
  $webImages = $textManager->getImages();
  $webImagesLarge = $textManager->getImagesLarge();
  $imageNamesLarge = $textManager->get_text_images_large();

?>

<div class="tm-section-wrap bg-white">
    <section id="work" class="row tm-section">
        <div class="col-12">
            <div class="w-100 tm-double-border-1 tm-border-gray">
                <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                    <div class="tm-gallery-wrap">
                        <h2 class="tm-color-primary tm-section-title mb-4 ml-2">Out Gems During Expeditions</h2>
                        <div class="tm-gallery">
                            <?php foreach ($webImages as $i => $imagePath): ?>
                                <div class="tm-gallery-item">
                                    <figure class="effect-bubba">
                                        <img src="<?php echo $imagePath; ?>" alt="Our Work Image" class="img-fluid">
                                        <figcaption>
                                            <h2><?php echo $imageNamesLarge[$i]; ?></h2>
                                            <a href="<?php echo $webImagesLarge[$i]; ?>">View more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
