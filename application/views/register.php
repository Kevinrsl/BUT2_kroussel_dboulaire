<!-- application/views/register.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('http://localhost/BUT2_kroussel_dboulaire/CSS/inscription.css'); ?>">
    <title>Page d'Inscription</title>
</head>

<body>
    <div class="register-container">
        <form action="<?= base_url('index.php/auth/register_user'); ?>" method="post">
            <div class="input-group">
                <label for="email">Adresse Email :</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>

            <div class="input-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>

            <div class="input-group">
                <label for="ddn">Date de Naissance :</label>
                <input type="date" id="ddn" name="ddn" required>
            </div>

            <div class="buttons">
                <button class="register-btn" type="submit">Inscription</button>
            </div>
        </form>
    </div>
</body>

</html>
