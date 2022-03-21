<?php
    session_start();
    @$login = $_POST['login'];
    @$pass = $_POST['pass'];
    @$statu = $_POST['statu'];
    @$valider = $_POST['valider'];
    $erreur = "";
    if(isset($valider))
    {
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
            <select name="statu">
                <option value="Student">Student</option>
                <option value="Pilot">Pilot</option>
                <option value="Admin">Admin</option>
            </select>
            <div class="lablel">Login</div>
            <input type="text" name="login" value="<?php echo $login ?>" />
            <br />
            <div class="lable">Mot de passe</div>
            <input type="password" name="pass" /><br />
            <input type="submit" name="valider" value="S'authentifier" />
        </form>
        <!-- Affichage du message d'erreur ( commentaire pour Lisa  ^^ yip) -->
        <?php if(!empty($erreur)){ ?>
        <div id="erreur">
            <?=$erreur?>
        </div>
        <?php } ?>
    </body>
</html>