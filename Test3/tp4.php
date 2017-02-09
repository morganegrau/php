<html>
    <head><title>Test4</title></head>
    <body>
        <h1>TP4</h1>

        <form name="formulaire" method="post" action="tp4.php">
            Votre nom : <input type="text" name="nom"/> <br/>
            Votre prénom : <input type="text" name="prenom"/> <br/>
            Votre âge: <input type="text" name="age"/> <br/>
            Votre ville : <input type="text" name="ville"/> <br/>
            Votre activité : <input type="text" name="activite"/> <br/>
            <input type="submit" name="valider" value="OK"/>
        </form>

<!--         <?php
        /*pour chaque élement du tableau $_POST, récupère et affecte la valeur de l'index, puis récupère et affecte la valeur associée à cet index*/
 
        foreach($_POST as $index=>$valeur){
        echo '- '.$valeur.'<br/>';
        } 
        ?> -->


<!--         <?php  
        if(isset($_POST['valider'])){
            foreach($_POST as $index=>$valeur){
                echo '- '.$index.' : '.$valeur.'<br/>';
            }
        }
        ?> -->

        <?php
        if(isset($_POST['valider'])){
            echo '<h3>Vous venez d\'entrer : </h3>';
            foreach($_POST as $index=>$valeur){
                if ($index!='valider'){
                    echo '- '.$valeur.'<br/>';
                }
            }
        }
        ?>

        
    </body>
</html>