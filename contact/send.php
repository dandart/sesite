<?php
include '../header.php';
?>
<h2>Sent off</h2>
Your mail was successfully sent off. Please click a button above to continue navigation.
<!-- Make send mail script -->
<p>DEBUG:
<?php
print "<br>Name: " . $_POST['name'];
print "<br>Email: " . $_POST['email'];
print "<br>Recipient: " . $_POST['recipient'];
print "<br>Message: " . $_POST['message'];
?>
</p>
<?php
include '../footer.php';
?>