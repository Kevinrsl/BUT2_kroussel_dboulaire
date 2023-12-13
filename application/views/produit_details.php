<!-- produit_details.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détails du produit</title>
  <link rel="stylesheet" href="http://localhost/BUT2_kroussel_dboulaire/CSS/fiche.css">
</head>
<body>

<div class="product-details">
    <h2><?= $produit['modele'] ?></h2>
    <p>Type: <?= $produit['type'] ?></p>
    <p>Description: <?= $produit['description'] ?></p>
    <p>Marque: <?= $produit['marque'] ?></p>
    <p>Prix de location: <?= $produit['prix_location'] ?> €</p>
    <p>État: <?= $produit['etat'] ?></p>
    <!-- Ajoutez d'autres champs si nécessaire -->

    <!-- Utilisateur -->
    <div class="user-card">
        <div class="user-info">
            <!-- Remplacez ces lignes par les informations réelles de l'utilisateur -->
            <img class="user-photo" src="img/User.png" alt="User Photo">
            <h2 class="user-name">Nom de l'utilisateur</h2>
            <div class="rating">
                <img class="rating" src="img/etoile.png" alt="etoile">
                <img class="rating" src="img/etoile.png" alt="etoile">
                <img class="rating" src="img/etoile.png" alt="etoile">
                <img class="rating" src="img/etoile.png" alt="etoile">
                <img class="rating" src="img/etoilemi.png" alt="etoile">
            </div>
            <button class="contact-button">Contacter</button>
        </div>
        <p class="user-description">Description de l'utilisateur</p>
        <button class="rent-button">Louer</button>
    </div>
</div>

</body>
</html>

