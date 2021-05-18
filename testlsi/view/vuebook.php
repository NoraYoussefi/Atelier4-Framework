<?php $this->titre = "Mes Books"; ?>
<?php foreach ($books as $book) : ?>
    <article>
        <header>

            <h1 class="titreBillet">Titre :<?php echo $book->getName(); ?></h1>
            </a>
            <p>auteur :<?php echo $book->getAuteur(); ?></p>
        </header>
        <p>Annee :<?php echo $book->getAnnee(); ?></p>
    </article>
    <p>
    <form method="get">

        <button name="action" value="deletebook" >Supprimer</button>
        <button name="action" value="editbook" >Modifier</button>
        <input name="id" value="<?php echo $book->getId(); ?>" style="display: none;">

    </form>
    </p>
    </article>
    <hr />
<?php endforeach; ?>