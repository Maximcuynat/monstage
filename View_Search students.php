<!DOCTYPE php>
<html lang="en">

  <!--ONGLET-->
  <head>
    <meta charset="utf-8">
    <meta name="Viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet"  type="text/css" href="generalStyle.css"> <!-- style page : css -->
    <link rel="stylesheet"  type="text/css" href="style.css">
    <link rel="icon" alt="Logo" href="../assets/img/logo_site_rond.png">
    <title>Search for students</title>
  </head>

  <!--BODY-->
	<body>
    <!--HEADER-->
    <?php require "header_pilot.php";?>

    <!--MAIN-->
    <main>
      <!--FILTER-->
      <div class="Filter">
        <h2>Filter</h2>
      </div>

      <section class="sec">
        <!--STUDENTS-->
        <!-- Petits Cadres -->
        <div class="petit_cadre">
          <div class="Cadre_form">
            <h2>First name<br>Last name</h2>
            <p>Class<br>Center</p>
          </div>
          <div class="Cadre_form">
            <h2>First name<br>Last name</h2>
            <p>Class<br>Center</p>
          </div>
          <div class="Cadre_form">
            <h2>First name<br>Last name</h2>
            <p>Class<br>Center</p>
          </div>
        </div>
        <!--STUDENT ACCOUNT-->
        <!-- Gros Cadre -->
        <div class="Cadre_form gros_cadre">
          <form action="" method="POST">
            <div class="div_left_right">
                <div>
                  <h2>First name<br>Last name</h2>
                  <p>Center</p>
                </div>
                <div>
                    <p><br>Class</p>
                    <br>
                    <label><input name="Delegate" type="checkbox"/>Delegate</label>
                </div>
            </div>
            <hr class="barre">
            <p>Internships statistics</p>
              <input class="btn_validate" type="submit" name="submit" value="Manage Rights">
              <a href=""><img class="logo_delete" src="../assets/img/logo_delete.png"/></a>
              <a href=""><img class="logo_update"  src="../assets/img/logo_update.png"/></a>
        </form>
      </div>
      </section>
    </main>


	  <!--FOOTER-->
    <footer>
      <div class="Footer_legal_notices">
        <h4 class="Footer_title">Legal Notices</h4>
        <div class="Link_legal_notices">
        <a href="#">Legal Notice 1</a><br>
        <a href="#">Legal Notice 2</a><br>
        <a href="#">Legal Notice 3</a><br>
        <a href="#">Legal Notice 4</a><br>
        <a href="#">Legal Notice 5</a><br>
        </div>
      </div>

      <div class="Footer_social_networks">
        <div class="F">
        <a href="https://fr-fr.facebook.com/"><img class="Facebook_logo" width="75" src="../assets/img/logo_facebook.png"/></a>
        </div>
        <div class="T">
        <a href="https://twitter.com/"><img class="Twitter_logo" width="75" src="../assets/img/logo_twitter.png"/></a>
        </div>  
        <div class="I">
        <a href="https://www.instagram.com/"><img class="Instagram_logo" width="75" src="../assets/img/logo_instagram.png"/></a>
        </div>
      </div>
    </footer>
  </body>
</html>