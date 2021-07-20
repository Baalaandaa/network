<?php

require_once"query.php";

class Select extends Query{

	function __construct(){
	return true;
	}
	
	public static function select($query){
	
		$result_set = Query::query($query);
		while ($row = $result_set->fetch_assoc()) {
			print_r($row);
			echo "<br />";
		}
		$result_set->close();
		
	}


}