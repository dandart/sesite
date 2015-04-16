<?php
include '../header.php';
?>
<h2>Signed Up!</h2>
You have successfully registered as a member. Please click on the above buttons to continue browsing.
<p>DEBUG:
<?php
print "<br>Name:" . $_POST['name'];
print "<br>DoB:" . $_POST['dateofbirth'];
print "<br>Email:" . $_POST['email'];
print "<br>Reason:" . $_POST['reason'];
print "<br>Skills:" . $_POST['skills'];
print "<br>Newsletter:" . $_POST['newsletter'];
?>
<?php
include '../footer.php';
?>