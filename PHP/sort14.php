<?php
$age = array("Fayis"=> 24,"fawas"=>12,"ashraf"=>42);
$mark = array("Fayis"=> 100,"fawas"=>95,"ashraf"=>89);
asort($mark);	
foreach ($mark as $key => $val)
 {

echo "mark[".$key."]=".$val."\n";

}
?>
