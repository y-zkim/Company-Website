<?php
require ("config.php");
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    // send OK without processig
    }else{

        $requestPlayload = file_get_contents("php://input");
$object = json_decode($requestPlayload, true);


$montant = $object["montant"];
$first_name = $object["first_name"];
$last_name = $object["last_name"];
$tel = $object["tel"];
$email = $object["email"];
$surface = $object["surface"];
$longement = $object["logement"];
$personne = $object["personne"];
$zipcode = $object["zipcode"];
$chauffage = $object["chauffage"];
$date = date('Y-m-d H:i:s');


$query = mysqli_query($con,"INSERT INTO clients(`logement`, `personne`, `zipcode`, `chauffage`, `surface`, `montant`, `first_name`, `last_name`, `email`, `tel`, `date_ajout`) VALUES ('$longement','$personne','$zipcode','$chauffage','$surface','$montant','$first_name','$last_name','$email','$tel','$date')");
}

    
?>
