<?php

require_once "realise_connect.php";

abstract class Query{
	
	public $mysqli;
	 
	function __construct(){
		return true;	
	}
	
	
	public static function query($query){
		$cn = new ConnectDB();
		$res = $cn->mysqli->query($query);
		$cn->mysqli->close;
		return $res;
	}
}