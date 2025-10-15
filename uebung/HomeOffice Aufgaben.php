<?php
//1) Integers
//1.
$lvl = 1;

for ($i = 1; $i <= 10; $i++) {
    echo 'Aktuelles Level: ' . $lvl . '<br>';
    $lvl++;//Kurzschreibweise
    //$lvl = $lvl + 1;//Langschreibweise
}
//2.
$player = ['coins' => 0, 'hp' => 100, 'alive' => true]; //ECHTES COIN ARRAY
//BAD PRACTICE
$player['coins'] += 10; //REDUNDANT
$player['coins'] += 10; //REDUNDANT
$player['coins'] += 10; //REDUNDANT

//GOOD PRACTICE
for ($j = 0; $j < 3; $j++) {
    $player['coins'] += 10;
}

//BEST PRACTICE
function addCoins($amount, $times, &$player): void
{
    $arrkeys = array_keys($player);
    foreach ($arrkeys as $key) {
        if ($key == 'coins') {
            for ($i = 0; $i < $times; $i++) {
                $player['coins'] += $amount;
                echo "DEBUG: " . $player['coins'];
            }
        }
    }
}

addCoins(10, 3, $player);

echo '<br>' . ' FINAL COINS: ' . $player['coins'];
//3.
echo '<br>';
if ($player['coins'] % 4 == 2) {
    echo 'ISABARISCHISCH';
} else {
    echo 'NIE ISABARISCHISCH';
}
//4.
function punishPlayer(&$player, $damage)
{
    if(array_key_exists('hp', $player))
    {
        $player['hp'] -= $damage;
        echo '<br>';
        echo 'Damage: ' . $damage;
        echo '<br>';
        echo 'HP: ' . $player['hp'];
    }
}
punishPlayer($player, 17);
punishPlayer($player, 23);
echo '<br>';
//5.
function checkIfDead(&$player)
{
    if(array_key_exists('alive', $player) && $player['alive'] == true) {
        echo 'Player is alive';
        if($player['hp'] <= 0)
        {
            echo 'Player is dead';
            $player['alive'] = false;
        }
        //der rest der aufgabe is unsinn
    }

}
