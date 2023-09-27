<?php
	echo "Saisir la vitesse en km/h :" ;
	$vitesseEnNoeuds = fgets( STDIN ) ;
	$Resultat = $vitesseEnNoeuds / 1.852 ;
	echo "Resultat de la conversion : " , $Resultat , " noeuds \n";
?>
