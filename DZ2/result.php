<?php
require_once "functions.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Игра крестики-нолики</title>
     <link rel='stylesheet' href='style.css' type='text/css'/> 
</head>

<body>

    <div class="wrapper">

<?php

if (! playersRegistered()) {
    header("location: index1.php");
}

playAgain();
?>

<table class="wrapper" cellpadding="0" cellspacing="0">
    <tr>
        <td>

            <div class="welcome">

                <h1>
                    <?php
                    if ($_GET['player']) {
                        echo currentPlayer() . ", Вы выйграли!";
                    }
                    else {
                        echo "Ничья";
                    }
                    ?>
                </h1>
<a href="play.php">Играть заново</a><br />

               
            </div>

        </td>
    </tr>
</table>

</body>
</html>

