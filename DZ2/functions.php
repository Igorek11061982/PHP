<?php

session_start();
error_reporting(E_ERROR | E_PARSE);

function registerPlayers($playerX="", $playerO="") {
    $_SESSION['PLAYER_X_NAME'] = $playerX; //отображается введенное имя на поле  при игре
    $_SESSION['PLAYER_O_NAME'] = $playerO;//отображается введенное имя на поле  при игре
    setTurn('x');
    playAgain();
   
}

function playAgain() { // функция новой игры
    resetPlaysCount();

    for ( $i = 1; $i <= 9; $i++ ) {
        unset($_SESSION['CELL_'. $i]); // удаление из сессии 
    }
}

 function playsCount() {

    return $_SESSION['PLAY'] ? $_SESSION['PLAY'] : 0;
     
 }



function addPlaysCount() {
    if (! $_SESSION['PLAY']) {
        $_SESSION['PLAY'] = 0;
    }

    $_SESSION['PLAY']++;
}

function resetPlaysCount() {
    $_SESSION['PLAY'] = 0;
}

function playerName($player='x') {
    return $_SESSION['PLAYER_' . strtoupper($player) . '_NAME'];

}

function playersRegistered() {
    return $_SESSION['PLAYER_X_NAME'] && $_SESSION['PLAYER_O_NAME'];
}

function setTurn($turn='x') {
    $_SESSION['TURN'] = $turn;
}

function getTurn() {
    return $_SESSION['TURN'] ? $_SESSION['TURN'] : 'x';
}

function markWin($player='x') {
    $_SESSION['PLAYER_' . strtoupper($player) . '_WINS']++;
}

function switchTurn() {
    switch (getTurn()) {
        case 'x':
            setTurn('o');
            break;
        default:
            setTurn('x');
            break;
    }
}

function currentPlayer() {
    return playerName(getTurn());
}

function play($cell='') {
    if (getCell($cell)) {
        return false;
    }

    $_SESSION['CELL_' . $cell] = getTurn();
    addPlaysCount();
    $win = playerPlayWin($cell);

    if (! $win) {
        switchTurn();
    }
    else {
        markWin(getTurn());
        playAgain();
    }

    return $win;
}

function getCell($cell='') {
    return $_SESSION['CELL_' . $cell];
}

function playerPlayWin($cell=1) {
    if (playsCount() < 3) {
        return false;
    }

    $column = $cell % 3;
    if (! $column) {
        $column = 3;
    }

    $row = ceil($cell / 3);

    $player = getTurn();

    return VerticalWin($column, $player) || HorizontalWin($row, $player) || DiagonalWin($player);
}

function VerticalWin($column=1, $turn='x') {
    return getCell($column) == $turn &&
        getCell($column + 3) == $turn &&
        getCell($column + 6) == $turn;
}

function HorizontalWin($row=1, $turn='x') {
    return getCell($row) == $turn &&
        getCell($row + 1) == $turn &&
        getCell($row + 2) == $turn;
}

function DiagonalWin($turn='x') {
    $win = getCell(1) == $turn &&
        getCell(9) == $turn;

    if (! $win) {
        $win = getCell(3) == $turn &&
            getCell(7) == $turn;
    }

    return $win && getCell(5) == $turn;
}

