<?php
if(isset($_POST)){
$saisie = $_POST;
foreach($saisie as $input){
    $input = trim($input);
}
foreach(json_decode(file_get_contents("./../data.json"),true)["users"]["pseudo_name"] as $user ){
echo $user;
}
if(strpos($email,"arfp.asso.fr") === false ){
    echo"Ce service est réserver au atudiant du CRM.";
}elseif($password !== $confirme_password){
    echo "Le mot de passe que vous avez saisi et le mot de passe confirmer ne sont pas identique.";
}elseif($pseudo_dispo === false){
    $json = json_decode(file_get_contents("./../data.json"),true);


 } else{
    $data = json_decode(file_get_contents("./../data.json"),true);
    
}

}
?>
 