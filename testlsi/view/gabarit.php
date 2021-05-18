<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Contenu/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title><?= $titre ?></title>
</head>

<body>
    <div id="global" class="container">
        <header>
            <form method="get" class="my-3 text-center text-white bg-dark">
                <button name="action" class="btn btn-info" value="book">showBook</button>
                <button name="action" class="btn btn-info" value="addbook">addBook</button>
                <button name="action" class="btn btn-info" value="getstores">showStore</button>
                <button name="action" class="btn btn-info" value="addstore">addStore </button>
            </form>
        </header>

        <div class="card bg-light text-primary">
            <div class="card-body text-center">
                <div id="contenu" class="card-text">
                    <?= $contenu ?>
                </div> 
            </div>
        </div>

        <footer id="piedBlog">
           <h2> Blog réalisé avec PHP, HTML5 et CSS .</h2>

        </footer>
    </div> 
</body>

</html>