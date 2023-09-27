<?php
	echo "Saisir la température en °C :\n" ;
	$température = fgets( STDIN ) ;
	$Resultat = 1.8 * $température + 32 ;
	echo "Température en °F : " , $Resultat , " \n";
?>
