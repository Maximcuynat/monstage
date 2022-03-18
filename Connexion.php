<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="Connexion.css" />
</head>

<body>
    <main>
        <section class="containcenter-maxcontent" id="containLogo">
            <img id="Logo" src="Logo.png" alt="logo" class="ombre" />
        </section>

        <section id="connexion" class="ombre containcenter-maxcontent">

            <div id="containconnexion" class="">
                <h3>CONNEXION</h3>
                <div id="selection" class="containcenter-maxcontent">
                    <label for="statut">Je suis &nbsp </label>
                    <select name="statut " id="statut " class="pointer" style="background-color: bisque; border: 0; border-radius: 5px;">
                        <option value="Etudiant ">Student</option>
                        <option value="Pilote ">Pilot</option>
                        <option value="Délégué ">Admin</option>
            p        </select>
                </div>

                <input class="nptconnex ombre writer " id="mail " value="" type="email " placeholder="mail "><br><br>
                <input class="nptconnex ombre writer " id="password " value="" type="password" placeholder="Password"><br><br>

                <input id="login" class="pointer bouton-Y" value="Login " type="button " />
            </div>
        </section>
    </main>
    <img id="imgF" class="foot" src="StudentF.png" alt="etudiante" />
    <a href=""><input id="Legacymentions" value="Legacy mentions" type="button" class="bouton-Y Center foot pointer" /></a>
    <img id="imgH" class="foot" src="StudentH.png" alt="etudiant" />
</body>
