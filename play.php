<?php 
require_once "templates/header.php";

#On va rediriger les joeurs vers la bonne page apres chaque intervention

if(!playersRegistered()) 
{
    header("location:index.php");
}
if($_POST['cell']) 
{
    $win = play($_POST['cell']);
    #s'il y a victoire on se dirige vers result.php
    if($win) 
    {
        header("location:result.php?players=" .getTurn());
    }

}

if(playCount() >= 9) 
{
    header("location: result.php");
}


?>


<?php 
require_once "templates/footer.php";
?>