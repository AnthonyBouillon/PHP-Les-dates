<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Les dates Exercice 2</title>
    </head>
    <body>
        <h1>Les dates en PHP</h1><hr/>
        <!-- Affiche la date courante : 5-01-1958 -->
        <p>Aujourd'hui nous sommes le : <?= date('d-m-Y'); ?></p>
        <hr/>
        <p class="btn"><a href="../exercice1/index.php">Précédent</a></p>   
        <p class="btn"><a href="../exercice3/index.php">Suivant</a></p>
        <style>
            .btn{
                display: inline-block;
            }
        </style>
    </body>
</html>
