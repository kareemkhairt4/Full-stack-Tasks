<?php
$i=0;
for ($GLOBALS["i"]; $GLOBALS["i"]<= 20; $GLOBALS["i"]= $GLOBALS["i"] + 5) {
    echo $GLOBALS["i"] . "<br>";
}
echo "------------------------------" ."<br>";

for ( $GLOBALS["i"]=0; $GLOBALS["i"]<= 20; $GLOBALS["i"]++) {
    if ($GLOBALS["i"] % 5 == 0)
        echo $GLOBALS["i"]. "<br>";
}
echo "------------------------------";

?>