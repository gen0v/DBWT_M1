<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Start</title>
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
<div class="container">
    <header class="row">
        <!--  LOGO | MENU | SEARCHBAR  -->
        <div class="col-3" id="header_logo"><h1 id="logo_emensa">e-Mensa</h1></div>
        <nav class="col-6" id="header_menu">
            <ul class="nav" id="header_menu_nav">
                <li class="nav-item"><a class="nav-link link_selected" href="Start.php">Start</a></li>
                <li class="nav-item"><a class="nav-link" href="Produkte.html">Mahlzeiten</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Bestellungen</a></li>
                <li class="nav-item"><a class="nav-link" href="https://www.fh-aachen.de/" target="_blank">FH-Aachen</a></li>
            </ul>
        </nav>
        <div class="col-3" id="header_search">
            <form action="http://www.google.de/search" method="GET" target="_blank">
                <span class="fas fa-search" id="icon_search"></span>
                <input id="input_search" name="q" placeholder="Suchen...">
                <input name="as_sitesearch" value="https://www.fh-aachen.de" type="hidden">
            </form>
        </div>
    </header>
    <div class="row" id="content_top_row">
        <div class="col" id="content_top_row_picture">
            <img class="img-fluid rounded" id="image_start_banner" src="img/food_banner_2_resized.jpg" title="Photo by Dan Gold on Unsplash" alt="IMAGE ERROR">
        </div>
    </div>
    <div class="row" id="content_bot_row">
        <div class="col-3" id="content_bot_row_left">
            <!--
            [ TEXT1  |
              TEXT2 ]|
            -->
            <p class="text-hello">
                    <?php
                    if(isset($_GET['username']))
                        echo "Guten Tag ", $_GET['username'];
                    ?>
            </p>
            <p class="text_info">
                <a id="text_time">
                    <?php
                    echo date("H:i",time());
                    ?>
                </a>
                 Der Dienst e-Mensa ist noch beta. Sie können bereits Mahlzeiten
                durchstöbern, aber noch nicht bestellen.
            </p>
            <p class="text_info">
                Registrieren Sie sich hier, um über die Veröffentlichung des
                Dienstes per Mail informiert zu werden.
            </p>
        </div>
        <div class="col-9" id="content_bot_row_right">
            <!--
            |[HEADLINE]|[BUTTONS]
            |[.....PICTURE......]
             -->
            <div class="row" id="content_bot_row_right_top">
                <div class="col-9" id="content_bot_row_right_top_headline">
                    <h2 id="text_headline">Leckere Gerichte vorbestellen</h2>
                    <p class="text_headline_extra">
                        ... und gemeinsam mit Kommilitonen und Freunden essen
                    </p>
                </div>
                <div class="col-3" id="content_bot_row_right_top_buttons">
                    <button class="btn btn-primary btn-lg button-fh-schema" value="">
                        <i class="far fa-hand-point-right" id="icon_finger"></i>
                        Registrieren
                    </button>
                    <a href="http://localhost:8080/M1/Start.php?username=EugenBurikov">
                        <button class="btn btn-primary btn-lg button-fh-schema" value="">
                            <i class="fas fa-sign-in-alt" id="icon_signin"></i>
                            Anmelden
                        </button>
                    </a>
                </div>
            </div>
            <div class="row" id="content_bot_row_right_bot">
                <div class="col" id="content_bot_row_right_bot_picture">
                    <img class="img-fluid rounded" id="image_start_banner_2" src="img/food_banner_2_resized.jpg" title="Photo by Dan Gold on Unsplash" alt="IMAGE ERROR">
                </div>
            </div>
        </div>
    </div>
    <footer class="row">
        <!--  Copyright | MENU |   -->
        <div class="col-3" id="footer_copyright">&copy;
                <?php
                echo date("d.n.Y",time());
                ?>
            Eugen Burikov</div>
        <nav class="col-6" id="footer_menu">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Registrieren</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Zutatenliste</a></li>
                <li class="nav-item"><a class="nav-link" href="Impressum.html">Impressum</a></li>
            </ul>
        </nav>
        <div class="col-3" id="footer_placeholder"></div>
    </footer>
</div>
</body>
</html>
<!--
        <div class="col-2" id=""></div>
        <div class="col-8" id=""></div>
        <div class="col-2" id=""></div>
-->