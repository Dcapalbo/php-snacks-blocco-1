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
   echo $matchesArray[$i][Domestic_team]." - ".$matchesArray[$i][foreign_team]." / ".$matchesArray[$i][Domestic_scores]."-".$matchesArray[$i][foreign_scores]." | ". "<br>";
}
// print the results on screen
?>
