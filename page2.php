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
        <div id="question1con" class="col-sm-12" heigth="auto" width="auto">
            <p id="question2">Do you take nutritional supplements?</p>
            <form action="page3.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'masiso');">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="masiso" id="single-choice-0" value="0">
                    <label class="form-check-label" for="single-choice-0">
                        NO
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="masiso" id="single-choice-1" value="1">
                    <label class="form-check-label" for="single-choice-1">
                        YES
                    </label>
                </div>

                <input type="hidden" name="lastPageID" value="page2">
                <p id="validation-warning" class="warning"></p>

                <a href="page1.php">
                    <button type="button" class="btn btn-primary">Back</button>

                </a>

                <button type="submit" name="submit" class="btn btn-primary">Next</button>
                <p class="spacer"></p>
            </form>
        </div>

        <div id="question2" class="col-sm-12">
            <img id="imgpage1" src="images/suplements.jpg" class="img-responsive">
        </div>

    </div>


    <?php include "footer.php"; ?>
    <script src='main.js'></script>
</body>

</html>