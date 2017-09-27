<?php
$response = file_get_contents('https://www.ygohub.com/api/all_cards');
$response = json_decode($response,true);
echo "Yu Gi Oh Cards <br>";

foreach ( $response['cards'] as $cardname )
{
	echo $cardname." <br> " ;

	$cardname = file_get_contents('https://www.ygohub.com/api/card_info?name='.$cardname);
	$cardname = json_decode($cardname,true);
	//echo $cardname["card"]["type"]."<br>";
	
}
