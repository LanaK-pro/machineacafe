<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Machine a café</title>
</head>

<body>
    <?php
    include_once("headertype.php");
    ?>

    <h1 class="text-center m-4">Choix du café</h1>

    <table class="table table-sm m-5 ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Expresso</td>
                <td>1.00</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Café au lait</td>
                <td>1.50</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Thé a la menthe</td>
                <td>1.20</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Coca-Cola</td>
                <td>2.00</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Chocolat au Lait</td>
                <td>1.00</td>
            </tr>
        </tbody>
    </table>

    <!-- DECOMMENTE POUR ENVOYER LE FORMULAIRE --->
    <form class=" m-5 " method="GET" action="page2.php">
        <div>
            <label for="boissonChoix">Boisson :</label>
            <input type="text" class="form-control" id="boissonChoix" placeholder="entrez votre choix" name="boisson" required>
        </div>

        <input type="submit" class="btn btn-primary" value="Valider"></input>
    </form>

    <div class="progress m-5 col-5 " role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar" style="width: 0%"></div>
    </div>




    <?php

    // Création du tableau des options de boisson

    $boissons = [
        [
            "id" => 10,
            "title" => "Expresso",
            "prix" => 1.00,
            "Sucre" => true,
        ],
        [
            "id" => 11,
            "title" => "Café au lait",
            "prix" => 1.50,
            "Sucre" => true,
        ],
        [
            "id" => 12,
            "title" => "Thé a la menthe",
            "prix" => 1.20,
            "Sucre" => true,
        ],
        [
            "id" => 13,
            "title" => "Coca Cola",
            "prix" => 2.00,
            "Sucre" => false,
        ],
        [
            "id" => 14,
            "title" => "Chocolat au lait",
            "prix" => 1.00,
            "Sucre" => true,
        ],
    ];





    // Condition pour une entrée autre


    if (isset($_GET['boisson'])) {
        $nomBoisson = $_GET['boisson'];

        foreach ($boissons as $key => $boisson) {
            if ($boisson["title"] === $nomBoisson) {
                echo ("ok !");
            } else {
                echo ("non !");
            }
        }


        var_dump(array_column($boissons, "title"));
    }







    ?>





</body>

</html>