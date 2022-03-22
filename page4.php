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
    <?php include "header2.php"; ?>
    <?php include 'data-collector.php'; ?>



    <div id="mainquestions" heigth="auto" width="auto">
        <div id="question1con" class="col-sm-12" heigth="auto" width="auto">
            <p id="question4">What additional physical activity do you
                do most?</p>

            <form action="page5.php" method="post" onsubmit="return validateCheckboxes();">
                <input type="radio" id="lifting" name="q41" value="Lifting">
                <label for="lifting">Lifting</label><br>

                <input type="radio" id="walking" name="q42" value="Walking">
                <label for="walking">Walking</label><br>

                <input type="radio" id="walking" name="q43" value="Jogging">
                <label for="jogging">Jogging</label><br>

                <input type="radio" id="jogging" name="q44" value="Running">
                <label for="running">Running</label><br>

                <input type="radio" id="swimming" name="q45" value="Swimming">
                <label for="swimming">Swimming</label><br>

                <input type="radio" id="dancing" name="q46" value="Dancing">
                <label for="dancing">Dancing</label><br>

                <input type="radio" id="aerobics" name="q47" value="Aerobics">
                <label for="aerobics">Aerobics</label><br>

                <input type="radio" id="pilates" name="q48" value="Pilates">
                <label for="pilates">Pilates</label><br>

                <input type="radio" id="teamsports" name="q49" value="Teamsports">
                <label for="teamsports">Team sports </label><br>

                <a href="page3.php">BACK</a>
                <button type="submit" class="btn btn-primary">Next</button>

                <input type="hidden" name="lastPageID" value="page4">
                <input type="hidden" name="checkboxValues" value="checkboxValues">
                
            </form>
        </div>

        <div id="question4" class="col-sm-12">
            <img id="imgpage1" src="images/fisical.jpg" class="img-responsive">
        </div>

    </div>

    <?php include "footer.php"; ?>
    <script src='main.js'></script>
</body>

</html>