<?php

class ReplaceTmpl{

	function __construct(){
		return true;
		
	}
	
   function GetReplaceTemplate($template, $ch, $n){

        $require = "tmpl/".$template ;

        $temp = file_get_contents($require);

        $ech = str_replace( $ch, $n, $temp);

        echo $ech;
	}
	
}