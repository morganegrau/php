<DOCTYPE html>
	<head>
		<title>Exercice Conditions</title>
	</head>

	<body>

<?php
	$age = 29;

echo '<br/><br/><strong>Exercice 1 </strong><br/>';

	if ($age >= 18){
		echo 'Vous êtes majeur';
	}

	else {
		echo 'Vous êtes mineur';
	}

echo '<br/><br/><strong>Exercice 2 </strong><br/>';

	$IsEasy = true;

	if ($IsEasy == true){
		echo 'C\'est facile !';
	}
	else {
		echo 'C\'est difficile !';
	}


echo '<br/><br/><strong>Exercice 3 </strong><br/>';
?>
<form name="conditions" method="post" action="conditions.php">

	Entrez votre genre (homme ou femme): <input type="text" name="votregenre"/> <br/>
    
    Entrez votre age (entre 0 et 130 ans): <input type="text" name="votreage"/><br/>
            
    <input type="submit" name="valider" value="OK"/>

</form>

<?php
	$genre=$_POST['votregenre'];
	$age= $_POST['votreage'];

	if ($age >17 && $age<130 && $genre == 'homme'){
		echo 'Vous êtes un homme et vous êtes majeur';
	}
	elseif ($age <18 && $genre == 'homme'){
		echo 'Vous êtes un homme mineur';
	}
	elseif ($age > 17 && $age<130 && $genre == 'femme'){
		echo 'Vous êtes une femme majeure';
	}
	elseif ($age <18 && $genre == 'femme'){
	echo 'Vous êtes une femme mineure';
	}
	else {
		echo 'Vous êtes un alien ?';
	}


echo '<br/><br/><strong>Exercice 4 </strong><br/>';

?>
<form name="conditions" method="post" action="conditions.php">

	De quelle magnitude est le séisme (de 1 à 9) ? : <input type="text" name="magnitude"/> <br/>
            
    <input type="submit" name="valider" value="OK"/>

</form>
<?php

	$magnitude=$_POST['magnitude'];

	switch ($magnitude){
		case 1:
			echo 'Micro séisme impossible à ressentir';
		break;
		case 2:
			echo 'Micro séisme impossible à ressentir mais enregistrable par les sismomètres';
		break;
		case 3:
			echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti';
		break;
		case 4:
			echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats';
		break;
		case 5:
			echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégâts sur des bâtiments modernes.';
		break;
		case 6:
			echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180km) autour de l\épicentre.';
		break;
		case 7:
			echo 'Séisme capable de destructions majeures à modérées sur une large zone en fonction de la distance';
		break;
		case 8:
			echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de km.';
		break;
		case 9:
			echo 'Séisme capable de tout détruire sur une très vaste zone.';
		break;


		default:
			echo 'Mesure inexistante';

	}

echo '<br/><br/><strong>Exercice 5 </strong><br/>';

?>
<form name="conditions" method="post" action="conditions.php">

	Webdev F ou M ? tapez soit femme soit homme: <input type="text" name="viceversa"/> <br/>
            
    <input type="submit" name="valider" value="OK"/>

</form>
<?php

	$viceversa=$_POST['viceversa'];

	if ($viceversa != 'homme'){
		echo '<i>Vous êtes une développeuse</i>';
	}
	else {
		echo '<i>Vous êtes un développeur</i>';
	}
?>

	</body>
</html>