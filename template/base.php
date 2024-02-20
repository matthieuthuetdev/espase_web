<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Web</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?p=home">Accueil</a></li>
                <li><a href="index.php?p=sign_up">S'inscrire</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="main-content">
    <?php echo $element; ?>
    </section>
    </main>

    <footer>
        <p>&copy; 2024 Tous droits réservés</p>
        <p class="version">Version 1.0</p>
    </footer>
</body>

</html>
