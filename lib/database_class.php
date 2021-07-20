<?php

require_once "/home/u838968328/public_html/SQL/select.php";
require_once "/home/u838968328/public_html/SQL/Insert.php";

class DBSel{

	public static function select($query){
		Select::select($query);
	}

}

class DBIns{

    public static function ins($ai,$v,$h,$t){
          Insert::Insert($ai, $v, $h, $t);
        return true;
    }

}

class DB{

	public static function select($query){
		DBSel::select($query);
        return true;
	}

    public static function ins($ai,$v, $h,$t){
        DBIns::ins($ai,$v, $h,$t);
        return true;
    }

}