<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/style.css">
</head>
<style>
    a {
        color: black;
        font-size: 20px;
    }
</style>

<body>
    <div class="alert alert-primary " style="height: 90px;">
        <h2 class="h-auto text-center">Wise developers University</h2>
    </div>
    <ul class="nav nav-tabs" id="navId">
        <li class="nav-item">
            <a href="<?= BASE_URL ?>/?link=addChambre" class=" nav-link">Ajouter Chambre</a>
        </li>
        <li class="nav-item">
            <a href="<?= BASE_URL ?>/?link=addEtudiant" class="nav-link">Ajouter Etudiant</a>
        </li>
        <li class="nav-item">
            <a href="<?= BASE_URL ?>/?link=lsChambre" class="nav-link">Liste Chambre</a>
        </li>
        <li class="nav-item">
            <a href="<?= BASE_URL ?>/?link=lsEtudiant" class="nav-link">Liste Etudiant</a>
        </li>
    </ul>
    <div class="row p-5">
        <div class="col-xs-2 col-sm- col-md-3">
            <img src="images/icone.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm- col-md-8" style="background-color: blue;">
            <h2>Accueil</h2>
            <div class="card">
                <?php
                echo $content_for_layout;
                ?>
            </div>
        </div>
    </div>
</body>

</html>