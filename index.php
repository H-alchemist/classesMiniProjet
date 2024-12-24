<?php

include("classes.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $p1=new Patient('echchabli','hamza'  );

        echo $p1->getRondez() .'<br> <br><br>';
        $p1->prendreRendezVous('2024/5/8');

        echo $p1->getRondez().'<br> <br><br>';
        echo $p1->afficherNomComplet().'<br>';

        $m1=new Medecin('lgnaoui','ismail'  , 'dentiste' );

        echo $m1->getSpecialite() . '<br> <br><br>';

        echo $m1->afficherNomComplet() . '<br><br><br>';

        echo $m1->changerNom('hamza') . '<br><br><br>';

        echo $m1->afficherNomComplet() ;



    ?>
    
</body>
</html>