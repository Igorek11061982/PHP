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
    header("location: index.php");
}

if ($_POST['cell']) {
    $win = play($_POST['cell']);

    if ($win) {
        header("location: result.php?player=" . getTurn());
    }
}



if (playsCount() >= 9) {
    header("location: result.php");
}
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



<h2>Ваш ход <?php echo currentPlayer() ?>!</h2>

<form method="post" action="play.php">

<table class="tic-tac-toe" cellpadding="0" cellspacing="0">
        <tbody>

        <?php
 echo "<table>";
 $prewRow = 0;

 for ($i = 1; $i <= 9; $i++) {
   
     $row = ceil($i / 3);

     if ($row !== $prewRow) {
         $prewRow = $row;

         if ($i > 1) {
             echo "</tr>";
         }
    
         echo "</tr>";
     }
    
 ?>

            <td  style= 'border:20px   solid #40E0D0' >
            
                <?php if (getCell($i) === 'x'): ?>
                    X
                <?php elseif (getCell($i) === 'o'): ?>
                    O
                <?php else: ?>
                    <input type="radio" name="cell" value="<?= $i ?>" onclick="enableButton()"/>
                <?php endif; ?>
            </td>

        <?php } ?>
        </tr>
        </tbody>
    </table>

    <button type="submit" disabled id="play-btn">Ходить</button>

</form>

<script type="text/javascript">
    function enableButton() {
        document.getElementById('play-btn').disabled = false;
    }
</script>
</div>
</body>
</html



          

  