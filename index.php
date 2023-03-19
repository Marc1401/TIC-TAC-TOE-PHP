<?php 
require_once "./templates/header.php" ?>

<form method="post" action="register-players.php"> 
    <div class="welcome">
        <h1>Let's play Tic Tac Toe</h1>
        <h2>Veuillez svp ajouter vos noms dans les cases vides</h2>

        <div class="player-name">
            <label for="player-x">First Player ("X")</label>
            <b><input type="text" placeholder="Insert your player-id" id="player-x" name="player-x" required></b>
        </div>

        <div class="player-name">
            <label for="player-o">First Player ("X")</label>
            <b><input type="text" placeholder="Insert your player-id" id="player-o" name="player-o" required></b>
        </div>
        <button type="submit" >Commencez a jouer</button>
    </div>
</form>

<?php 
require_once "./templates/footer.php" ?>