<DOCTYPE html>
	<head>
		<title>Exercice Carburant</title>
	</head>

	<body>

	<p> <strong>Tests issu du site</strong> : <a href=" http://sylvie-vauthier.developpez.com/tutoriels/php/grand-debutant/?page=intro#LI-4">sylvie-vauthier.developpez.com</a></p>


<h1>Exercice 1 :</h1>
		<p>Merci d'avoir choisi Vroum-Vroum. Choisissez votre carburant :
		Gazole, SuperSP ou GPL ?</p>
		<p> Votre réponse est : </p>

			<?php 
			$carburant = Gazole;
			$reponse = Gazole;
			if ($carburant == $reponse) echo "Gazole";

			?>

<h1>Exercice 2 :</h1>

		<p>Remplissez le formulaire suivant</p>
		
		<?php
        $job='Le numérique';
        $salaire=2500;
        $etude=true;
        $bac=12;

        echo'Le salaire auquel j\'aspire pour bien vivre : <b>'.$salaire.'</b>€<br/>

        La branche dans laquelle je travaille ou souhaiterais travailler : <b>'.$job.'</b><br/>
        Pour préciser : <b>'.$travail.'</b>';
        
        if ($etude==true){
            echo' <b>est la branche dans laquelle je me forme.</b><br/>';
        }
        else{
            echo' <b>est la branche dans laquelle je travaille actuellement.</b><br/>';
        }
        
        echo'La note moyenne que j\'ai obtenue au bac est : <b>'.$bac.'</b>';
        ?>  
						
	</body>
</html>