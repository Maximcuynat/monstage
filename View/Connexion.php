<?php
    session_start();
    @$login = $_POST['login'];
    @$pass = $_POST['pass'];
    @$statu = $_POST['statu'];
    @$valider = $_POST['valider'];
    $erreur = "";
    if(isset($valider))
    {
        // Faire la demande de connexion à la base de donnée
        require '../Controller/ManagerConnexion.php';
        $authentification = new ManagerConnexion();
        $userData = $authentification->checkIfExist($login, $pass);
        
        if( $login == "Maxim" && $pass == "Cuynat" ) // === Verifications de l'identité de la personne
        {   
            // Vérifications du statu : student, pilot, admin
            if($statu == "Student")
            {
                $_SESSION['role'] = "Student";
                $_SESSION['name'] = $login;
                header("location:Student/indexStudent.php");
            }
        }
        else
        {
            //
            $erreur = "Bad login or password"; // In english !!!
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