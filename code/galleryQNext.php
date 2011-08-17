<?php
	include ('tools/conectorDB.php');
	$conector = new conector();
	
	$idPicture = @$_GET['idPicture'];
	$idPicture+1;
	
	$res = mysql_query("select * from picture where idPicture = '$idPicture'",$conector->link);
	if (mysql_num_rows($res) != 0) {
		echo "../pictures/".$idPicture.".jpg";
	} else {
		$idPicture-1;
		echo "../pictures/".$idPicture.".jpg";
	}

?>