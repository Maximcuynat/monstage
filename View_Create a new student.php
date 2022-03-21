<!DOCTYPE php>
<html lang="en">

  <!--ONGLET-->
  <head>
    <meta charset="utf-8">
    <meta name="Viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet"  type="text/css" href="../assets/css/style.css"> <!-- style page : css -->
    
    <link rel="icon" alt="Logo" href="../assets/img/logo_site_rond.png">
    <title>Create a new student account</title>
  </head>

  <!--BODY-->
	<body>
    <!--HEADER-->
    <header>
      <!--LOGO-->
      <div class="Header_logo">
      <img alt="Logo" width="120" src="../assets/img/logo_site_rond.png">
      </div>

      <!--TITLE-->
      <div class="Header_title">
      <h1>My CESI Internship</h1>
      </div>

      <!--PROFIL-->
      <div class="Header_profil">
      <h2 class="NP">Khaled KHEBBEB</h2>
      <img alt="Icon user" src="../assets/img/user.png">
      <img href="#" class="btn_menu" alt="Burger menu" src="../assets/img/burger_menu_blanc.png">
      </div>
    </header>


    <!--MAIN-->
    <main>
      <!--FORM SPACE-->
		  <form name="Form_space" action="ViewAdminAddPiloteMessage.php" method="POST">
			  <div class="New_student_form">
        <h2>Create a new student account</h2><br>
          <label for="Lname">Last name</label>
				  <input type="text" name="Lname" placeholder="Enter your last name"><br><br>
          <label for="Fname">First name</label>
				  <input type="text" name="Fname" placeholder="Enter your first name"><br><br>
          <label for="Center">Center</label>
				  <input type="text" name="Center" placeholder="Enter your center"><br><br>
          <label for="Class">Class</label>
				  <input type="text" name="Class" placeholder="Enter your class">
          <label><input name="Delegate" type="checkbox"/>Delegate</label>
				  <button id="Rights">Rights</button><br><br>
				  <input type="submit" value="Create">
			  </div>
		  </form>
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