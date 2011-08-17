<?php
	/**
	 * Class to Conect Data Base
	 * @author: Lic. Oscar Fernando Díaz Ovalle
	 * Date: 27/07/2011
	 */
	class conector {
		
		public $link;
		
		/**
		 * Constructor Class
		 * Functionality: Asign value link to conector
		 */
		public function __construct(){
			$this->genLink();
		}
		
		/**
		 * Generate conection in Data Base
		 */
		function genLink () {
			$db_host="127.0.0.1";
			$db_nombre="gallery";
			$db_user="gallery";
			$db_pass="gallery";
			$link=mysql_connect($db_host, $db_user, $db_pass) or die ("Error conectando a la base de datos.");
			mysql_select_db($db_nombre ,$link) or die("Error seleccionando la base de datos.");
			$this->link = $link;
		}
	}
?>