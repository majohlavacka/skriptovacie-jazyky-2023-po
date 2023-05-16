<?php
require_once('inc/functions.php');
$textManager = new TextManager();
$images = $textManager->getImages();
$imageIDs = $textManager->get_ID_images();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=?, initial-scale=1.0">
    <title>Admin Rozhranie</title>
</head>
<body>
    <section>
        <h1>Admin rozhranie</h1>
    </section>

    <section>
        <h2>Images</h2>
        <form action="inc/Images/insert.php" method="post">
            <input type="text" name="image" id="image" placeholder="Cesta k obrazku">
            <input type="submit" value="Pridať" name="add_image">
        </form>

        <br>
        <table>
            <?php foreach ($images as $index => $image): ?>
                <tr>
                    <td><img width="150" src="<?php echo $image; ?>"></td>
                    <td>
                        <form action="inc/Images/delete.php" method="post">
                            <input type="hidden" name="delete_image" value="<?php echo $index + 1; ?>"> <!--ID obrázka, ktorý sa má odstrániť, index obrázka v poli-->
                            <input type="hidden" name="image_ids" value="<?php echo implode(',', $imageIDs); ?>"><!-- Pole, ktoré nesie zoznam všetkých ID obrázkov  -->
                            <button type="submit" name="delete_image_submit">Vymazať</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        
    </section>




    <section>
        <h2>Images Large</h2>
        <form action="inc/Images/insert_large.php" method="post">
            <input type="text" name="name_large" id="name_large" placeholder="Názov obrazku">
            <input type="text" name="image_large" id="image_large" placeholder="Cesta k obrazku">
            <input type="submit" value="Pridať" name="add_image_large">
        </form>
        <br>
        <table>
            <?php foreach($images as $image): ?>
                <tr>
                    <td><img width="150" src="<?php echo $image; ?>"></td>
                    <td>
                        <form action="inc/Images/delete.php" method="post">
                            <input type="hidden" name="image" value="<?php echo $image; ?>">
                            <button type="submit" name="delete_image">Vymazať</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <h2>Kontakty</h2>
</body>
</html>

