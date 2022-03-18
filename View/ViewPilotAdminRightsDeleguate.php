<?php
require "header.php";
?>
<div id="Deleguate">
    <form action="SRC/PHP/Rights.php" method="POST">
        <div class="Deleguate_Cadre">
            <!--=============================COMPANIES -->
            <div class="Deleguate_form">
                <h2>Companies Management</h2>
                <input type="checkbox" name="R_Company">
                <label class="Deleguate_LBL">Search a company</label><br>
                <input type="checkbox" name="C_Company">
                <label class="Deleguate_LBL">Create a company</label><br>
                <input type="checkbox" name="U_Company">
                <label class="Deleguate_LBL">Modify a company</label><br>
                <input type="checkbox" name="D_Company">
                <label class="Deleguate_LBL">Remove a company</label><br>
                <input type="checkbox" name="Stat_Company">
                <label class="Deleguate_LBL">Consult company statistics</label><br>
                <input type="checkbox" name="Eval_Company">
                <label class="Deleguate_LBL">Assess a company</label><br>
            </div>
            <!--=============================OFFERS -->
            <div class="Deleguate_form">
                <h2>Offers Management</h2>
                <input type="checkbox" name="R_Offer">
                <label class="Deleguate_LBL">Search an offer</label><br>
                <input type="checkbox" name="C_Offer">
                <label class="Deleguate_LBL">Create an offer</label><br>
                <input type="checkbox" name="U_Offer">
                <label class="Deleguate_LBL">Modify an offer</label><br>
                <input type="checkbox" name="D_Offer">
                <label class="Deleguate_LBL">Remove an offer</label><br>
                <input type="checkbox" name="Stat_Offer">
                <label class="Deleguate_LBL">Consult offer statistics</label><br>
            </div>
            <!--============================= STUDENTS -->
            <div class="Deleguate_form">
                <h2>Students Management</h2>
                <input type="checkbox" name="R_Student">
                <label class="Deleguate_LBL">Search a student</label><br>
                <input type="checkbox" name="C_Student">
                <label class="Deleguate_LBL">Create a student</label><br>
                <input type="checkbox" name="U_Student">
                <label class="Deleguate_LBL">Modify a student</label><br>
                <input type="checkbox" name="D_Student">
                <label class="Deleguate_LBL">Remove a student</label><br>
                <input type="checkbox" name="Stat_Student">
                <label class="Deleguate_LBL">Consult student statistics</label><br>
            </div>
            <!--============================= DELEGUATE -->
            <div class="Deleguate_form">
                <h2>Deleguates Management</h2>
                <input type="checkbox" name="R_Deleguate">
                <label class="Deleguate_LBL">Search a deleguate</label><br>
                <input type="checkbox" name="C_Deleguate">
                <label class="Deleguate_LBL">Create a deleguate</label><br>
                <input type="checkbox" name="U_Deleguate">
                <label class="Deleguate_LBL">Modify a deleguate</label><br>
                <input type="checkbox" name="D_Deleguate">
                <label class="Deleguate_LBL">Remove a deleguate</label><br>
            </div>
            <!--============================= Pilots -->
            <div class="Deleguate_form">
                <h2>Pilots Management</h2>
                <input type="checkbox" name="R_Pilot">
                <label class="Deleguate_LBL">Search a pilot</label><br>
                <input type="checkbox" name="C_Pilot">
                <label class="Deleguate_LBL">Create a pilot</label><br>
                <input type="checkbox" name="U_Pilot">
                <label class="Deleguate_LBL">Modify a pilot</label><br>
                <input type="checkbox" name="D_Pilot">
                <label class="Deleguate_LBL">Remove a pilot</label><br>
            </div>
            <!--============================= Candidacy -->
            <div class="Deleguate_form">
                <h2>Candidacy Management</h2>
                <input type="checkbox" name="Issued">
                <label class="Deleguate_LBL">Notify that an internship validation sheet has been issued by the company</label><br>
                <input type="checkbox" name="Signed">
                <label class="Deleguate_LBL">Notify the administrative assistant that an internship validation sheet has been signed by the pilot</label><br>
            </div>
        </div>
        <input id="btn_validate" type="submit" name="submit" value="Validate">
    </form>
</div>


<?php
require "footer.php";
?>