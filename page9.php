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
            <p id="question1"> On a typical day, how many of your
                meals or snacks contain fruit? </p>
            <p id="validation-warning" class="warning"></p>

            <form action="page10.php" method="post" onsubmit="return validateQuestion('number-text');">
                <input type="number" name="number-text" id="number-text" class="" style="max-width: 80px;"><br><br>
                <button type="submit" class="btn btn-primary">Next</button>
                <a href="page8.php">BACK</a>
                <input type="hidden" name="lastPageID" value="page9">
            </form>
        </div>
        <p class="spacer"></p>
    </div>

    <div id="question9" class="col-sm-12">
        <img id="imgpage1" src="images/fruits.jpg" class="img-responsive">
    </div>

    </div>


    <?php include "footer.php"; ?>
    <script src='main.js'></script>
</body>

</html>