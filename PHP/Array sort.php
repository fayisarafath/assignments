<?php
$age = array("Fayis"=> 24,"Jayaram"=>23,"Pyaree"=>22);
$mark = array("Fayis"=> 70,"Jayaram"=>50,"Pyaree"=>60);
asort($mark);	
foreach ($mark as $key => $val)
 {

echo "mark[".$key."]=".$val."\n";

}
?>
