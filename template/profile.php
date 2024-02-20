<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Votre profil</title>
</head>
<body>

<h1>Votre Profil</h1>

<table>
  <tr>
    <th>Information</th>
    <th>Contenu</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Nom</td>
    <td id="name">Doe</td>
    <td><a href="#" onclick="showForm('name')">Modifier</a></td>
  </tr>
  <tr>
    <td>Prénom</td>
    <td id="first_name">John</td>
    <td><a href="#" onclick="showForm('first_name')">Modifier</a></td>
  </tr>
  <tr>
    <td>Pseudo</td>
    <td id="pseudo_name">Mtbg68528</td>
    <td><a href="#" onclick="showForm('pseudo_name')">Modifier</a></td>
  </tr>
  <tr>
    <td>Email</td>
    <td id="email">mattmatt.thuet@arfp.asso.fr</td>
    <td><a href="#" onclick="showForm('email')">Modifier</a></td>
  </tr>
  <tr>
    <td>Mot de passe</td>
    <td id="password">********</td>
    <td><a href="#" onclick="showForm('password')">Modifier</a></td>
  </tr>
</table>

<script>
function showForm(fieldName) {
  var formId = fieldName + "Form";
  var form = document.getElementById(formId);
  if (form.style.display === "none") {
    form.style.display = "block";
  } else {
    form.style.display = "none";
  }
}
</script>

<div id="nameForm" style="display: none;">
  <form action="update_profile.php" method="post">
    <input type="hidden" name="field" value="name">
    <label for="newName">Nouveau nom:</label><br>
    <input type="text" id="newName" name="newName"><br>
    <input type="submit" value="Modifier">
  </form>
</div>

<div id="firstNameForm" style="display: none;">
  <form action="update_profile.php" method="post">
    <input type="hidden" name="field" value="first_name">
    <label for="newFirstName">Nouveau prénom:</label><br>
    <input type="text" id="newFirstName" name="newFirstName"><br>
    <input type="submit" value="Modifier">
  </form>
</div>

<div id="pseudoNameForm" style="display: none;">
  <form action="update_profile.php" method="post">
    <input type="hidden" name="field" value="pseudo_name">
    <label for="newPseudoName">Nouveau pseudo:</label><br>
    <input type="text" id="newPseudoName" name="newPseudoName"><br>
    <input type="submit" value="Modifier">
  </form>
</div>

<div id="emailForm" style="display: none;">
  <form action="update_profile.php" method="post">
    <input type="hidden" name="field" value="email">
    <label for="newEmail">Nouvel email:</label><br>
    <input type="email" id="newEmail" name="newEmail"><br>
    <input type="submit" value="Modifier">
  </form>
</div>

<div id="passwordForm" style="display: none;">
  <form action="update_profile.php" method="post">
    <input type="hidden" name="field" value="password">
    <label for="currentPassword">Mot de passe actuel:</label><br>
    <input type="password" id="currentPassword" name="currentPassword"><br>
    <label for="newPassword">Nouveau mot de passe:</label><br>
    <input type="password" id="newPassword" name="newPassword"><br>
    <label for="confirmNewPassword">Confirmer nouveau mot de passe:</label><br>
    <input type="password" id="confirmNewPassword" name="confirmNewPassword"><br>
    <input type="submit" value="Modifier">
  </form>
</div>

</body>
</html>
