<?php
if(isset($_POST))
$saisie = $_POST;
foreach($saisie as $input){
    $input = trim($input);
}
var_dump($json);
if(strpos($email,"arfp.asso.fr") === false ){
    echo"Ce service est réserver au atudiant du CRM.";
}elseif($password !== $confirme_password){
    echo "Le mot de passe que vous avez saisi et le mot de passe confirmer ne sont pas identique.";
}else{
    
}