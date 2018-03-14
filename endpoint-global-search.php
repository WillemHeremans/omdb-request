<?php

$uri = $_SERVER['REQUEST_URI'];

$myurl = parse_url($uri);

$url = 'https://www.omdbapi.com/?'.$myurl["query"]. '';
$data = file_get_contents($url);
$characters = json_decode($data);

if ($characters->Response == 'False') {

echo "<br>";
echo "<br>";
echo '<h1 style="text-align:center;">Aucun résultat!</h1>';

}

	else {

		$comb = count($characters->Search) - 1;

		for ($numb = 0; $numb <= $comb; $numb++) {

			if ($characters->Search[$numb]->Poster == "N/A") {

			$source ="no-poster.jpg";

				}

			else {
			$source = $characters->Search[$numb]->Poster;
				}

			$title = $characters->Search[$numb]->Title;
			$more  = $characters->Search[$numb]->imdbID;
  		echo "<br>";

	echo '<p style="text-align:center;"><b>'.$title.'</b><br /><img src="'.$source.'" alt="Loading..."><br /><a href="https://www.omdbapi.com/?i='.$more.'&apikey=#">More about this movie</a></p>';

		echo "<br>";
			}

 
		echo '<p style="text-align:center;"> <a href="./endpoint-global-search.php?'.$myurl["query"]. '&page=2">Page suivante</a></p>';
	
		
	}

?>
