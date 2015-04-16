<?php
include '../header.php';
?>
<h2>Sign Up For Silent Echoes Membership</h2>
If you want to become a staff member, donator or just receive newsletters, sign up here.
<form action="register.php" method="post">
<table>
<tr><td>Name:</td><td><input type="text" name="name"></td></tr>
<tr><td>Date of Birth:</td><td><input type="text" name="dateofbirth"></td></tr>
<tr><td>Email address:</td><td><input type="text" name="email"></td></tr>
<tr><td>Reason to become<br> a member:</td><td><textarea cols="30" rows="5" name="reason"></textarea></td></tr>
<tr><td>Any software, programming,<br> gaming, animation, <br>or movie-making skills:</td><td><textarea cols="30" rows="5" name="skills"></textarea></td></tr>
<td>Receive newsletter?</td><td><input type="checkbox" name="newsletter"></td></tr>
<tr><td></td><td><input type="submit" value="Sign Up!"><input type="reset"></td></tr>
</table>
</form>

<?php
include '../footer.php';
?>