<?php $this->titre = "Mes Books"; ?>
<?php foreach ($books as $book) : ?>
    <article class="">
        <header>
            <h1 class="titreBillet"> Titre : <?php echo $book->getName(); ?></h1>
            </a>
            <p>Auteur : <?php echo $book->getAuteur(); ?></p>
        </header>
        <p>Annee : <?php echo $book->getAnnee(); ?></p>
        <p>

        <form method="post">
            <input name="id" value="<?php echo $book->getId(); ?>" style="display: none;">
            <input type="submit" name="submit" class="btn btn-primary" value="save">
        </form>
        </p>
    </article>
    <hr />
<?php endforeach; ?>