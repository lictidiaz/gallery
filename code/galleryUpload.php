<html>
	<title>Upload File</title>
	<link href="../css/gallery.css" rel="stylesheet" type="text/css">
	
	<?php
		include ('galleryUQuery.php');
	?> 
	
	<body>
		<?php
			echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"POST\" enctype=\"multipart/form-data\">";
				echo "<label for=\"file\">FILE NAME: </label>";
				echo "<input type=\"file\" name=\"file\" id=\"file\" class=\"buttonFile\" />";
				echo "<br>";
				echo "<input type=\"submit\" id=\"submit\" name=\"submit\" value=\"Upload\" class=\"buttonSubmit\" />";
			echo "</form>";
		?>
	</body>
</html>