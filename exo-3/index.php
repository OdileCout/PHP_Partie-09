<?php 
//le setlocale sert à 
//LC_TIME est une constane definie par php, contient beaucoup d'informations, ici c'st pour donnet la date en français
setlocale(LC_ALL, 'fr_FR.UTF-8');
$date = strftime('%A %d %B %Y');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <title>Exo-3 Partie-IX</title>
    </head>
    <body>
        <div class="page">
            <div class="row">
                <div class="col-md-12 text-center mt-3 mb-3">
                    <p><?php echo 'Nous sommes le ' . $date; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center border border-1px-solid-info boxButton">
            <p><a href="../index.php" class="btn btn-info">Page d'accueil</a></p>
        </div> 
    </body>
</html>
