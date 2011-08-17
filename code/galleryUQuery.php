<?php
	include ('../tools/conectorDB.php');
	$conector = new conector();
	
	$swicthUpload = @$_POST['submit'];
	
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/pjpeg"))
	&& ($_FILES["file"]["size"] < 20000))
	{
		$queryFile = mysql_query("select max(idPicture) from picture ",$conector->link);
		$res = mysql_fetch_assoc($queryFile);
		
		move_uploaded_file($_FILES["file"]["tmp_name"],"/webserver/picture/".$res['max(idPicture)'].".jpg");
		
		mysql_query("insert into picture (idPicture) values (\"".$res['max(idPicture)']."\")",$conector->link);
		
		echo "<script language=\"JavaScript\" type=\"text/javascript\">";
			echo "alert(\"Saved File\")";
		echo "</script>";
	}
	else
	{
		if ($swicthUpload != ""){
			echo "<script language=\"JavaScript\" type=\"text/javascript\">";
				echo "alert(\"Invalid File\")";
			echo "</script>";
		}
	}
?>