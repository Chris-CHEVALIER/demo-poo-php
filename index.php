<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Pokédex - Accueil</title>
</head>

<body>
  <?php
  include "./Pokemon.php";
  include "./PokemonController.php";
  $pokemonController = new PokemonController();
  $pokemons = $pokemonController->readAll();
  ?>
  <main class="container">

    <?php
    foreach ($pokemons as $pokemon) { ?>
      <h3>#<?= $pokemon->getNumber() ?> <?= $pokemon->getName() ?></h3>
      <p><?= $pokemon->getDescription() ?></p>
    <?php } ?>


    <a class="btn btn-primary" href="./create.php">Créer un Pokémon</a>
  </main>
</body>

</html>

<!-- <div><object data="demo.txt"></object></div> -->