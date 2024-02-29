<?php
$nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);
$nbTotalPassagers = 0;
$traverseMoins20 = 0;

for ($i = 0; $i < count($nbPassagers); $i++) {
    $passager = $nbPassagers[$i];
    $nbTotalPassagers = $nbTotalPassagers + $passager;
    if ($passager < 20) {
        $traverseMoins20++;
    }
}

echo "$traverseMoins20 traversée non rentable le 22/09/2022\n";
?>

