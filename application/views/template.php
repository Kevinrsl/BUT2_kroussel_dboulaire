<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8"/>
        <title> <?php echo $content;?> Dicathlon </title>
    </head>
    <body>
        <div id="global">
        <div id="entete">
        <div class="navbar">
            <div class="top-bar">
                <div class="logo">
                    <a href="accueil.php">
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
                    <a href="reservation.php">
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
                    <a href="<?php echo base_url() ?>/application/views/catalogue_sante.php">
                        <img src="<?= base_url('img/sante.svg'); ?>" alt="Santé">
                        <p>Santé</p>
                    </a>
                </div>
                <div class="category">
                    <a href="catalogue-tapis.php">
                        <img src="../img/tapis.svg" alt="Tapis de course">
                        <p>Tapis de course</p>
                    </a>
                </div>
                <div class="category">
                    <a href="catalogue-vélo.html">
                        <img src="../img/velo.svg" alt="Vélos">
                        <p>Vélos</p>
                    </a>
                </div>
                <div class="category">
                    <a href="catalogue-muscu.html">
                        <img src="../img/muscu.svg" alt="Musculation">
                        <p>Musculation</p>
                    </a>
                </div>
                <div class="category">
                    <a href="catalogue-protection.html">
                        <img src="../img/protection.svg" alt="Protection">
                        <p>Protection</p>
                    </a>
                </div>
            </div>
        </div>




        <div id="contenu">
        <?php $this->load->view($content);?>
        </div><!-- # contenu -->



        
        <div id="pied">
        <strong>&copy;2023</strong>
        </div><!--#pied-->
        </div><!--#global-->
    </body>
</html>
