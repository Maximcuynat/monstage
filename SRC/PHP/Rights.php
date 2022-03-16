<?php
    echo "Vous êtes dans Rights.php<br>";

    // COMPANY
    if (isset($_POST['C_Company']))
    {
        echo "C_Company<br>";
        
    }
    if (isset($_POST['R_Company'])) {echo "R_Company<br>";}
    if (isset($_POST['U_Company'])) {echo "U_Company<br>";}
    if (isset($_POST['D_Company'])) {echo "D_Company<br>";}
    if (isset($_POST['Stat_Company'])) {echo "Stat_Company<br>";}
    if (isset($_POST['Eval_Company'])) {echo "Eval_Company<br>";}

    // OFFER
    if (isset($_POST['C_Offer'])) {echo "C_Offer<br>";}
    if (isset($_POST['R_Offer'])) {echo "R_Offer<br>";}
    if (isset($_POST['U_Offer'])) {echo "U_Offer<br>";}
    if (isset($_POST['D_Offer'])) {echo "D_Offer<br>";}
    if (isset($_POST['Stat_Offer'])) {echo "Stat_Offer<br>";}

    // STUDENT
    if (isset($_POST['C_Student'])) {echo "C_Student<br>";}
    if (isset($_POST['R_Student'])) {echo "R_Student<br>";}
    if (isset($_POST['U_Student'])) {echo "U_Student<br>";}
    if (isset($_POST['D_Student'])) {echo "D_Student<br>";}
    if (isset($_POST['Stat_Student'])) {echo "Stat_Student<br>";}

    // DELEGUATE
    if (isset($_POST['C_Deleguate'])) {echo "C_Deleguate<br>";}
    if (isset($_POST['R_Deleguate'])) {echo "R_Deleguate<br>";}
    if (isset($_POST['U_Deleguate'])) {echo "U_Deleguate<br>";}
    if (isset($_POST['D_Deleguate'])) {echo "D_Deleguate<br>";}

    // PILOT
    if (isset($_POST['C_Pilot'])) {echo "C_Pilot<br>";}
    if (isset($_POST['R_Pilot'])) {echo "R_Pilot<br>";}
    if (isset($_POST['U_Pilot'])) {echo "U_Pilot<br>";}
    if (isset($_POST['D_Pilot'])) {echo "D_Pilot<br>";}

    // CANDIDACY
    if (isset($_POST['Signed'])) {echo "Signed<br>";}
    if (isset($_POST['Issued'])) {echo "Issued<br>";}

?>