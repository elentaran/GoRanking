

<?php 
    $mainVal = $_GET['main'];
    switch($mainVal) {
    case "forum":
        include("pages/forum.php"); 
        break;
    case "ranking":
        include("pages/ranking.php"); 
        break;
    case "tournaments":
        include("pages/tournaments.php"); 
        break;
    case "links":
        include("pages/links.php"); 
        break;
    default:
        include("pages/news.php");
    }

?>
