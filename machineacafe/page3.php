<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3 - Recap de la commande</title>
</head>

<body>
    <?php
    include_once("headertype.php");
    ?>

    <div class="m-4">
        <a href="page2.php"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1" />
            </svg></a>
    </div>

    <!--- Tableau de recap de la commande --->

    <div class=" text-center  m-5 ">
        <h1>Vous avez commandé un <?php echo $_GET['boisson']; ?> avec <?php echo $_GET['sucre']; ?> sucres </h1>
        <p>Maintenant on passe au paiment 💸💸</p>
        <a href="page4.php" class="btn btn-primary">Suivant</a>
    </div>

    <div class="progress m-5 col-5 " role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar" style="width: 50%"></div>
        <div class="progress-bar" style="width: 40%"></div>
    </div>


</body>

</html>