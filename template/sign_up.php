<?php
if (isset($_POST)) {
    $saisie = $_POST;
    foreach ($saisie as $input) {
        $input = trim($input);
    }
extract($saisie);
    if (!is_int(strpos($email , "arfp.asso.fr"))) {
        echo "Ce service est réserver au atudiant du CRM.";
    } elseif ($password !== $confirme_password) {
        echo "Le mot de passe que vous avez saisi et le mot de passe confirmer ne sont pas identique.";
    } elseif (isset(json_decode("./../data.json",true)["users"][$pseudo_name])) {
        echo "Le nom d'utilisateur que vous avez saisi est déjà utiliser. essayez en un autre.";
    } else {
        $data = json_decode(file_get_contents("./../data.json"), true);
        $users["users"][$pseudo_name] = array(
            "name" => $name,
            "first_name" => $first_name,
            "email" => $email,
            "password" => password_hash($password, PASSWORD_DEFAULT)
        );
    $json = json_encode($data);
    file_put_contents("./../data.json", $json);
    }
}
?>
<form action="" method="post">
    <label for="name">Nom</label><br>
    <input type="text" id="name" Name="name"><br>
    <label for="first_name">Prénom</label><br>
    <input type="text" id="first_name" name="first_name"><br>
    <label for="pseudo_name">Nom d'utilisateur</label><br>
    <input type="text" id="pseudo_name" name="pseudo_name"><br>
    <label for="email">Adresse email</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="password">Mot de passe</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="confirme_password">Confirmez le mot de passe</label><br>
    <input type="password" id="confirme_password" name="confirme_password"><br>
    <button type="submit">S'inscrir</button>
</form>