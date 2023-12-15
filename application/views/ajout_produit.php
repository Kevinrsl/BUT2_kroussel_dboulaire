
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
</head>
<body>

<h2>Ajouter un Produit</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('internships/create'); ?>

    <label for="type">Type:</label>
    <input type="text" name="type" required><br>

    <label for="description">Description:</label>
    <textarea name="description" required></textarea><br>

    <label for="marque">Marque:</label>
    <input type="text" name="marque" required><br>

    <label for="id">ID:</label>
    <input type="text" name="id" required><br>

    <label for="modele">Modèle:</label>
    <input type="text" name="modele" required><br>

    <label for="prix_location">Prix de location:</label>
    <input type="text" name="prix_location" required><br>

    <label for="etat">État:</label>
    <input type="text" name="etat" required><br>

    <input type="submit" value="Ajouter le Produit">

<?php echo form_close(); ?>

</body>
</html>
