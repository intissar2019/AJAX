<?php
$films = array();

	
$films[0] = array ("titre_film"=>"Xmen","Genres"=>"Action,Aventure, Science fiction","annee"=>2016,    "lien"=>'xmen.jpg');
$films[1] = array
("titre_film"=>"Grace de Monaco","Genres"=> "Biopic",
    "annee"=>2014,"lien"=>'grace.jpg');
$films[2] = array
    ("titre_film"=>"CAPTAIN AMERICA 2",
    "Genres"=> "Aventure, Action, Science fiction",
    "annee"=>2014,
    "lien"=>'captain-america-2.jpg'
);
$films[3] = array
    ("titre_film"=>"LES YEUX JAUNES DES CROCODILES",
    "Genres"=> "Comédie dramatique",
    "annee"=>2014,
    "lien"=>'yeux-jaunes.jpg'
);
$films[4] = array
    ("titre_film"=>"RIO 2",
    "Genres"=> "Animation, Aventure, Comédie",
    "annee"=>2014,
    "lien"=>'rio-2.jpg'
);

$films[5] = array
    ("titre_film"=>"THE AMAZING SPIDER-MAN : LE DESTIN D'UN HÉROS",
    "Genres"=> "Action, Fantastique, Aventure",
    "annee"=>2014,
    "lien"=>'spiderman.jpg'
);
$films[6] = array
   ( "titre_film"=>"QU'EST-CE QU'ON A ENCORE FAIT AU BON DIEU ?",
    "Genres"=> "Comédie",
    "annee"=>2014,
    "lien"=>'bon-dieu.jpg'
);
$films[7] = array
    ("titre_film"=>"THE GRAND BUDAPEST HOTEL",
    "Genres"=> "Comédie, dramatique",
    "annee"=>2014,
    "lien"=>'budapest-hotel.jpg'
);
    echo("<ul class='row'>");
 foreach ($films as $key => $value) {

echo("<li class='col-6 col-lg-3 col-md-4'><img src='".$value['lien']."'><br><strong>");
echo($value['titre_film']);
echo("</strong><br>".$value['Genres']."</li>"); }
echo("</ul>");

  

?>