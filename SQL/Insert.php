<?php

require_once"query.php";

class Insert extends Query
{

    function __construct(){
        return true;
    }

    public static function Insert($ai,$v, $h, $t){
        switch($v){
            case '1':
            Query::query('Insert into $t ($ai[1]) VALUES ($h[1])');
            break;

            case '2':
            Query::query('Insert into $t ($ai[1],$ai[2]) VALUES ($h[1], $h[2])');
            break;

            case '3':
            Query::query('Insert into $t ($ai[1],$ai[2], $ai[3]) VALUES ($h[1], $h[2],$h[3])');
            break;

            case '4':
            Query::query('Insert into $t ($ai[1],$ai[2], $ai[3], $ai[4]) VALUES ($h[1], $h[2],$h[3], $h[4])');
            break;
        }
    }

}
