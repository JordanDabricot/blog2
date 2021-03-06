<?php
session_start();

function sessionExiste(){
    if(isset($_SESSION['login'])){
        echo '<li><a href="/blog/Template/UserAdmin.template.php">' .ucfirst($_SESSION['login']). '</a></li>
              <li><a href="/blog/Template/PublishTemplate.php">Publier</a></li>
              <li><a href="/blog/Deconnect.php">Déconnexion</a></li>';
    }else{
        echo '<li><a href="/blog/Template/RegisterTemplate.php">Inscription</a></li>
              <li><a href="/blog/Template/SignIn.template.php">Se Connecter</a></li>';
    }
}
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="https://use.fontawesome.com/66c12c9159.js"></script>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper grey darken-1">
                <a href="/blog/index.php" class="brand-logo">BLOG</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php sessionExiste();?>
                </ul>
            </div>
        </nav>
    </body>
</html>

