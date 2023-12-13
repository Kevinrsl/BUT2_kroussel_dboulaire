<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogue</title>
  <link rel="stylesheet" href="../css/catalogue.css">
</head>
<body>

<?php if (!empty($produitlist)): ?>
        <?php foreach ($produitlist as $p): ?>
            <div class="product">
                <div class="name"><?= $p['modele'] ?></div>
                <div class="price"><?= $p['prix_location'] ?> €</div>
                <div class="type"><?= $p['type'] ?></div>
                <div class="etat"><?= $p['etat'] ?></div>
                <!-- Ajoutez d'autres champs si nécessaire -->
                <a href="<?= base_url('index.php/welcome/produit_details/'.$p['id']) ?>"><button class="rent-button">Voir l'annonce</button></a>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <p>No products found</p>
    <?php endif ?>

</body>
</html>
