<?php

$url = $_SERVER['REQUEST_URI'];

$myurl = parse_url($url);


$url = 'https://www.omdbapi.com/?'.$myurl["query"]. ''; 
$data = file_get_contents($url); 
$characters = json_decode($data);

if ($characters->Response == 'False') {

echo "<br>";
echo "<br>";
echo '<h1 style="text-align:center;">Aucun résultat!</h1>';

}

else {

echo '<h1>'. $characters->Title .'</h1>';
echo "<br>";
echo '<p>Année de sortie: '. $characters->Year . '</p>';
echo "<br>";
echo $characters->Plot . '<br>';

echo "<br>";

echo '<p style="text-align:center;"><img src="'.$characters->Poster.'" alt="Pas d\'affiche disponible"></p>';

echo "<br>";

echo '<p style="text-align:center;">Rating: '.$characters->imdbRating.'</p> <br>';

echo '<p style="text-align:center;"><progress value="'.$characters->imdbRating.'" max="10"></progress></p>';

echo "<br>";

}

?>
