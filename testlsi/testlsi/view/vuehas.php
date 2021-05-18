<?php foreach ($books as $book) : ?>
    <article>
        <header>

            <h1 class="titreBillet">Titre : <?php echo $book->getName(); ?></h1>
            </a>
            <p>Auteur : <?php echo $book->getAuteur(); ?></p>
        </header>
        <p>Annee : <?php echo $book->getAnnee(); ?></p>
    </article>
    <form method="post">
        <input name="id1" value="<?php echo $book->getId(); ?>" style="display: none;">
        <input type="submit" name="submit" class="btn btn-danger" value="delete">
    </form>
    <hr />
<?php endforeach; ?>