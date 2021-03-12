<?php
$page = 'association';

ob_start();
?>
<section class="section_qui">
    <div class="contain_qui container">
        <h3>Qui sommes nous ?</h3>
        <p>Nous sommes convaincus que le jeu, sous toutes ses formes, nous est essentiel. Il permet d’imaginer, d’apprendre, de chercher, de tenter, d’échouer, de réussir, de ressentir. <br>
            Le jeu vidéo peut présenter ces vertus. S’il est un divertissement, il est aussi œuvre d’art ou discipline compétitive. <br>
            Du jeu compétitif au jeu contemplatif, du rpg au fps, du AAA au jeu indé, du jeu online aux salles d’arcades, du bac à sable au beat ‘em up, de la Team Ico à la Team Rocket, du free-to-play au <span class="rayer">pay-to-win</span>, de Teemo à Mario, du jeu rétro au 1440p 120fps, le jeu vidéo est protéiforme et représente bien davantage que les stéréotypes auxquels on le réduit souvent. <br>
            C’est une culture qui rassemble, un puissant vecteur d’émotions, une nouvelle forme d’art, une industrie aussi. Il est primordial de célébrer, de critiquer, de discuter, de penser cette richesse, encore relativement émergeante. <br>
            C’est de cette volonté qu’est née l’association Rougtube.</p>
    </div>
</section>

<section class="section_partenaire">
    <div class="partenaire container">
        <h3>Nos partenaires</h3>
        <div class="contain_logo_partenaire">
            <!-- <div class="item_logo_partenaire">
                <img src="image/logo_partenaire_1.png" alt="logo partenaire">
            </div> -->
            <div class="item_logo_partenaire">
                <img src="image/logo_partenaire_2.png" alt="logo partenaire">
            </div>
            <div class="item_logo_partenaire">
                <img src="image/logo_partenaire_3.png" alt="logo partenaire">
            </div>
        </div>
    </div>
</section>

<?php 
$content = ob_get_clean();

require 'template.php';
?>

