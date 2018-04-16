<?php
$userChoice = $_REQUEST["choice"];


function GetUserChoice($userChoice){
    switch ($userChoice) {
    case 0; 
        echo "You chose Rock";
        break;
    
    case 1;
        echo "You chose Paper";
        break;
    
    case 2;
        echo "You chose Scissors";
        break;
}
}


//$computerChoice = $_REQUEST["comp"];

function ComputerChoice() {
    $ComputerAnswer = rand(0, 2);
    switch ($ComputerAnswer) {
    case 0; 
        echo nl2br("Computer chose Rock". PHP_EOL);
        break;
    
    case 1;
        echo nl2br("Computer chose Paper".PHP_EOL);
        break;
    
    case 2;
        echo nl2br ("Computer chose Scissors".PHP_EOL);
        break;

    }
    return $ComputerAnswer;}
       

function WhoWon($PlayerAnswer, $ComputerAnswer){
If ($PlayerAnswer == $ComputerAnswer) { 
    return "You drew";}
If ($PlayerAnswer == 0 && $ComputerAnswer == 1) { 
    return "Paper covers Rock: Computer wins";}
If ($PlayerAnswer == 0 && $ComputerAnswer == 2) { 
    return "Rock blunts Scissors: Player wins";}
If ($PlayerAnswer == 1 && $ComputerAnswer == 0) { 
    return "Paper covers Rock: Player wins";}
If ($PlayerAnswer == 1 && $ComputerAnswer == 2) { 
    return "Scissors cut Paper: Computer wins";}       
If ($PlayerAnswer == 2 && $ComputerAnswer == 0) { 
    return "Rock blunts Scissors: Computer wins";}
If ($PlayerAnswer == 2 && $ComputerAnswer == 1) { 
    return "Scissors cut Paper: Player wins";}
}

echo PHP_EOL;
echo nl2br(GetUserChoice($userChoice). PHP_EOL);
$compAnswer = ComputerChoice();
echo WhoWon($userChoice, $compAnswer);