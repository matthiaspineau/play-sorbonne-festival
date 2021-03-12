<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Play Sorbonne Festival</title>
    <LINK REL="SHORTCUT ICON" href="image/favicon_psf.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/8b4a38621a.js"></script>
    <?php if (isset ($script_page_header)) { echo $script_page_header; } ?>
    <!-- ./dart-sass/sass assets/sass/style.scss assets/css/style.css --watch -->
</head>
<body class="body">

    <!-- Header -->
    <header class="header">
        <div class="container bar_navigation">
            <a href="index.php" class="header_logo <?php if ($page == 'index') { echo 'index_logo';}?>">
                <img src="image/logo_psf.png" alt="logo psf">
            </a>

            <span id="compte_rebour"></span>

            <span class="btn_menu">
                <i class="fas fa-bars"></i>
            </span> 
            <nav class="nav">
                <a href="index.php" class="item_nav <?php if ($page == 'index') { echo 'active_link';} ?>">Accueil</a>
                <a href="festival.php" class="item_nav <?php if ($page == 'festival') { echo 'active_link';} ?>">Le festival</a>
                <a href="information.php" class="item_nav <?php if ($page == 'information') { echo 'active_link';} ?>">Infos pratiques</a>
                <a href="association.php" class="item_nav <?php if ($page == 'association') { echo 'active_link';} ?>">L'association</a>
            </nav>
        </div>
    </header>
   

    <!-- Content -->
    <?php
    echo $content;
    ?>

    <!-- Footer -->
    <footer class="footer_page">
        <div class="footer_logo">
            <img src="image/logo_psf.png" alt="logo psf">
        </div>
        <div class="footer_contact">
            <a href="mailto:playsorbonnefestival@gmail.com" class="btn_contact">playsorbonnefestival@gmail.com</a>
        </div>
        <div class="footer_social">
            <a class="link_social" href="https://www.facebook.com/SorbonnePlayFestival/  
            "><i class="fab fa-facebook-f"></i></a>
            <a class="link_social" href="https://www.instagram.com/playsorbonnefestival/"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

    <?php if (isset($script_page)) { echo $script_page; } ?>
    <script src="assets/js/app.js"></script>
</body>
</html>