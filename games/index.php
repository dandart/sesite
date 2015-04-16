<?php
include '../header.php';
?>
<h2>Welcome To Silent Echoes Games</h2>
Here you can download or buy games.
<table cols="7" rows="2" width="100%" border="1">
<tr><th>Name</th><th>Description</th><th>Size</th><th>Screenshot</th><th>Download</th><th>Buy</th><th>Register</th><th>License</th></tr>
<tr><td>Webtex</td><td>Text-based battle game</td><td>1 MB</td><td><a href="#" onMouseOver="shotviewer.src='shots/webtex.bmp'" onMouseOut="shotviewer.src='shots/shotviewer.bmp'">Here</a></td><td><a href="dld/webtexsetup.exe">DOS</a></td><td>N/A</td><td>N/A</td><td>Freeware</td></tr>
<!-- Add mouseover screenshot enlarger -->
</table>
<center>
<h2>Screenshot Viewer</h2>
<img src="shots/shotviewer.bmp" name="shotviewer" height="240" width="320"/>
<?php
include '../footer.php';
?>