<?php 
require_once "templates/header.php";

if(!playersRegistered()) 
{
    header("location:index.php");
}

resetBoard();
?>