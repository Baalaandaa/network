<?php 


require_once"lib/database_class.php";
require_once"lib/data_class.php";



$data=new Setting();


if($ups){
if($tmp){
if($data){
if($db->ifAuth()){
$texta = file_get_contents(fl/at.php);}
else $textda = file_get_contents(fl/af.php);
$tmp->GetReplaceTmp("authed", "text", $texta);
$tmp->GetReplaceTmp("didntauth", "text",$textda);

}
}
}


