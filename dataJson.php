<?php
$personne = array(
	array("Prénom"=>"Tom","Téléphone"=>0021536447),
	array("Prénom"=>"Joana","Téléphone"=>003312654),
	array("Prénom"=>"Cathrine","Téléphone"=>12365478)
);

   
 foreach ($personne as $key => $value) {

echo("<p><strong>Prénom:</strong>");
echo($value['Prénom']."</p>");
echo("<p><em>Téléphone:</em>");
echo($value['Téléphone']."</p>");}

?>