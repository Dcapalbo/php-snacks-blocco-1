<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
//make a matches Array
$matchesArray =
[
  [
    //insert team and scores keys
  "Domestic_team" => "Toronto Raptors",
  "Domestic_scores" => 33,
  "foreign_team" => "Chicago Bulls",
  "foreign_scores" => 45
  ],
  [
  "Domestic_team" => "Miami Heat",
  "Domestic_scores" => 35,
  "foreign_team" => "Los Angeles Lakers",
  "foreign_scores" => 20
  ],
  [
  "Domestic_team" => "Chicago Bulls",
  "Domestic_scores" => 50,
  "foreign_team" => "Los Angeles Lakers",
  "foreign_scores" => 52
  ],
  [
  "Domestic_team" => "Toronto Raptors",
  "Domestic_scores" => 55,
  "foreign_team" => "Miami Heat",
  "foreign_scores" => 34
  ],
];
// make a for cicle to fint the values inside of the matches array
for ($i=0; $i < count($matchesArray) ; $i++) {
   echo $matchesArray[$i][Domestic_team]." - ".$matchesArray[$i][foreign_team]." / ".$matchesArray[$i][Domestic_scores]."-".$matchesArray[$i][foreign_scores]." | ";
}
// print the results on screen
echo $matchesArray
?>
