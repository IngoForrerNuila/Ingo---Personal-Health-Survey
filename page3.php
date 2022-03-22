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
        <p id="question3"> How important is physical activity to you? </p>
        <div id="question1con" class="col-sm-12" heigth="auto" width="auto">
            <form action="page4.php" method="post" onsubmit="return validateQuestion('range-slider');">
                <input type="range" name="range-slider-changed" min="1" max="5" value="1" id="range-slider">
                <p class="spacer"></p>
                <p id="validation-warning" class="warning"></p>
                <button type="submit" class="btn btn-primary">Next</button>
                <a href="page2.php">BACK</a>
                <input type="hidden" name="lastPageID" value="page3">
            </form>
        </div>

        <div id="question3" class="col-sm-12">
            <img id="imgpage1" src="images/active.jpg" class="img-responsive">
        </div>

    </div>





    <?php include "footer.php"; ?>
    <script src='main.js'></script>
</body>

</html>