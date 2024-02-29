<?php
$nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);
$nbTotalPassagers = 0;

for ($i = 0; $i < count($nbPassagers); $i++) {
	$passager = $nbPassagers[$i];
	$nbTotalPassagers = $nbTotalPassagers + $passager;
}

echo "$nbTotalPassagers, passagers transportés le 22/09/2022";
?>

