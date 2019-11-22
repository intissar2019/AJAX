<?php

$degre=$_POST['deg'];
switch ($degre) {
    case 14:
       echo json_encode("14°C");
        break;
    case 15:
       echo json_encode("15°C");
        break;
    case 16:
         echo json_encode("16°C");
        break;
    default:
        echo "Inconnu";
}

?>