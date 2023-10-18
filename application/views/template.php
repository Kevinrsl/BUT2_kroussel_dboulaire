<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8"/>
        <title> <?php echo $content;?> - Ajouter un produit </title>
    </head>
    <body>
        <div id="global">
        <div id="entete">
        <h1> Ajout d'un produit </h1>
        </div><!-- # entete -->
        <div id="contenu">
        <?php $this->load->view($content);?>
        </div><!-- # contenu -->
        <div id="pied">
        <strong>&copy;2023</strong>
        </div><!--#pied-->
        </div><!--#global-->
    </body>
</html>
