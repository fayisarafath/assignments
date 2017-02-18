<?php 
define("con1",100);
define("con2",500);
echo "constant1=".constant("con1")."<br>";
echo "constant2=".constant("con2")."<br>";
define("con1",70);
define("con2",57);
echo "constant1=".constant("con1")."<br>";
echo "constant2=".constant("con2");

?>
