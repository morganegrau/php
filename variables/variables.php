<DOCTYPE html>
	<head>
		<title>Exercice Variables</title>
	</head>

	<body>

	<?php
	$nom = 'GRAU';
	$prenom = 'Morgane';
	$age = 29;
	$km = 1;
	$string = 'Affiche une chaîne de caractères';
	$int = 22;
	$float = 3.55;
	$boolean = true;

echo '<br/><strong>exercice 1 </strong><br/>';
	
	echo 'Nom: ' .$nom. '<br/>';

echo '<br/><strong>exercice 2 </strong><br/>';

	echo 'Nom: ' .$nom. '<br/>
		 Prenom: ' .$prenom. '<br/>
		 Age: ' .$age. '<br/>';


echo '<br/><strong>exercice 3 </strong><br/>';
	
	$km = 125;
	$km = 12;
	echo $km;

echo '<br/><br/><strong>exercice 4</strong><br/>';
	
	echo $string.', et un chiffre : '.$int.', et un autre : '.$float.', et enfin le booleen : '.$boolean;


echo '<br/><br/><strong>exercice 5</strong><br/>';
	
	$chiffre = 89;
	echo 'voici la variable : '.$chiffre;

echo '<br/><br/><strong>exercice 6</strong><br/>';

	echo 'Bonjour, '.$prenom.' Comment vas-tu ?';

echo '<br/><br/><strong>exercice 7</strong><br/>';

	echo 'Bonjour, '.$prenom.' '.$nom.' tu as '.$age.' ans';

echo '<br/><br/><strong>exercice 8</strong><br/>';

	$ope1 = 3+4;
	$ope2 = 5*20;
	$ope3 = 45/5;

	echo 'Résultat Opé 1 : '.$ope1.'<br/> Résultat Opé 2 : '.$ope2.'<br/>
		 Résultat Opé 3 : '.$ope3;

	?>

	</body>

</html>