<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PERSONAL HEALTH SURVEY</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <script src='main.js'></script>
</head>

<body>


    <?php include 'data-collector.php'; ?>
    <?php include "header2.php"; ?>

    <div id="mainquestions" heigth="auto" width="auto">
        <div id="question1con" class="col-sm-12">
            <p id="question5"> Do you feel you do too little, just enough or way too much additional physical activity?</p>
            <p id="validation-warning" class="warning"></p>


            <form action="page6.php" method="post" onsubmit="return validateQuestion('range-slider');">
                <input type="range" name="range-slider-changed" min="1" max="5" value="1" id="range-slider">
                <p class="spacer"></p>
                
                <input type="hidden" name="lastPageID" value="page5">

                <a href="page4.php">
                    <button type="button" class="btn btn-primary">Back</button>

                </a>

                <button type="submit" name="submit" class="btn btn-primary">Next</button>
                <p class="spacer"></p>

            </form>
        </div>

        <div id="question5" class="col-sm-12">
            <img id="imgpage1" src="images/fisiact.jpg" class="img-responsive">
        </div>

    </div>





    <?php include "footer.php"; ?>
    <script src='main.js'></script>
</body>

</html>