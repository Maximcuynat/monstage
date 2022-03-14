<?php
require "header.php";
?>
<div class="Deleguate_Cadre">
    <!--=============================COMPANIES -->
    <div class="Rights_Min">
        <form class="Deleguate_form">
            <h2>Companies Management</h2>
            <input type="radio" name="R_Company">
            <label class="Deleguate_LBL">Search a company</label><br>
            <input type="radio" name="C_Company">
            <label class="Deleguate_LBL">Create a company</label><br>
            <input type="radio" name="U_Company">
            <label class="Deleguate_LBL">Modify a company</label><br>
            <input type="radio" name="D_Company">
            <label class="Deleguate_LBL">Remove a company</label><br>
            <input type="radio" name="Stat_Company">
            <label class="Deleguate_LBL">Consult company statistics</label><br>
            <input type="radio" name="Eval_Company">
            <label class="Deleguate_LBL">Assess a company</label><br>
        </form>
    </div>
    <!--=============================OFFERS -->
    <div class="Rights_Min">
        <form class="Deleguate_form">
            <h2>Offers Management</h2>
            <input type="radio" name="R_Offer">
            <label class="Deleguate_LBL">Search an offer</label><br>
            <input type="radio" name="C_Offer">
            <label class="Deleguate_LBL">Create an offer</label><br>
            <input type="radio" name="U_Offer">
            <label class="Deleguate_LBL">Modify an offer</label><br>
            <input type="radio" name="D_Offer">
            <label class="Deleguate_LBL">Remove an offer</label><br>
            <input type="radio" name="Stat_Offer">
            <label class="Deleguate_LBL">Consult offer statistics</label><br>
        </form>
    </div>
    <!--============================= STUDENTS -->
    <div class="Rights_Min">
        <form class="Deleguate_form">
            <h2>Students Management</h2>
            <input type="radio" name="R_Student">
            <label class="Deleguate_LBL">Search a student</label><br>
            <input type="radio" name="C_Student">
            <label class="Deleguate_LBL">Create a student</label><br>
            <input type="radio" name="U_Student">
            <label class="Deleguate_LBL">Modify a student</label><br>
            <input type="radio" name="D_Student">
            <label class="Deleguate_LBL">Remove a student</label><br>
            <input type="radio" name="Stat_Student">
            <label class="Deleguate_LBL">Consult student statistics</label><br>
        </form>
    </div>
    <!--============================= DELEGUATE -->
    <div class="Rights_Min">
        <form class="Deleguate_form">
            <h2>Deleguates Management</h2>
            <input type="radio" name="R_Deleguate">
            <label class="Deleguate_LBL">Search a deleguate</label><br>
            <input type="radio" name="C_Deleguate">
            <label class="Deleguate_LBL">Create a deleguate</label><br>
            <input type="radio" name="U_Deleguate">
            <label class="Deleguate_LBL">Modify a deleguate</label><br>
            <input type="radio" name="D_Deleguate">
            <label class="Deleguate_LBL">Remove a deleguate</label><br>
        </form>
    </div>
    <!--============================= Pilots -->
    <div class="Rights_Min">
        <form class="Deleguate_form">
            <h2>Pilots Management</h2>
            <input type="radio" name="R_Pilot">
            <label class="Deleguate_LBL">Search a pilot</label><br>
            <input type="radio" name="C_Pilot">
            <label class="Deleguate_LBL">Create a pilot</label><br>
            <input type="radio" name="U_Pilot">
            <label class="Deleguate_LBL">Modify a pilot</label><br>
            <input type="radio" name="D_Pilot">
            <label class="Deleguate_LBL">Remove a pilot</label><br>
        </form>
    </div>
    <!--============================= Candidacy -->
    <div class="Rights_Max">
        <form class="Deleguate_form">
            <h2>Candidacy Management</h2>
            <input type="radio" name="Issued">
            <label class="Deleguate_LBL">Notify that an internship validation 
                sheet has been issued by the company</label><br>
            <input type="radio" name="Signed">
            <label class="Deleguate_LBL">Notify the administrative assistant
                 that an internship validation sheet has been signed by the pilot</label><br>
        </form>
    </div>
</div>


<?php
require "footer.php";
?>