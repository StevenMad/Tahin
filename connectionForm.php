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

    <div data-role="page" id="connexion">

        <div data-role="main" class="ui-content">
            <img src="images/logo.png" alt="Logo" id="logo">
            <div id="menu">
                <form name="connection" method="POST" action="connexion.php" data-ajax="false">
                    <input type="text" name="ident" placeholder="Identifiant" id="formu">
                    <input type="password" name="psw" placeholder="Mot de Passe" id="formu">
                    <input type="submit" data-role="none" name="valider" value="OK" id="formu">
                </form>
                <a href="#" data-transition="fade" class="button" id="lien"> Connexion Facebook </a>
                <a href="./acces.php" data-transition="fade" class="button" id="lien"> Accueil </a>
            </div>
        </div>

    </div>

</body>