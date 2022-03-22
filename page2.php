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
    <div id="question1con" class= "col-sm-12" heigth="auto" width="auto">
    <p id="question2">Do you take nutritional supplements?</p>
    <form action="page3.php" method="post" onsubmit="return validateQuestion('single-choice');">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
            <label class="form-check-label" for="single-choice-0">
                NO
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
            <label class="form-check-label" for="single-choice-1">
                YES
            </label>
        </div>

        <input type="hidden" name="lastPageID" value="page2">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">Next</button>
        <a href="page1.php">BACK</a> -
        <p class="spacer"></p>
    </form>
    </div>

    <div id="question2" class= "col-sm-12">
        <img id="imgpage1" src="images/suplements.jpg" class="img-responsive">
    </div>

</div>


<?php include "footer.php"; ?>
<script src='main.js'></script>
</body>

</html>