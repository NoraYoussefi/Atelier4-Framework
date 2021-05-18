<?php foreach ($stores as $store) : ?>
    <h1 class="titreBillet">Nom : <?php echo $store->getName(); ?></h1>
    </a>
    <p>Adresse : <?php echo $store->getAdresse(); ?></p>
    </header>
    <p>Eamil : <?php echo $store->getEmail(); ?></p>
    <p>Telephonne : <?php echo $store->getTelephone(); ?></p>
    </article>
    <form action="" method="get">
        <button name="action" value="deletestore" class="btn btn-danger">Supprimer</button>
        <button name="action" value="editstore" class="btn btn-success">Modifier</button>
        <button name="action" value="showBook" class="btn btn-secondary">BookStore</button>
        <button name="action" value="showOthers" class="btn btn-dark">add BookStore</button>
        <input name="id" value="<?php echo $store->getIdBookStore(); ?>" style="display: none;">
    </form>

    <hr>
<?php endforeach; ?>