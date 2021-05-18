<form action="" method="post">
    <label>Nom :</label><input type="text" value="<?php echo $store->getName(); ?>" name="name">
    <label>Adresse :</label><input type="text" value="<?php echo $store->getAdresse(); ?>" name="adresse">
    <label>Email :</label><input type="text" value="<?php echo $store->getEmail(); ?>" name="email">
    <label>Telephone :</label><input type="text" value="<?php echo $store->getTelephone(); ?>" name="telephone">
    <input type="submit" value="save" class="my-2 btn btn-primary" name="submit">
</form>