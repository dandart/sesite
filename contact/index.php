<?php
include '../header.php';
?>
<h2>Contact Us</h2>
You can contact us using this form. --NOT WORKING--<a href="signup.php">Want to sign up as a member of Silent Echoes?</a>
<p>New: You can now request new software here.</p>
<form action="send.php" method="post">
<table>
<tr><td>Your name:</td><td><input type="text" name="name"></td></tr>
<tr><td>Your e-mail address:</td><td><input type="text" name="email"></td></tr>
<tr><td>Who the message is for:</td><td><input type="text" name="recipient"></td></tr>
<tr><td>Your message:</td><td><textarea cols="40" rows="15" name="message"></textarea></td></tr>
<tr><td></td><td><input type="submit" value="Send off"><input type="reset"></td></tr>
</table>
</form>
<?php
include '../footer.php';
?>
