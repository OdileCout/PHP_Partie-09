<?php
$date = '2020-01-02';
$dateOfTheDay = date('d-m-Y', strtotime($date.' - 22 DAY'));
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <title>Exo-8 Partie-IX</title>
    </head>
    <body>
        <div class="page">
            <div class="row">
                <div class="col-md-12 text-center mt-3 mb-3">
                    <p>La date du jour + 20 jours: <strong> <?= $dateOfTheDay ?> </strong>.</p>
                </div>
            </div>
        </div>
        <div class="row boxButton text-center">
        <div class="col-md-12  border border-1px-solid-info ">
            <p><a href="../index.php" class="btn btn-info">Page d'accueil</a></p>
        </div> 
        </div>
    </body>
</html>
