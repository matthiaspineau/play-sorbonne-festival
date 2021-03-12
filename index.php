<?php
$page = 'index';


ob_start();
?>
    <div class="contain_banner">
        <div class="contain_element">
            <div class="logo_personnage">
                <img class="image_avion" src="image/avion_logo.png" alt="banniere principal">
                <a href="festival.php?pos=-100&num=1#c_carousel" class="image1"><img src="image/croco.png" alt="personnage croco"></a> 
                <a href="festival.php#c_carousel" class="image2"><img src="image/pitch.png" alt="personnage pitch"></a>
                <a href="festival.php#c_carousel" class="image3"><img src="image/dev_ind.png" alt="personnage dev ind"></a>
            </div>
    
            <div class="information_evenement">
                <img src="image/information_evevement.png" alt="information lieux date horaire">
                <span class="span_horaire">10H - 20H</span>
            </div> 
        </div>
    </div>

<?php
$content = ob_get_clean();

require 'template.php';
?>

