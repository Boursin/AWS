<?php
$response = file_get_contents('https://swapi.co/api/people/');
$response = json_decode($response,true);
echo "<h1>Star Wars</h1> <br>";

$count=1;
foreach ( $response['results'] as $resultsName )
{
	
	$resultsName = file_get_contents('https://swapi.co/api/people/'.$count);
	$resultsName = json_decode($resultsName,true);

	echo "<br>Name : ".$resultsName["name"].
		"<br> Gender :".$resultsName["gender"].
		"<br> Height : ".$resultsName["height"].
		"<br> Mass : ".$resultsName["mass"].
		"<br> Skin Color : ".$resultsName["skin_color"].
		"<br> Hair Color : ".$resultsName["hair_color"].
		"<br> Eye Color : ".$resultsName["eye_color"].
		"<br> Birth Year : ".$resultsName["birth_year"].
		"<br> Origin : ".$resultsName["homeworld"].
		"<br>";
	$count++;
	
}
