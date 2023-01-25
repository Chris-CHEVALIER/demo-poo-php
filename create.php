<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Pokédex - Créer un Pokémon</title>
</head>

<body>

    <?php
    if ($_POST) {
        include "./Pokemon.php";
        include "./PokemonController.php";
        $pokemonController = new PokemonController();
        $newPokemon = new Pokemon($_POST);
        $pokemonController->create($newPokemon);
        echo "<script>window.location.href='./index.php'</script>";
    }
    ?>

    <main class="container">
        <h3>Créer un Pokémon</h3>

        <form method="post">
            <label for="number">Numéro</label>
            <input class="mb-2 form-control" type="number" name="number" id="number" placeholder="Numéro du Pokémon" required>
            <label for="name">Nom</label>
            <input class="mb-2 form-control" type="text" name="name" id="name" placeholder="Nom du Pokémon" required>
            <label for="description">Description</label>
            <textarea class="mb-2 form-control" name="description" id="description" placeholder="Description du Pokémon" required></textarea>

            <input type="submit" value="Créer" class="btn btn-success">
        </form>
    </main>
</body>

</html>