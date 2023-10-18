<h2>Ajout d'un produit</h2>
    <?php echo validation_errors();?>
    <?php echo form_open('internships/create')?>
    <label for="title">Id</label>
    <input type="input" name ="id"/><br/>

    <label for="title">Type</label>
    <input type="input" name ="type"/><br/>

    <label for="title">Description</label>
    <input type="input" name ="description"/><br/>

    <label for="title">marque</label>
    <input type="input" name ="marque"/><br/>

    <label for="title">modele</label>
    <input type="input" name ="modele"/><br/>

    <label for="title">prix_location</label>
    <input type="input" name ="prix_location"/><br/>

    <label for="title">etat</label>
    <input type="input" name ="etat"/><br/>

    <input type="submit" name="submit" value ="AJOUTER"/>
</form>