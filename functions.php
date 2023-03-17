<?php 
session_start();

// Report simple running errors
error_reporting(E_ERROR| E_PARSE);


// Commencons par enregistrer les joueurs

function registerPlayers($playerX="", $playerY="",)
{
    $_SESSION['PLAYYER_X_NAME'] = $playerX;
    $_SESSION['PLAYYER_O_NAME'] = $playerO;
    setTurn('x');
    resetBoard();
    resetWins();
} 

function setTurn($turn='x') 
{
    $_SESSION['TURN'] = $turn;
}

function resetBoard() 
{
    resetPlaysCount();

    for($i = 1; $i <= 9 ; $i++) {
        unset($_SESSION['CELL_'. $i]);
    }
}
function resetWins() 
{
    $_SESSION['PLAYER_X_WINS'] = 0;
    $_SESSION['PLAYER_O_WINS'] = 0;
}

?>