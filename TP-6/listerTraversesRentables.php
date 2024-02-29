<?php
$nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);
$nbTotalPassagers = 0;
$traverseRentable = array();
$traversePlus20 = 0;

for ($i = 0; $i < count($nbPassagers); $i++) {
    $passager = $nbPassagers[$i];
    $nbTotalPassagers = $nbTotalPassagers + $passager;
    if ($passager > 20) {
        $traversePlus20++;
        $traverseRentable[] = $traversePlus20;
    }
}

echo "Traversée  rentable le 22/09/2022 :" ,$traverseRentable,"\n";
?>


