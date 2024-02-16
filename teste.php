<?php
$contenu = file_get_contents("./data.json");
if($contenu === false){
    $users = array();
} else {
    $users = json_decode($contenu, true);
}

$users["users"][] = array(
    "name" => "Doe",
    "first_name" => "John",
    "pseudo_name" => "Mtbg685281515",
    "email" => "mattmatt.thuet@arfp.asso.fr",
    "password" => password_hash("JohnDoe123", PASSWORD_DEFAULT)
);

$fichier = json_encode($users);
file_put_contents("./data.json", $fichier);
?>