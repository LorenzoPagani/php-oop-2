<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Pet shop</title>
</head>
<?php
require __DIR__ . '\models\products.php';
require __DIR__ . '\models\foods.php';
require __DIR__ . '\models\kennels.php';
require __DIR__ . '\models\toys.php';
require __DIR__ . '\data.php';


?>

<body>
    <header>
        <h1 class="text-center">Prodotti</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center"><?= get_class($foods[0]) ?></h1>
                </div>
                <?php foreach ($foods as $food) { ?>
                    <div class="col-3">
                        <div class="card mb-5">
                            <img src="<?= $food->image ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $food->name ?></h5>
                                <h6 class="card-subtitle text-muted"><?= $food->type ?></h6>
                                <p class="card-text">
                                    Animal: <?= $food->animal ?><br>
                                    Price: $<?= $food->price ?><br>
                                    Flavor: <?= $food->flavour ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <h1 class="text-center"><?= get_class($kennels[0]) ?></h1>
                </div>
                <?php foreach ($kennels as $kennel) { ?>
                    <div class="col-3">
                        <div class="card mb-5">
                            <img src="<?= $kennel->image ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $kennel->name ?></h5>
                                <h6 class="card-subtitle text-muted"><?= $kennel->size ?></h6>
                                <p class="card-text">
                                    Animal: <?= $kennel->animal ?><br>
                                    Price: $<?= $kennel->price ?><br>
                                    Material: <?= $kennel->material ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <h1 class="text-center"><?= get_class($toys[0]) ?></h1>
                </div>
                <?php foreach ($toys as $toy) { ?>
                    <div class="col-3">
                        <div class="card mb-5">
                            <img src="<?= $toy->image ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $toy->name ?></h5>
                                <h6 class="card-subtitle text-muted"><?= $toy->category ?></h6>
                                <p class="card-text">
                                    Animal: <?= $toy->animal ?><br>
                                    Price: $<?= $toy->price ?><br>
                                    Age Group: <?= $toy->ageGroup ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </main>
    <footer></footer>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>