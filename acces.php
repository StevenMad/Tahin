<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Access page</title>
    <!-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">-->
    <link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.css">
    <link rel="stylesheet" href="Css.css">
    <!-- Include the jQuery library -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include the jQuery Mobile library -->
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>

<body>
    <div data-role="page" id="choixAcces">

        <div data-role="main" class="ui-content" id="main-acces">
            <img src="images/logo.png" alt="Logo" id="logo">

            <div id="menu">
                <a href="/connectionForm.php" data-transition="fade" class="button" id="lien"> Connexion </a>
                <a href="#inscription" data-transition="none" class="button" id="lien"> Inscription </a>
                <a href="#radioSansCo" data-transition="none" class="button" id="lien"> Radio </a>
            </div>

        </div>

    </div>

    <!-- inscription page -->

    <div data-role="page" id="inscription">

        <div data-role="main" class="ui-content">
            <img src="images/logo.png" alt="Logo" id="logo">
            <div id="menu1">
                <form action="inscription.php" id="formulaire1 " method="post" data-ajax="false">
                    <input type="text" name="nom" placeholder="Nom" id="formu">
                    <input type="text" name="prenom" placeholder="Prenom" id="formu">
                    <input type="text" name="identifiant" placeholder="Identifiant" id="formu">
                    <input type="password" name="psw" placeholder="Mot de Passe" id="formu">
                    <input type="submit" name="valider" value="inscription" id="formu" data-role="none">
                </form>
                <a href="#" data-transition="fade" class="button" id="lien"> Inscription Facebook </a>
                <a href="#choixAcces" data-transition="fade" class="button" id="lien"> Accueil </a>
            </div>
        </div>
    </div>
   
    <!-- RADIO non connectée -->
    <div data-role="page" id="radioSansCo">

        <div data-role="main" class="ui-content">
          <div data-role="panel" class="sidenav" id="mypanel" data-display="overlay" data-position="left" >
                <a href="#" class="buttonnav" id="liennav" data-role="none">Forum</a>
                <a href="#" class="buttonnav" id="liennav"data-role="none">Bon plans</a>
                <a href="#" class="buttonnav" id="liennav"data-role="none">Actualités</a>
                <a href="#choixAcces" class="buttonnav" id="liennav"data-role="none">Accueil</a>

            </div>
            <a href="#mypanel"><span  id="sandwich">&#9776;</span> </a>

            <img src="images/logo.png" alt="Logo" id="logocentral">

        </div>

    </div>
<!-- script --> 

</body>

</html>