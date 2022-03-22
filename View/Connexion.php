<?php
    session_start();
    
    require_once "../Controller/ManagerConnexion.php";

    @$login = $_POST['login'];
    @$pass = $_POST['pass'];
    @$statu = $_POST['statu'];
    @$valider = $_POST['valider'];
    $erreur = "";
    
    if(isset($valider))
    {
        // Faire la demande de connexion à la base de donnée
        

        $conex = new ManagerConnexion();
        
        $InfoPersonne = $conex->checkIfExist($login, $pass); // Rajouter ke hachage md5()
        $id = $InfoPersonne[0]->id_pers; // Erreur ici
        if ( $id != "" )
        {
            @$_SESSION['id'] = $id;
            @$_SESSION['connexion'] = $conex;
            header("location:Student/indexStudent.php");
        }
        else
        {
            $erreur = "Vous n'avez pas de compte sur ce site";
        }
    }
?>
<html>
    <head>
        <title>Connexion</title>
    </head>
    <body>
        <!-- Formaulaire de connexion ( commentaire pour Lisa  ^^ ) -->
        <form name="fo" action="" method="post">
            <!-- Selections du type de connexion -->
            <select name="statu">
                <option value="Student">Student</option>
                <option value="Pilot">Pilot</option>
                <option value="Admin">Admin</option>
            </select>
            <!-- Espace login -->
            <div class="lablel">Login</div>
            <input type="text" name="login" value="<?php echo $login ?>" />
            <br />
            <!-- Espace Mot de passe -->
            <div class="lable">Mot de passe</div>
            <input type="password" name="pass" /><br />
            <!-- Boutton valider -->
            <br />
            <input type="submit" name="valider" value="S'authentifier" />
        </form>
        <!-- Affichage du message d'erreur ( commentaire pour Lisa  ^^ yip) -->
        <?php if(!empty($erreur)){ ?>
        <div id="erreur">
            <!-- Récupérations de la valeur erreur -->
            <?=$erreur?>
        </div>
        <?php } ?>
    </body>
</html>