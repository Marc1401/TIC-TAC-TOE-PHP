<?php 
require_once "functions.php";

// On enregistre les joeurs. S'ils sont enregistrés, on se dirige vers le jeu 
registerPlayers($_POST['player-x'], $_POST['player-o']);

if(playersRegistered()) 
{
    header("location: play.php");
}
?>