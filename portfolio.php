<?php
include('partials/header.php');
?>
<main>
    <?php
        include('partials/banner.php');
        include('partials/quote.php');
    ?>
    <section class="container">
        <?php
            $portfolio = $Portfolio->get_portfolio();
            for ($i=0;$i<count($portfolio);$i++){
                $temp_i = $i+1;
                if($temp_i%4==1){
                    echo '<div class="row">';
                    echo '<div class="col-25 portfolio text-white textcenter" style = "background-image: url(\''.$portfolio[$i]->image.'\');"'.'>';
                    echo $portfolio[$i]->name;
                    echo '</div>';
                }
                elseif($temp_i%4==0){
                    echo '<div class="col-25 portfolio text-white textcenter" style = "background-image: url(\''.$portfolio[$i]->image.'\');"'.'>';
                    echo $portfolio[$i]->name;
                    echo '</div>';
                    echo '</div>';
                }
                else{
                    echo '<div class="col-25 portfolio text-white textcenter" style = "background-image: url(\''.$portfolio[$i]->image.'\');"'.'>';
                    echo $portfolio[$i]->name;
                    echo '</div>';
                }
                }
        ?>       
    </section>
</main>
<?php
include('partials/footer.php');
?>