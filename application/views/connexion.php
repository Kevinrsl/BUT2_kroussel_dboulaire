<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/connexion.css'); ?>">
    <title>Page de Connexion</title>
</head>

<body>
    <div class="login-container">
        <!-- Your existing HTML content -->

        <form action="<?= base_url('index.php/Auth/index'); ?>" method="post">
            <!-- Add appropriate form fields for login -->
            <!-- For example: -->
            <div class="input-group">
                <label for="login">Nom d'utilisateur</label>
                <input type="login" id="login" name="login" required>
            </div>

            <div class="input-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
                <span class="forgot-password">Mot de passe oublié?</span>
            </div>

            <div class="buttons">
                <button class="login-btn" type="submit">Connexion</button>
            </div>
        </form>
    </div>
</body>

</html>
