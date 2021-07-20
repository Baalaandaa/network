<?php

require_once "/home/u838968328/public_html/lib/data_class.php";

class ConnectDB{
	
	
	public $query;
	public $mysqli;
	const db_host = Setting::db_host;
	const db_name = Setting::db_name;
	const db_pass = Setting::db_pass;
	const db_user = Setting::db_user;
	

	
	function __construct(){
		$this->mysqli = @new mysqli(self::db_host, self::db_user, self::db_pass, self::db_name);
		if (mysqli_connect_errno()) {
			echo "Подключение невозможно: ".mysqli_connect_error();
		}
	}
	 
}
	