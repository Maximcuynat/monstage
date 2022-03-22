<?php
    session_start();
    
    if(@$_SESSION['id'] == "")
    {
        header("location:../Connexion.php");
        exit();
    }
    else
    {   
        $id = @$_SESSION['id'];
        // Récupération des informations utilisateur
        
        $conex = new ManagerConnexion();

        $userInfo = $conex->getUserInfo($id);
        print_r($userInfo);

    }
?>
<html>
    <head>
        <title>
            Acceuil Student
        </title>
    </head>
    <body>
        <?php require 'header.php'; ?>
        <!-- A garder , il est obligatoire !!!! -->
        <a href="../Deconnexion.php">Se déconnecter</a>
    </body>
</html>