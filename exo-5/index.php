<?php
date_default_timezone_get('Europe/Paris');
$timestampForDate = floor(((time() - mktime(0, 0, 0, 5, 15, 2016))) / (24*60*60));
/* $date1 = mktime(0, 0, 0, 5, 16, 2016);
$date2 = time();
$nbDay = $date2 - $date1;
$some = ($nbDay/86400);
$some = foor($some);
 */
$dateObjet1 = new DateTime('16*05*2016');

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <title>Exo-5 Partie-IX</title>
    </head>
    <body>
        <div class="page">
            <div class="row">
                <div class="col-md-12 text-center mt-3 mb-3">
                    <p>Le nombre du jour dépuis 02/08/2016 jusqu'à aujourd'hui (le 20/12/2019): <strong><?= $timestampForDate ?></strong></p>
                </div>
            </div>
        </div>
        <div class="row boxButton text-center">
        <div class="col-md-12  border border-1px-solid-info ">
            <p><a title="buttonPage" href="../index.php" class="btn btn-info">Page d'accueil</a></p>
        </div> 
        </div>
    </body>
</html>
