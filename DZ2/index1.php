
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


<form method="post" action="register-players.php">  

    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <div class="welcome">
     <h1>Добро пожаловать в игру крестики-нолики</h1>
        <h2> Введите имена игроков </h2>
        <div class="input-group">
        <span class="input-group-text">Игрок №1-Х</span>
        <input type="text" id="player-x" name="player-x" class="form-control" required>
        </div>

        <div class="input-group">
        <span class="input-group-text">Игрок №2-0</span>
        <input type="text" id="player-o" name="player-o" class="form-control" required>
        </div>
        <button type="submit">Начать игру</button>
         </div>
    </div>
    </div>
</body>
</html>



<?php
