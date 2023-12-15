<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="http://localhost/BUT2_kroussel_dboulaire/CSS/header.css">
</head>
<body>
<div class="navbar">
            <div class="top-bar">
                <div class="logo">
                
                    <a href="<?= base_url('index.php/welcome/accueil') ?>">
                        <img src="../img/totalite.svg" alt="Logo">
                    </a>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Rechercher...">
                    <button class="search-button">
                        <img src="../img/loupe.png" alt="Rechercher">
                    </button>
                </div>
                <div class="icons">
                    <a href="<?= base_url('index.php/welcome/reservation') ?>">
                        <img src="../img/panier.svg" alt="Panier">
                    </a>
                    <a href="aide.php">
                        <img src="../img/aide.svg" alt="Aide">
                    </a>
                    <a href="profil.html">
                        <img src="../img/profil.svg" alt="Profil">
                    </a>
                </div>
            </div>
            <div class="bottom-bar">
                <div class="category">
                    <a href="<?= base_url('index.php/welcome/catalogue') ?>">
                        <img src="../img/sante.svg" alt="Santé">
                        <p>Santé</p>
                    </a>
                </div>
                <div class="category">
                    <a href="<?= base_url('index.php/welcome/catalogue') ?>">
                        <img src="../img/tapis.svg" alt="Tapis de course">
                        <p>Tapis de course</p>
                    </a>
                </div>
                <div class="category">
                    <a href="<?= base_url('index.php/welcome/catalogue') ?>">
                        <img src="../img/velo.svg" alt="Vélos">
                        <p>Vélos</p>
                    </a>
                </div>
                <div class="category">
                    <a href="<?= base_url('index.php/welcome/catalogue') ?>">
                        <img src="../img/muscu.svg" alt="Musculation">
                        <p>Musculation</p>
                    </a>
                </div>
                <div class="category">
                    <a href="<?= base_url('index.php/welcome/catalogue') ?>">
                        <img src="../img/protection.svg" alt="Protection">
                        <p>Protection</p>
                    </a>
                </div>
            </div>
        </div>
</body>
</html>