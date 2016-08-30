<?php
if ($argc == 1){
    fwrite(STDOUT, 'pick a minimum number: ' ) . PHP_EOL;
        $min = trim(fgets(STDIN));
    fwrite(STDOUT, 'pick a maximum number: ') . PHP_EOL;
        $max = trim(fgets(STDIN));
} else if($argc == 3){
    $min = $argv[1];
    $max = $argv[2];
}
function playGame($min, $max){
// picks random number
$randomNumber = mt_rand($min, $max);
$attempt = 1;
//user to guess number
fwrite(STDOUT, 'your guess? ');
$guess = trim(fgets(STDIN)) . PHP_EOL;
    do { 
        if ($guess < $randomNumber) {
            $attempt++;
            fwrite(STDOUT, 'higher. ') . PHP_EOL;
            $guess = trim(fgets(STDIN)) . PHP_EOL;
        } else if ($guess > $randomNumber) {
            $attempt++;
            fwrite(STDOUT, 'lower. ') . PHP_EOL;
            $guess = trim(fgets(STDIN)) . PHP_EOL;
        }
    } while ($guess != $randomNumber);
    if ($guess == $randomNumber){
        echo 'winner!' . PHP_EOL;
        echo "Your guessed $attempt times." . PHP_EOL;
    }
}
playGame($min, $max);
?>