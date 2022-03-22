<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PERSONAL HEALTH SURVEY</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>


</head>

<body>
    <?php include 'header2.php'; ?>
    <?php include 'data-collector.php'; ?>
    <?php include 'evaluate-user-data.php'; ?>

    <p id="ending">THANK YOU VERY MUCH FOR FILLING OUT THE SURVEY </p>

    <?php

    
    echo array_values($_SESSION['page1']);

    $a=array($_SESSION['page1'],$_SESSION['page2'],$_SESSION['page3']);
        if(array_sum($a) < 5) {
            echo "ESTA ES UNA PRUEBA" . $a;
            } 
            else {
                echo array_values($a). "ESTA ES MAYOR QUE CINCO" .$a;


            }

    ?>


    
    <div class="row">
        <div class="col-sm-8">

            <?php include "footer.php"; ?>
            <script src='main.js'></script>
        </div>
</body>