<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $first_name = trim($_POST['first_name']);
    $pseudo_name = trim($_POST['pseudo_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirme_password = $_POST['confirme_password'];

    $file = file_get_contents("./../data.json");
    $data = json_decode($file, true);

    $pseudo_dispo = true;
    foreach ($data['users'] as $user) {
        if (isset($user['pseudo_name']) && $user['pseudo_name'] === $pseudo_name) {
            $pseudo_dispo = false;
            break;
        }
    }

    if (!strpos($email, "arfp.asso.fr")) {
        echo "Ce service est réservé aux étudiants du CRM.";
    } elseif ($password !== $confirme_password) {
        echo "Le mot de passe que vous avez saisi et le mot de passe confirmé ne sont pas identiques.";
    } elseif (!$pseudo_dispo) {
        echo "Le nom d'utilisateur que vous avez saisi est déjà utilisé. Essayez-en un autre.";
    } else {
        $data['users'][] = array(
            "name" => $name,
            "first_name" => $first_name,
            "pseudo_name" => $pseudo_name,
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
    <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
    <label for="first_name">Prénom</label><br>
    <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>"><br>
    <label for="pseudo_name">Nom d'utilisateur</label><br>
    <input type="text" id="pseudo_name" name="pseudo_name" value="<?php echo $pseudo_name; ?>"><br>
    <label for="email">Adresse email</label><br>
    <input type="text" id="email" name="email"value <?php echo $email; ?>><br>
    <label for="password">Mot de passe</label><br>
    <input type="password" id="password" name="password"value<?php echo $password; ?>><br>
    <label for="confirme_password">Confirmez le mot de passe</label><br>
    <input type="password" id="confirme_password" name="confirme_password" value="<?php echo $confirme_password; ?>"><br>
    <button type="submit">S'inscrire</button>
</form>
