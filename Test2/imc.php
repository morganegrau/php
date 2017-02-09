<DOCTYPE html>
	<head>
		<title>Exercice Carburant</title>
	</head>

	<body>

		<form name="imc" method="post" action="imc.php">
			Entrez votre prénom : <input type="text" name="prenom"/> <br/>
            Entrez votre taille (sous la forme 1.40) : <input type="text" name="taille"/><br/>
            Entrez votre poids (en kilos) : <input type="text" name="poids"/><br/>
            <input type="submit" name="valider" value="OK"/>

            <?php
            if(isset($_POST['valider'])){

            $prenom=$_POST['prenom'];
            $taille=$_POST['taille'];
            $poids=$_POST['poids'];
            $imc = $poids /($taille*$taille);

            echo 'Bonjour '.$prenom.'!<br/>
            Votre Imc est de '.$imc. '<br/>';

             if ($imc<16){
                $resultat='<b>Vous êtes en danger. Mangez plus !</b>';
            }
            elseif ($imc<18.5){
                $resultat='<b>Vous êtes maigre, passez chez McDo</b>';
            }
            elseif ($imc<25){
                $resultat='<b>Vous êtes au top !</b>';
            }
            elseif ($imc<30){
                $resultat='<b>Attention à la petite bouée !</b>';
            }
            elseif ($imc<35){
                $resultat='<b>Pas bon ça, va falloir faire un petit régime</b>';
            }
            elseif ($imc<40){
                $resultat='<b>Attention vous êtes trop gros !</b>';
            }
            else{
                $resultat='<b>Vous êtes en danger, consultez !</b>';
            }
 
            echo $resultat;
        }
            ?>
		</form>
	</body>
</html>