<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
        <link rel="stylesheet" type="text/css" href="style/main.css">
        <link rel="stylesheet" type="text/css" href="style/mobile.css">
        <link rel="stylesheet" type="text/css" href="style/pc.css">
    </head>
<body>
    <header>
        <a href="<?php echo $link['home'];?>">        
            <div class="header_logo"><img src="images/logo.png" alt="Zdjęcie niedostępne."></div>
        </a>
    </header>
    <div class="header_space"></div>
    <div class="container">
        <div class="content">
            <?php echo $content;?>
        </div>
        <div class="navi">
            <div class="navi_title">Fizyka</div> 
            <a href="<?php echo $link['home'].'?cat=f1';?>">
                <div class="navi_fiz_menu">Ruch postępowy</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f2';?>">
                <div class="navi_fiz_menu">Siła</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f3';?>">
                <div class="navi_fiz_menu">Praca, Moc, Energia</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f4';?>">
                <div class="navi_fiz_menu">Hydrostatyka</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f5';?>">
                <div class="navi_fiz_menu">Grawitacja</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f6';?>">
                <div class="navi_fiz_menu">Bryła sztywna</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f7';?>">
                <div class="navi_fiz_menu">Fale</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f8';?>">
                <div class="navi_fiz_menu">Termodynamika</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f9';?>">
                <div class="navi_fiz_menu">Elektrostatyka</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f10';?>">
                <div class="navi_fiz_menu">Prąd stały</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f11';?>">
                <div class="navi_fiz_menu">Elektromagnetyzm</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f12';?>">
                <div class="navi_fiz_menu">Optyka</div> 
            </a>
            <a href="<?php echo $link['home'].'?cat=f13';?>">
                <div class="navi_fiz_menu">Dualizm</div> 
            </a>
        </div>
    </div>
    <footer>
        <b>Kontakt:</b> 
        <p>E-mail: pkubon2@gmail.com</p>
    </footer>
    <script src="scripts/main.js"></script>
</body>
</html>