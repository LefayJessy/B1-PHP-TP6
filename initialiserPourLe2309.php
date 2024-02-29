<?php
$nbPassagers = array( 35,10,22,52,15,58,8,73) ;
 
 for ($i = 0 ; $i < count($nbPassagers); $i = $i + 1 ){
	 echo "La traversée ", $i + 1 ," a transporté ",$nbPassagers[$i]," passagers.\n";
}	
		
?>
