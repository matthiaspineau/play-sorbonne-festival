<?php
$page = 'information';

ob_start();
?>

<section class="section_info_evement">
    <div class="container">
        <h2>Informations pratiques</h2>
        <div class="div_info_evenement">
            <div class="left">
                <h3>Quand ?</h3>
                
                <p>Date : <strong>27 Septembre 2019</strong></p>
                <p>Horaire : <strong>10H - 20H</strong></p>   
                
                <h3 class="comment">Comment ?</h3>
                <p><strong>Gratuit</strong></p>
                <p>Evénement ouvert à tous</p>
                
            </div>
            <div class="right">
                <h3>Où ?</h3>
                <p>Sorbonnes Universités, 4 place Jussieu, 75005 Paris <br>
                    métro jussieu ligne 7 et 10</p>
            <div class="map_carte">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.09718465406!2d2.3554132148843303!3d48.84760342468707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671fa8dc1c30b%3A0xf0b82c4672cb0c0!2sSorbonne+Universit%C3%A9+Campus+Pierre+et+Marie+Curie!5e0!3m2!1sfr!2sfr!4v1562506654236!5m2!1sfr!2sfr"  frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>  

<?php 
$content = ob_get_clean();

require 'template.php';
?>

