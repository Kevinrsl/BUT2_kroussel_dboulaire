<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste utilisateur</title>
</head>
<body>

<h2>Liste des utilisateurs</h2>
<?php if (!empty($utilisateurlist)): ?>
    <ul>
        <?php foreach ($utilisateurlist as $utilisateur): ?>
            <li><?php echo $utilisateur['nom'] . ' ' . $utilisateur['prenom']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun utilisateur trouvé.</p>
<?php endif; ?>

</body>
</html>
