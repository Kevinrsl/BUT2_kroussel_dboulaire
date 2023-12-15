
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogue</title>
  <link rel="stylesheet" href="http://localhost/BUT2_kroussel_dboulaire/CSS/accueil.css">
</head>
<body>

    <h1>Connecté en tant qu'Administrateur</h1>

    <div class="ajout_produit">
        <a href="<?= base_url('index.php/welcome/ajout_produit') ?>"><button class="rent-button">Ajouter un produit</button></a>
    </div>

    <div class="liste_utlisateur">
        <a href="<?= base_url('index.php/welcome/liste_utilisateur') ?>"><button class="rent-button">Liste des utilisateurs</button></a>
    </div>

    <div class="supprimer_produit">
        <a href="<?= base_url('index.php/welcome/supprimer_produit') ?>"><button class="rent-button">Supprimer un produit</button></a>
    </div>

  <img src="./img/veloimage.png" alt="annonce" class="annonce">
  <h1> Location de matériel </h1>

  <div class="categories">
    <div class="sous-cat-container">
      <img src="./img/veloimage.png" alt="endurance" class="sous-cat">
      <p>Endurance</p>
    </div>

    <div class="sous-cat-container">
      <img src="./img/veloimage.png" alt="velos" class="sous-cat">
      <p>Vélos</p>
    </div>
    <div class="sous-cat-container">
      <img src="./img/veloimage.png" alt="endurance" class="sous-cat">
      <p>Prix bas</p>
    </div>

    <div class="sous-cat-container">
      <img src="./img/veloimage.png" alt="velos" class="sous-cat">
      <p>Nouveautés</p>
    </div>

  </div>

</body>
</html>