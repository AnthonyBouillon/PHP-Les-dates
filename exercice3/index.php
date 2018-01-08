<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Les dates Exercice 3</title>
    </head>
    <body>
        <h1>Les dates en PHP</h1><hr/>
        <!-- Affiche la date courante et entière au format français :  jeudi 4 janvier 2018 -->
        <p>Aujourd'hui nous sommes le : <?php
            setlocale(LC_TIME, 'fr_FR.UTF8');
            echo strftime('%A %d %B %Y');
            ?></p>
        <hr/>
        <p class="btn"><a href="../exercice2/index.php">Précédent</a></p>   
        <p class="btn"><a href="../exercice4/index.php">Suivant</a></p>
        <style>
            .btn{
                display: inline-block;
            }
        </style>
    </body>
</html>
