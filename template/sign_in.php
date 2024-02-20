<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_or_email = trim($_POST['username_or_email']);
    $password = $_POST['password'];

    $file = file_get_contents("./../data.json");
    $data = json_decode($file, true);

    $user_found = false;
    foreach ($data['users'] as $user) {
        if (($user['pseudo_name'] === $username_or_email || $user['email'] === $username_or_email) && password_verify($password, $user['password'])) {
            $user_found = true;
            break;
        }
    }

    if ($user_found) {
        echo "Connexion réussie!";
    } else {
        echo "Identifiants incorrects.";
    }
}
?>

<form action="" method="post">
    <label for="username_or_email">Nom d'utilisateur ou adresse e-mail</label><br>
    <input type="text" id="username_or_email" name="username_or_email" value="<?php echo isset($username_or_email) ? $username_or_email : ''; ?>"><br>
    <label for="password">Mot de passe</label><br>
    <input type="password" id="password" name="password"><br>
    <button type="submit">Se connecter</button>
</form>
