<?php 
require_once "templates/header.php";

if(!playersRegistered()) 
{
    header("location:index.php");
}

resetBoard();
?>

<table claas="wrapper" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <div class="welcome">

                <h1>
                    <?php 
                    if($_GET['player']) 
                    {
                        echo currentPlayer() . " a gagné";
                    }
                    else {
                        echo "Égalité !";
                    }
                    ?>
                </h1>
                <div class="player-name">
                    <?php 
                    echo playerName('x')?>'s score : <b><?php echo score('x')?></b>
                    
                </div>

                <div class="player-name">
                    <?php 
                    echo playerName('o')?>'s score : <b><?php echo score('o')?></b>
                    
                </div>
                <a class ="player-j" href="play.php">Continue</a><br />

                <a href="index.php" class="reset-btn">Reset</a>


            </div>
        </td>
    </tr>
</table>
