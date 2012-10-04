
<article>                
    <h1>NEWS</h1>

<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=goRanking', 'root', '313ntaran');
} catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

    $reponse = $bdd->query('SELECT * FROM news ORDER BY date DESC LIMIT 0,5');
    while ($donnees = $reponse->fetch()) {
        echo "<div id=\"news\">\n";
        echo "<h3>". $donnees['title']."</h3>\n";
        echo "<p>". $donnees['news']."</p>\n";
        echo "<p align=\"right\">". $donnees['author']." - ".$donnees['date']."</p>\n";
        echo "</div>\n";
    }
    $reponse->closeCursor();
?>
</article>
