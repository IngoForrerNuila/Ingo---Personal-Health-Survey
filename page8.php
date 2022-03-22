<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PERSONAL HEALTH SURVEY</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='main.js'></script>
</head>

<body>


    <?php include 'data-collector.php'; ?>
    <?php include "header2.php"; ?>

    <div id="mainquestions" heigth="auto" width="auto">
        <div id="question1con" class="col-sm-12">
            <p id="question1"> On a typical day, how many of your
                meals or snacks contain vegetables? </p>
            <p id="validation-warning" class="warning"></p>

            <form action="page9.php" method="post" onsubmit="return validateQuestion('number-text');">
                <input type="number" name="number-text" id="number-text" class="" style="max-width: 80px;"><br><br>
                
                <input type="hidden" name="lastPageID" value="page8">

                <a href="page7.php">
                    <button type="button" class="btn btn-primary">Back</button>

                </a>

                <button type="submit" name="submit" class="btn btn-primary">Next</button>
                <p class="spacer"></p>



            </form>
        </div>

        <div id="question8" class="col-sm-12">
            <img id="imgpage1" src="images/vegetables.jpg" class="img-responsive">
        </div>

    </div>


    <?php include "footer.php"; ?>
    <script src='main.js'></script>
</body>

</html>