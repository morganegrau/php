<DOCTYPE html>
<head>
	<title>Exercice tableaux</title>
</head>

<body>

<?php
echo '<br/><br/><strong>Exercice 1 </strong><br/>';

	$mois = array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre');

	print_r($mois);


echo '<br/><br/><strong>Exercice 2 </strong><br/>';

	echo 'Afficher la troisième ligne : '.$mois[2];

echo '<br/><br/><strong>Exercice 3 </strong><br/>';

	echo 'Afficher la valeur de l\'index 5 : '.$mois[5];

echo '<br/><br/><strong>Exercice 4 </strong><br/>';

	$mois[8] = 'août';
	echo 'Rectifions la faute en ajoutant l\'accent au mois d\''.$mois[8];

echo '<br/><br/><strong>Exercices 5 et 6</strong><br/>';
	function array_push_assoc($array, $key, $value){
		$array[$key]=$value;
	return $array;
	}

	$dep['Le Vaucluse']= 84;

	print_r($dep);

echo '<br/><br/><strong>Exercice 7</strong><br/>';

	$dep['Le Gard']= 30;
	$dep['L\'Hérault']= 34;

	print_r($dep);

echo '<br/><br/><strong>Exercice 8</strong><br/>';

foreach ($mois as $detail)
{
	echo '<p>'.$detail.'</p>';
}

echo '<br/><br/><strong>Exercice 9 et 10</strong><br/>';

foreach ($dep as $key => $value)
{
	echo '<p>Le département numéro : '.$value.' est '.$key. '</p>';
}


?>

</body>
</html>