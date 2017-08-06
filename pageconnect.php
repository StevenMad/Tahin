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
    <?php
  //  session_start();
    //if (isset($_SESSION['id']) && isset($_SESSION['psw'])){
    ?>
   <div data-role="page" id="radio">
  
     <div data-role="main" class="ui-content">

        <div id="header">
          <a href="#mypanel"><span  id="sandwich">&#9776;</span> </a>
          <img src="images/logo.png" alt="Logo" id="logoheader">
          <a href="./profile.php"><img src="images/user.png" alt="profile" id="user"></a>
        </div>
        <div data-role="panel" class="sidenav" id="mypanel" data-display="overlay" data-position="left" >
                <a href="#" class="buttonnav" id="liennav">Forum</a>
                <a href="#" class="buttonnav" id="liennav">Bon plans</a>
                <a href="#" class="buttonnav" id="liennav">Actualités</a>
                <a href="./logout.php" class="buttonnav" id="liennav" data-ajax="false">Deconnexion</a>
          </div>
<!-- CASES MUSIQUE --> 
     
          <div id="boutonsMusic">
                <a href="#"  id="boutonsmu">Retro</a>
                <a href="#"  id="boutonsmu">Hits</a>
          </div>
          <div id="boutonsMusic">
                <a href="#"  id="boutonsmu">Tropical</a>
                <a href="#"  id="boutonsmu">Calme</a>
          </div>
          <div id="boutonsMusic">
                <a href="#"  id="boutonsmu">Travail</a>
                <a href="#"  id="boutonsmu">Ménage</a>
           </div>
       
      </div>

    </div>
   
    <?php 
 // } else{
   //   echo'Vous n\'êtes pas connecté';
     // header('Refresh :3;URL=http://localhost/connectionForm.php');
  //}
   ?>
</body>
</html>