<?php
$fruits = array(
  'orange' => 'Orange',
  'banana' => 'Banana',
  'apple' => 'Apple',
  'grape' => 'Grape'
);

ksort($fruits);

// Affichage du tableau trié
foreach ($fruits as $key => $value) {
  echo $key . ' - ' . $value . '<br>';
}


// Résultat :
// apple - Apple
// banana - Banana
// grape - Grape
// orange - Orange