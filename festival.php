<?php
$page = 'festival';
$script_page_header = '<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>';
$script_page = '<script src="assets/js/carousel.js"></script>';

ob_start();
?>
<main class="main_page">
    <section class="section_introduction">
        <div class="contain_introduction container">
            <div class="texte">
                <h2>Le play sorbonne <br> festival</h2>
                <p>
                    Play Sorbonne Festival est le festival étudiant du jeu vidéo. Organisé par des passionés, il ambitionne de célébrer et faire découvrir la culture du jeu vidéo sous toutes ses formes.
                    <br>
                    Play Sorbonne Festival rassemble les joueurs, les développeurs, les éditeurs, les associations et tous ceux qui font vivre le jeu vidéo. L’événement s’adresse aux hardcore gamers comme aux non-joueurs qui souhaitent découvrir toute la diversité du jeu.
                </p>
            </div>
            <div class="image">
                <img class="img_sup_1" src="image/img2.jpg" alt="image du festival">
                <img class="img_sup_2" src="image/img3.jpg" alt="image du festival">
            </div>
        </div>
    </section>


    <!--    Section thematique -->
    <section id="c_carousel" class="section_thematique">
        <div class="container">
            <div class="tabs_link">
                <span class="tab_link active_tab_link">01</span>
                <span class="tab_link">02</span>
                <span class="tab_link">03</span>
                <span class="tab_link">04</span>
                <span class="tab_link">05</span>
            </div>
        </div>

        <div class="container_carousel">

            <div class="contain_carousel container"> 
                <span class="btn_prev desactiver"><i class="fas fa-angle-left"></i></span> 
                <span class="btn_next"><i class="fas fa-angle-right"></i></span>

                <div id="carousel" class="carousel">

                    <div id="01" class="elt_item item_visible">
                        <div class="elt_tab">
                            <div class="left">
                                <div class="tab_text">
                                    <h2>Rencontrer<br> l'industrie video ludique</h2>
                                    <div class="tab_text_bot">
                                        <div class="tab_deco_border"></div>
                                        <p>Les métiers du jeu vidéo sont extrêmement variés : graphistes, programmeurs, game designers, chargés de marketing, scénaristes, data scientists. 
                                            Le Play Sorbonne Festival mettra à l’honneur tous ces profils, appelés à témoigner de leur expérience pour faire découvrir la complexité du processus de création d’un jeu vidéo et la réalité quotidienne de ceux qui le font vivre.
                                            Dans l’espace « salon professionnel » les étudiants parisiens pourront rencontrer des développeurs et éditeurs de jeu vidéo, échanger avec eux et à découvrir leurs dernières créations
                                        </p>
                                    </div>
                                    <span>01</span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="tab_img">
                                    <img src="image/caisse_2.png" alt="illustration thematique">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="02" class="elt_item">
                        <div class="elt_tab">
                            <div class="left">
                                <div class="tab_text">
                                    <h2>Penser <br> le jeu video</h2>
                                    <div class="tab_text_bot">
                                        <div class="tab_deco_border"></div>
                                        <p>Médium encore relativement jeune, le jeu vidéo s’est pourtant déjà imposé comme le bien culturel le plus consommé dans le monde. Il est nécessaire de prendre du recul par rapport à cette croissance fulgurante et de penser ce médium protéiforme : à la fois forme d’art, divertissement et industrie d’avenir. Un sociologue, un streamer, un directeur marketing et un joueur professionnel conçoivent-ils de la même façon une expérience de jeu ? Que dit le jeu vidéo de la société qui le produit ? 
                                                Dans le cadre d’un cycle de conférences, Play Sorbonne Festival a choisi de donner la parole à des chercheurs traitant du jeu vidéo à travers des questions d’études du Genre, d’Histoire ou d’économie.
                                        </p>
                                    </div>
                                    <span>02</span>
                                </div>
                            </div>    
                            <div class="right">
                                <div class="tab_img">
                                    <img src="image/caisse_5.png" alt="illustration thematique">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="03" class="elt_item">
                        <div class="elt_tab">
                            <div class="left">
                                <div class="tab_text">
                                    <h2>Laisser faire <br> les pro</h2>
                                    <div class="tab_text_bot">
                                        <div class="tab_deco_border"></div>
                                        <p>L’e-sport, pratique compétitive professionnelle du jeu vidéo, est une discipline en plein essor. Les compétitions de certains jeux remplissent des stades entiers (Rocket League, Starcraft, League of Legends, Dota, Fifa, Counter Strike...) et les grandes écuries sportives ou industrielles créent leur propres équipes (Renault Vitality, PSG e-sport, FC Barcelona e-sport, Samsung Galaxy Pro Game Team...). 
                                                Le Play Sorbonne Festival accueillera des compétitions et showmatch d’e-sport. Le public pourra y découvrir le jeu vidéo poussé à l’excellence.
                                        </p>
                                    </div>
                                    <span>03</span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="tab_img">
                                    <img src="image/caisse_1.png" alt="illustration thematique">
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div id="04" class="elt_item">
                        <div class="elt_tab">
                            <div class="left">
                                <div class="tab_text">
                                    <h2>Exposer l'art <br> videoludique</h2>
                                    <div class="tab_text_bot">
                                        <div class="tab_deco_border"></div>
                                        <p>Si on parle parfois de « jeux d’auteurs » pour certaines créations indépendantes, même les plus grosses productions peuvent être des médiums d’expression artistique. Ainsi, le jeu vidéo s’invite déjà dans de nombreuses collections et expositions temporaires (Grand Palais, MoMa, Cité des sciences, Fondation EDF...).
                                                Le Play Sorbonne Festival proposera une exposition de jeu vidéo à la croisée des arts et de la sociologie, à travers les travaux de Roger Caillois ( Les Jeux et les Hommes, 1958) et la mise en avant des pépites de la scène indépendante du jeu vidéo
                                        </p>
                                    </div>
                                    <span>04</span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="tab_img">
                                    <img src="image/caisse_3.png" alt="illustration thematique">
                                </div>
                            </div>
                        </div>    
                    </div>

                    <div id="05" class="elt_item">
                        <div class="elt_tab">
                            <div class="left">
                                <div class="tab_text">
                                    <h2>Jouer <br> ensemble</h2>
                                    <div class="tab_text_bot">
                                        <div class="tab_deco_border"></div>
                                        <p>Le cœur du Play Sorbonne Festival reste évidemment la célébration d’une passion à peine cinquantenaire mais qui fédère pourtant les générations. 
                                                L’événement entend rassembler les joueurs pour des parties sur consoles, ordinateurs, bornes d’arcades, dispositifs de réalité virtuelle ou encore jeu de plateaux. Au programme : LAN Parties, tournois, jeu libre et initiations.
                                                Tous les joueurs, du noob* au pgm** sont conviés à la fête.
                                                <br>
                                                *noob = néophyte <br>
                                                ** pgm = joueur de haut niveau 
                                        </p>
                                    </div>
                                    <span>05</span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="tab_img">
                                    <img src="image/caisse_4.png" alt="illustration thematique">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<span class="detecte detection_position"><?php if (isset($_GET['pos'])) {echo $_GET['pos'];} ?></span>
<span class="detecte detection_numero"><?php if (isset($_GET['num'])) {echo $_GET['num'];} ?></span>
<?php 
$content = ob_get_clean();

require 'template.php';
?>

