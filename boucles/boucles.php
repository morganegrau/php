<DOCTYPE html>
	<head>
		<title>Exercice boucles</title>
	</head>

	<body>

<?php
echo '<br/><br/><strong>Exercice 1 </strong><br/>';

$repetitions = 0;
$fois = 1;

while ($repetitions <10)
{
echo 'Je répète cette phrase '.$fois. ' fois<br/>';
$repetitions ++;
$fois++;
}

?>

<?php
echo '<br/><br/><strong>Exercice 2 </strong><br/>';

$var1 = 0;
$var2 = 28;

while ($var1 < 21)
{
	$resultat = $var1 * $var2;
	echo 'Le résultat est : '.$resultat.'<br/>';
	$var1++;
}
?>

<?php
echo '<br/><br/><strong>Exercice 3 </strong><br/>';
$coucou = 100;
$pouet = 8;
while ($coucou > 10)
{
	$resultat = $coucou * $pouet;
	echo 'Le résultat est : '.$resultat.'<br/>';
	$coucou--;
}
?>

<?php
echo '<br/><br/><strong>Exercice 4 </strong><br/>';
$test4 = 1;
while ($test4 <= 10)
{
	$test4 = $test4 + ($test4/2);
	echo 'Le résultat est : '.$test4.'<br/>';
}
?>
	</body>
</html>