<form action="" method="post">
    <div class="form-group">
        <label>Name :</label>
        <input name="name" type="text" class="form-control" value="<?php echo $book->getName(); ?>">
    </div><br>
    <div class="form-group">
        <label>Auteur :</label>
        <input name="auteur" type="text" class="form-control" value="<?php echo $book->getAuteur(); ?>">
    </div><br>
    <div class="form-group">
        <label>Annee :</label>
        <input name="annee" type="text" class="form-control" value="<?php echo $book->getAnnee(); ?>">
    </div><br>

    <input type="submit" name="submit" value="save" class="btn btn-primary">
</form>