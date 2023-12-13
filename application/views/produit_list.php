<h2>
    <?php echo $title ?> </h2>
<ul>
    <?php foreach($produitlist as $produit):?>
    <?php echo "<li > ".$produit['produit_id'].". ".$produit['type']." </li >";?>
    <?php endforeach ?>
</ul>