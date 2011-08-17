<html>
	<title>Gallery</title>
	<link href="../css/gallery.css" rel="stylesheet" type="text/css">
	<script language="JavaScript" type="text/javascript" src="galleryService.js"></script>
	
	<body>
		<center><form>
			<div class="title">Photo Gallery</div>
			<br>
			
			<input type="hidden" id="idPicture" name="idPicture" value="0">
			
			<div>
				<table>
					<tr><td colspan="2">
						<input type="image" id="picture" name="picture" src="../pictures/default.jpg" class="picture">
					</td></tr>
					<tr>
						<td> <input type="button" value="previous" onclick="prev();" onpress="prev();" class="button"> </td>
						<td> <input type="button" value="next" onclick="next();" onpress="next();" class="button"> </td>
					</tr>
				</table>
			</div>
			<br>
			<div>
				<iframe src="galleryUpload.php"></iframe>
			</div>
			<br>
			<?php
				include ('galleryJSon.php');
			?>
			<br>
			
			
		</form></center>
	</body>
</html>